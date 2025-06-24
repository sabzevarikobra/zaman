<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>ثبت‌نام | برنامه حسابداری زمان</title>
    <link rel="stylesheet" href="{{ asset('css/auth-fullpage.css') }}">
</head>
<body>
<div class="auth-container">
    <div class="auth-image-side">
        <img src="{{ asset('images/accounting-side.jpg') }}" alt="برنامه حسابداری زمان">
        <div class="image-overlay">
            <h1>به برنامه حسابداری زمان خوش آمدید</h1>
            <p>مدیریت مالی آسان و حرفه‌ای برای همه!</p>
        </div>
    </div>
    <div class="auth-form-side">
        <div class="register-box">
            <h2>ثبت‌نام کاربر جدید</h2>
            @if ($errors->any())
                <div class="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ route('register') }}" autocomplete="off" novalidate>
                @csrf
                <div class="form-group">
                    <label for="name">نام و نام خانوادگی</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" required autofocus>
                </div>
                <div class="form-group">
                    <label for="email">ایمیل</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" required>
                </div>
                <div class="form-group">
                    <label for="password">رمز عبور</label>
                    <input type="password" name="password" id="password" required>
                </div>
                <div class="form-group">
                    <label for="password_confirmation">تکرار رمز عبور</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" required>
                </div>
                <button type="submit" class="btn-register">ثبت‌نام</button>
                <div class="login-link">
                    قبلاً ثبت‌نام کرده‌اید؟ <a href="{{ route('login') }}">ورود</a>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>برنامه حسابداری زمان</title>
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
</head>
<body>
    @include('partials.header')

    <main>
        <section class="intro">
            <h1>برنامه حسابداری زمان</h1>
            <p>
                برنامه حسابداری زمان یک نرم‌افزار مدرن برای مدیریت مالی، ثبت تراکنش‌ها، گزارش‌گیری و تحلیل هزینه و درآمد است.
                این برنامه مناسب کسب‌وکارهای کوچک و بزرگ است و با رابط کاربری ساده، کار با آن برای همه آسان است.
                امکانات ویژه شامل ثبت تراکنش‌ها، مدیریت حساب‌ها، دسته‌بندی هزینه و درآمد، گزارش‌های نموداری و ... می‌باشد.
            </p>
        </section>

        <section class="map-section">
            <h2>موقعیت ما روی نقشه</h2>
            <div class="map-container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3238.2454965187416!2d59.59912331526015!3d36.21288278008116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f6cba2c7f3b3d97%3A0x6b6e7e67b6b6b6b6!2z2LPZhtin2YbYqSDYp9mG2YbZgyDYp9mH2Kcg2KfZhNiq2KfZhQ!5e0!3m2!1sfa!2s!4v1712345678901"
                    width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </section>
    </main>

    @include('partials.footer')

    <script src="{{ asset('js/landing.js') }}"></script>
</body>
</html>

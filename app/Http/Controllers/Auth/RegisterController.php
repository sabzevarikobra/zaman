<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3|max:64',
            'email' => 'required|email|unique:users,email',
            'password' => [
                'required', 'string', 'min:8', 'max:64',
                'regex:/[a-z]/',      // حرف کوچک
                'regex:/[A-Z]/',      // حرف بزرگ
                'regex:/[0-9]/',      // عدد
                'regex:/[@$!%*#?&]/', // کاراکتر خاص
                'confirmed'
            ]
        ], [
            'password.regex' => 'رمز عبور باید شامل حروف کوچک و بزرگ، عدد و کاراکتر خاص باشد.',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'ثبت‌نام با موفقیت انجام شد. لطفا وارد شوید.');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;


class ResetPasswordController extends Controller
{
    public function showResetForm(Request $request, $token)
    {
        return view('reset.password.resetPassword', ['token' => $token, 'email' => $request->email]);
    }

    public function reset(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
        ]);

        $status = Password::reset($request->only(
            'email', 'password', 'password_confirmation', 'token'
        ), function ($user) use ($request) {
            $user->forceFill([
                'password' => bcrypt($request->password),
                'remember_token' => Str::random(60),
            ])->save();

            $user->tokens()->delete();
        });

        return $status === Password::PASSWORD_RESET
            ? redirect('/login')->with('status', __($status))
            : back()->withErrors(['email' => [__($status)]]);
    }
}
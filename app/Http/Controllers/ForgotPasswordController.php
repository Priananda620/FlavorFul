<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\URL;

class ForgotPasswordController extends Controller
{
    public function showLinkRequestForm()
    {
        return view('resetPassword');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $status = Password::sendResetLink(
            $request->only('email'),
            function ($user, $token) use ($request) {
                $resetUrl = URL::signedRoute('password.reset', ['token' => $token, 'email' => $request->email]);
                $profileUrl = User::where('email', $request->email)->first();
                
                Mail::send('emails.forgot-password', ['username' => $profileUrl->username,'resetUrl' => $resetUrl, 'profileUrl' => url('/profile').'/'.$profileUrl->username, 'avatarUrl' => asset('storage/assets/user_images/').'/'.$profileUrl->username], function ($message) use ($request) {
                    $message->to($request->email)->subject('Reset Your Password');
                });
            }
        );
    
    

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)])->withInput();
    }
}
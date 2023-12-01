<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
</head>
<body>
    <div style="background-color: #2b2b2b; color: #ffffff; font-family: Arial, sans-serif; line-height: 1.5; margin: 0; padding: 0;">
        <div style="max-width: 600px; margin: 0 auto; padding: 20px;">
            {{-- <img src="https://instagram.fcgk40-1.fna.fbcdn.net/v/t51.2885-19/253698093_1051430415652501_7971327349931650443_n.jpg?stp=dst-jpg_s150x150&_nc_ht=instagram.fcgk40-1.fna.fbcdn.net&_nc_cat=101&_nc_ohc=uDb3sWxm60IAX_iq3lZ&edm=AOQ1c0wBAAAA&ccb=7-5&oh=00_AfCwwmYh4lECZ55R0DfHYaErwVH41t3Z4JFLQGQzEfNX0Q&oe=6496DD92&_nc_sid=f70a57" alt="MindSpaze Logo" style="width: 60px; height: 60px; margin-bottom: 20px;"> --}}

            <h2 style="color: #00f514; margin-bottom: 20px;"><span style="color: orange">FlavorFul</span> <span style="color: grey">-</span> Reset Your Password</h2>
{{-- {{$avatarUrl}} --}}
            <div style="margin-bottom: 20px;border-radius: 50%;">
                <a href="{{$profileUrl}}" style="display: flex; align-items: center;background-color: #1d1d1d;padding: 20px; border-radius: 8px; box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);">
                    <div style="background-image:url('{{$avatarUrl}}');background-color: #ffffff; width: 35px; height: 35px; border-radius: 50%; margin-right: 8px;background-size: cover;background-position: center;"></div>
                    <span style="color: #ffffff;height: fit-content;margin: auto 0;">{{$username}}</span>
                </a>
            </div>

            <div style="background-color: #1d1d1d; padding: 20px; border-radius: 4px;">
                <h1 style="margin-bottom: 10px;">Hello!</h1>
                <p style="margin-bottom: 10px;">You are receiving this email because we received a password reset request for your account.</p>
                <p style="margin-bottom: 10px;">Click the button below to reset your password:</p>
                <p style="margin-bottom: 10px;">
                    <a href="{{ $resetUrl }}" style="text-decoration: none;">
                        <button style="background-color: rgb(10, 206, 10); color: #ffffff; border: none; padding: 10px 20px; border-radius: 4px; cursor: pointer;">
                            Reset Password
                        </button>
                    </a>
                </p>
                <p style="margin-bottom: 10px;">If you did not request a password reset, no further action is required.</p>
            </div>
            
            <p style="margin-top: 20px; color: rgb(10, 206, 10);">Regards, <br> FlavorFul</p>
        </div>
    </div>
</body>
</html>
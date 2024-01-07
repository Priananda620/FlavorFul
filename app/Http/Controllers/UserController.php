<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    private static function guidv4($data = null)
    {
        $data = $data ?? random_bytes(16);
        assert(strlen($data) == 16);

        $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80);

        // Output the 36 character UUID.
        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }

    public function profile(): View
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }


    public function getUser()
    {
        return [
            'user' => auth()->user()
        ];
    }

    public function updateProfile(Request $request)
    {
        try {
            // dd($request->input('username'));
            $validatedData = $request->validate([
                'username' => 'required|string|max:255',
                'email' => 'required|string|max:255',
                'user_profile_img' => 'image|mimes:jpeg,png,jpg,gif'
            ]);

            $user = User::where('id', auth()->user()->id)->first();

            $user->username = $validatedData['username'];

            $user->email = $validatedData['email'];

            if ($request->hasFile('user_profile_img')) {

                if ($user->avatarUrl && $user->avatarUrl != 'default.jpg' && Storage::disk('public_html')->exists("assets/userAvatars/{$user->avatarUrl}")) {
                    Storage::disk('public_html')->delete("assets/userAvatars/{$user->avatarUrl}");
                }

                $file = $request->file('user_profile_img');
                $binaryData = file_get_contents($file->getRealPath());

                $extension = $file->getClientOriginalExtension();
                $uniqueString = self::guidv4();
                $fileName = $uniqueString . "_" . auth()->user()->username . "." . $extension;

                $filePath = 'assets/userAvatars/' . $fileName;
                Storage::disk('public_html')->put($filePath, $binaryData);

                $user->avatarUrl = $fileName;
            }

            $user->save();

            return response()->json([
                'message' => 'profile updated successfully'
            ], 200);
        } catch (\Throwable $th) {
            throw $th;
        } catch (ValidationException $exception) {
            return response()->json([
                'message' => 'The given data was invalid.',
                'errors' => $exception->errors(),
            ], 422);
        }
    }

    public function changePassword(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'current_password' => 'required|string|min:8|max:255',
                'new_password' => 'required|string|min:8|max:255',
                'new_password_2' => 'required|string|min:8|max:255|same:new_password'
            ]);


            $user = User::where('id', auth()->user()->id)->first();

            if (!Hash::check($request->input('current_password'), $user->password) && $request->input('current_password') != $request->input('current_password_2')) {
                return response()->json([
                    'message' => 'The given data was invalid.',
                    'errors' => ['current_password' => ['Current password is incorrect']]
                ], 422);
            }

            $user->password = Hash::make($request->input('new_password'));
            $user->save();

            return response()->json([
                'message' => 'Password Changed Successfully.',
                'success' => ['new password' => ['Password Changed Successfully.']]
            ], 200);
        } catch (\Throwable $th) {
            throw $th;
        } catch (ValidationException $exception) {
            return response()->json([
                'message' => 'The given data was invalid.',
                'errors' => $exception->errors(),
            ], 422);
        }
    }

    public function register(Request $request)
    {
        $rules = [
            'username' => 'required|min:6|max:255|unique:users',
            'password' => 'required|min:8|max:255',
            'email' => 'required|email:rfc,dns|unique:users',
        ];

        $messages = [
            'username.required' => 'The username field is required.',
            'username.unique' => 'The username has already been taken.',
            'username.min' => 'The username must be at least :min characters.',
            'username.max' => 'The username may not be greater than :max characters.',
            'password.required' => 'The password field is required.',
            'password.min' => 'The password must be at least :min characters.',
            'password.max' => 'The password may not be greater than :max characters.',
            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'The email address has already been registered.',

        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            // Validation failed
            return response()->json(['errors' => $validator->errors()], 422);
        }

        if (empty(User::where('email', $request->input('email'))->first()) && empty(User::where('username', $request->input('username'))->first())) {
            // $ip = $request->ip();


            $user = new User();

            // $user->last_ip = $ip;

            // if($ip !== "127.0.0.1"){
            //     $ip_details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
            //     $country = $ip_details->country;
            //     $user->country_code = $country;
            // }else{
            //     $user->country_code = 'id';
            // }

            $user->username = $request->input('username');
            $user->email = $request->input('email');

            $user->password = bcrypt($request->input('password'));
            $user->save();

            $credentials = $request->only('email', 'password');

            Auth::attempt($credentials);

            $userObj = Auth::user();

            $newTokenName = time();

            /** @var \App\Models\User $userObj **/
            $accessToken = $userObj->createToken($newTokenName);

            $cookie1 = cookie('api_token', $accessToken->plainTextToken, 1440);
            $cookie2 = cookie('token_name', $newTokenName, 1440);

            Session::put('user', $user);

            return response()->json([
                'token_object' => $accessToken->accessToken,
                'token' => $accessToken->plainTextToken,
            ])->withCookie($cookie1)->withCookie($cookie2);
        } else {
            return response()->json([
                'message' => 'username or email is exist',
            ], 401);
        }
    }
}

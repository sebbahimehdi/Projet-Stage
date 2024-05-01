<?php


namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Client;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ForgetPasswordManager extends Controller
{
    public function forgetPassword()
    {
        return view('ForgerPasswordManager.ForgetPassword');
    }

    public function forgetPasswordPost(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:clients',
        ]);

        // Generate a random token
        $token = Str::random(64);

        // Store the token in the password_reset_tokens table
        // Check if the email already exists in the password_reset_tokens table
$existingRecord = DB::table('password_reset_tokens')->where('email', $request->email)->first();

if ($existingRecord) {
    // If the email already exists, update the existing record
    DB::table('password_reset_tokens')
        ->where('email', $request->email)
        ->update([
            'token' => $token,
            'created_at' => Carbon::now(),
        ]);
} else {
    // If the email doesn't exist, insert a new record
    DB::table('password_reset_tokens')->insert([
        'email' => $request->email,
        'token' => $token,
        'created_at' => Carbon::now(),
    ]);
}


        // Send email with password reset token
        Mail::send('email.forgetPassword', ['token' => $token], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Reset Password');
        });

        return redirect()->route('forget.password.post')->with('success', 'We have sent an email to reset your password.');
    }

    public function resetPassword($token)
    {
        return view('email.new-password', compact('token'));
    }

    public function resetPasswordPost(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:clients',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // Check if the token exists in the password_reset_tokens table
        $updatePassword = DB::table('password_reset_tokens')
            ->where('email', $request->email)
            ->where('token', $request->token)
            ->first();

        if (!$updatePassword) {
            return redirect()->route('reset.password')->with('danger', 'Invalid token.');
        }

        // Update the user's password in the clients table
        Client::where('email', $request->email)->update([
            'password' => Hash::make($request->password)
        ]);

        // Delete the token from the password_reset_tokens table
        DB::table('password_reset_tokens')->where('email', $request->email)->delete();

        return redirect()->route('loginClient.show')->with('success', 'Password reset successfully.');
    }
}

// namespace App\Http\Controllers;

// use Carbon\Carbon;
// use App\Models\Client;
// use Illuminate\Support\Str;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Mail;

// class ForgetPasswordManager extends Controller
// {
//     public function forgetPassword()
//     {
//         return view('ForgerPasswordManager.ForgetPassword');
//     }

//     public function forgetPasswordPost(Request $request)
//     {
//         $request->validate([
//             'email' => 'required|email|exists:clients',
//         ]);

//         // Generate a random token
//         $token = Str::random(64);

//         // Store the token in the password_reset_tokens table
//         DB::table('password_reset_tokens')->insert([
//             'email' => $request->email,
//             'token' => $token,
//             'created_at' => Carbon::now(),
//         ]);

//         // Send email with password reset token
//         Mail::send('email.forgetPassword', ['token' => $token], function ($message) use ($request) {
//             $message->to($request->email);
//             $message->subject('Reset Password');
//         });

//         return redirect()->route('forget.Password.post')->with('success', 'We have sent an email to reset your password.');
//     }

//     public function resetPassword($token)
//     {
//         return view('email.new-password', compact('token'));
//     }

//     public function resetPasswordPost(Request $request)
//     {
//         $request->validate([
//             'email' => 'required|email|exists:clients',
//             'password' => 'required|string|min:6|confirmed',
//         ]);

//         // Check if the token exists in the password_reset_tokens table
//         $updatePassword = DB::table('password_reset_tokens')
//             ->where('email', $request->email)
//             ->where('token', $request->token)
//             ->first();




//         if (!$updatePassword) {
//             return redirect()->route('reset.password')->with('danger', 'Invalid token.');
//         }

//         // Update the user's password in the clients table
//         Client::where('email', $request->email)->update([
//             'password' => Hash::make($request->password)
//         ]);

//         // Delete the token from the password_reset_tokens table
//         DB::table('password_reset_tokens')->where('email', $request->email)->delete();

//         return redirect()->route('loginClient.show')->with('success', 'Password reset successfully.');
//     }
// }
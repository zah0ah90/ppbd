<?php



namespace App\Http\Controllers\Auth;



use App\Http\Controllers\Controller;
use App\Mail\LupaPasswordEmail;
use Illuminate\Http\Request;


use Carbon\Carbon;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

use RealRashid\SweetAlert\Facades\Alert;


class ForgotPasswordController extends Controller

{

    public function showForgetPasswordForm()
    {
        return view('frontend.page-belum-login.lupa-password-page');
    }

    public function submitForgetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token = Str::random(64);

        $reset_password =  DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        $data = ['token' => $token];
        $responseStatus = new LupaPasswordEmail($data);
        if ($responseStatus) {
            Mail::to($request->email)->send($responseStatus);
        }


        // Mail::send('email.LupaPasswordEmail', ['token' => $token], function ($message) use ($request) {
        // $message->to($request->email);
        // $message->subject('Reset Password');
        // });


        // return back()->with('message', 'We have e-mailed your password reset link!');

        if ($reset_password) {
            Alert::success('Berhasil', 'reset password mohon untuk mengecek email');
            return redirect()->route('dashboard-home-frontend');
        } else {
            Alert::error('Gagal', 'Gagal mereset password');
            return redirect()->back();
        }
    }

    public function showResetPasswordForm($token)
    {
        $cek_token = DB::table('password_resets')->where('token', '=', $token)->first();
        if ($cek_token != null) {
            // return view('auth.forgetPasswordLink', ['token' => $token]);
            return view('frontend.page-belum-login.lupa-password-link', ['token' => $token, 'email' => $cek_token->email]);
        } else {
            Alert::warning('', 'Hallo');
            return redirect()->route('dashboard-home-frontend');
        }
    }

    public function submitResetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required'
        ]);

        $updatePassword = DB::table('password_resets')
            ->where([
                'email' => $request->email,
                'token' => $request->token

            ])->first();

        if (!$updatePassword) {
            Alert::warning('salah', 'Salah token');
            return back()->withInput();
        }

        $user = User::where('email', $request->email)->update(['password' => Hash::make($request->password)]);

        DB::table('password_resets')->where(['email' => $request->email])->delete();


        Alert::success('Berhasil', 'Berhasil meng ubah password');
        return redirect()->route('login');
    }
}
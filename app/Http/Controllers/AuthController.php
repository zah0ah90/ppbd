<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;



class AuthController extends Controller
{
    public function index()
    {
        return view('frontend.page-belum-login.akun-login');
    }
    public function proses_login(Request $request)
    {
        // print_r($request->all());
        // die();

        request()->validate([
            'username' => 'required',
            'password' => 'required',
        ]);


        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->level == 'admin') {
                return redirect('dashboard');
                // ->intended('admin');
            } else if ($user->level == 'wali') {
                return redirect()->intended('wali');
            } else if ($user->level == 'super_user') {
                return redirect()->intended('super_user');
            }
            // return redirect('/');
        }
        return redirect('login')->withSuccess('Oppes! Silahkan Cek Inputanmu');
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return Redirect('login');
    }

    public function register()
    {
        return view('frontend.page-belum-login.akun-daftar');
    }

    public function proses_register(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:4|max:50',
            'username' => 'required|unique:users|min:4|max:50',
            'email' => 'required|email|unique:users',
            'nomor_handphone' => 'required|min:6',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'
        ]);

        $data = $request->all();
        $user = $this->create($data);

        if ($user->save()) {
            return redirect()->route('dashboard-home')->with('success', 'Berhasil menambahkan data user');
        } else {
            return redirect()->back()->with('error', 'Gagal menambahkan data user');
        }
    }

    public function create(array $data)
    {
        return User::create([
            'nama' => $data['nama'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'username' => $data['username'],
            'nomor_handphone' => $data['nomor_handphone'],
        ]);
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function __construct()
    {
    }


    public function index()
    {
        $user = false;
        $user = Auth::user();
        if ($user == '') {
            return view('frontend.page-belum-login.akun-login');
        } else if ($user->level == 'admin') {
            Alert::info('Anda Sudah Login', 'Admin');
            return redirect('dashboard');
            // ->intended('admin');
        } else if ($user->level == 'wali') {
            Alert::info('Anda Sudah Login', 'Wali Peserta');
            return redirect('dashboard-wali');
        }
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
                Alert::success('Berhasil', 'Berhasil Login Admin');
                return redirect('dashboard');
                // ->intended('admin');
            } else if ($user->level == 'wali') {
                Alert::success('Berhasil', 'Berhasil Login Wali Peserta');
                return redirect('dashboard-wali');
            }
            // return redirect('/');
        }
        return redirect('login')->withSuccess('Oppes! Silahkan Cek Inputanmu');
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        Alert::success('Anda Berhasil Logout', '');
        Auth::logout();
        return Redirect('login');
    }

    public function register()
    {
        $user = false;
        $user = Auth::user();
        if ($user == '') {
            return view('frontend.page-belum-login.akun-daftar');
        } else if ($user->level == 'admin') {
            Alert::info('Anda Sudah Login', 'Admin');
            return redirect('dashboard');
        } else if ($user->level == 'wali') {
            Alert::info('Anda Sudah Login', 'Wali Peserta');
            return redirect('dashboard-wali');
        }
    }

    public function proses_register(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:4|max:50',
            'username' => 'required|unique:users|min:4|max:50',
            'email' => 'required|email|unique:users',
            // 'nomor_handphone' => 'required|min:6',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'
        ]);

        $data = $request->all();
        $user = $this->create($data);
        $user->save();

        $insert_wali = DB::table('tbl_wali')->insertGetId(
            [
                'nama_ayah_kandung' => $request->nama,
                'user_id' => $user->id,
                'nomor_handphone_ayah' => $request->nomor_handphone
            ]
        );

        $insert_peserta = DB::table('tbl_peserta')->insert([
            'wali_id' => $insert_wali,
            'user_id' => $user->id,
            'no_pendaftaran' => '1',
            'status' => '2'
        ]);






        if ($insert_peserta) {
            Alert::success('Berhasil', 'Berhasil Membuat AKUN LOGIN PESERTA Silahkan untuk login terlebih dahulu');
            return redirect()->route('dashboard-home-frontend');
        } else {
            Alert::error('Gagal', 'Gagal Membuat AKUN LOGIN PESERTA');
            return redirect()->back();
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

    public function user_akun_view()
    {
        $user = User::paginate(10);
        // $guru = Guru::paginate(10);
        return view('backend.user.index', ['user' => $user]);
    }

    public function edit_akun_view($id)
    {
        // $user = DB::table('users')->where('id', $id)->get();
        // $guru = Guru::paginate(10);
        $user   = User::where(['id' => $id])->first();
        return view('backend.user.edit', ['user' => $user]);
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
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

        $cekAkun = DB::table('users')
            ->where('username', '=', "$request->username")
            ->where('deleted_at', '=', null)
            ->first();
        // echo '<pre>';
        // print_r($cekAkun->username);
        // die();

        if ($cekAkun == null) {
            // echo 'tidak aktif';
            Alert::error('Gagal Login', 'Terjadi Kesalahan');
            return redirect('login');
        } else  if ($cekAkun->username == $request->username) {
            // echo 'aktif';
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
            // echo 'aktif';
        }
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

        // Get the last order id
        $lastorderId = Peserta::orderBy('no_pendaftaran', 'desc')->first()->no_pendaftaran ?? 0;

        // Get last 3 digits of last order id
        $lastIncreament = substr($lastorderId, -3);

        // Make a new order id with appending last increment + 1
        $numberAuto =  date('Ymd') . str_pad($lastIncreament + 1, 3, 0, STR_PAD_LEFT);

        // print_r($newOrderId);


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
            'no_pendaftaran' => $numberAuto,
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

    public function delete_akun_user($id)
    {
        $user = User::find($id);
        // print_r($user);
        // die();

        $user->delete();
        return redirect()->back()->with('success', 'Berhasil Menghapus!');
    }

    public function edit_akun_update(Request $request)
    {
        $request->validate([
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6',
        ]);

        $update =  DB::table('users')->where('id', $request->id)->update([
            'password' => Hash::make($request->password),
            'level' => $request->status
        ]);

        if ($update) {
            Alert::success('Berhasil', 'Berhasil update User');
            return redirect()->route('user-akun-view');
        } else {
            Alert::error('Gagal', 'Gagal update User');
            return redirect()->back();
        }
    }
}
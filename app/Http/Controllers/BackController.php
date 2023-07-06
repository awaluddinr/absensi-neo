<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;

class BackController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function data_karyawan()
    {
        return view('dashboard.data-karyawan');
    }

    public function login_admin()
    {
        return view('login-admin');
    }

    public function post_login(Request $request)
    {
        $cek_request = $request->cekrequest;
        $username = $request->username;
        $cari_user = Login::where('login_username', $username)->first();

        if ($cari_user == null) {
            return back()->with('status', 'Maaf Username atau password Salah')->withInput();
        }
    }
}

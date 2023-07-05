<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function daftar_absensi()
    {
        return view('absensi.daftar-absensi');
    }

    public function daftar_absensi_user()
    {
        return view('absensi.daftar-absensi-user');
    }
}

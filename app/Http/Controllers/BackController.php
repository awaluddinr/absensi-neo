<?php

namespace App\Http\Controllers;

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
}

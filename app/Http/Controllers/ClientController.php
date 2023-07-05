<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        return view('client.index');
    }

    public function absen()
    {
        return view('client.absen');
    }

    public function kegiatan()
    {
        return view('client.kegiatan');
    }
}

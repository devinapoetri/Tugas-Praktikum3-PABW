<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataMhs extends Controller
{
        public function formbiodata()
    {
        return view('formbiodata');
    }

    public function data(Request $request)
    {
        $nama = $request->input('nama');
        $nim = $request->input('nim');
        $jurusan = $request->input('jurusan');

        return view('hasil2', ['nama' => $nama, 'nim' => $nim, 'jurusan' => $jurusan]);
    }
}



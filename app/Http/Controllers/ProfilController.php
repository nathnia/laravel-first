<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    // public function index()
    // {
    //     return view('beranda');
    // }

    public function profil()
    {
        $data = [
            'nama' => 'Almira Nathania',
            'kelas' => 'XI PPLG 1',
            'sekolah' => 'SMK RUS',
        ];
        return view('profil', $data, ['title' => 'Profile']);
    }
}

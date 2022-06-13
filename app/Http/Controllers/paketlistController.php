<?php

namespace App\Http\Controllers;


use App\Models\PaketWisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class paketlistController extends Controller
{
    public function index()
    {
        //
        $PaketWisata = DB::table('paketwisata')->get();
        // mengirim data mahasiswa ke view daftar
        return view('landingpage.index', ['PaketWisata' => $PaketWisata]);
    }
}

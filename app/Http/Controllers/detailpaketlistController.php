<?php

namespace App\Http\Controllers;

use App\Models\DetailWisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class detailpaketlistController extends Controller
{
    public function index()
    {
        //
        $DetailWisata = DB::table('detailwisata')->get();
        // mengirim data mahasiswa ke view daftar
        return view('landingpage.main.detailwisata', ['DetailWisata' => $DetailWisata]);
    }

    public function show($id)
    {
        $DetailWisata = DetailWisata::where('id_paketwisata', $id)->get();
        // mengirim data mahasiswa ke view daftar
        return view('landingpage.main.detailwisata', ['DetailWisata' => $DetailWisata]);
    }
}

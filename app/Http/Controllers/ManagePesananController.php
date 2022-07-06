<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManagePesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Pesanan = Pesanan::orderBy('id', 'desc')->get();
        // dd($DetailWisata);
        if (empty(Auth::user()) || Auth::user()->role == 'pelanggan') {
            return redirect()->route('homePage');
        } else {
            return view('admin.managepesanan.index', [
                'Pesanan' => $Pesanan
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateVerifikasi($id)
    {
        $Pesanan = Pesanan::findOrFail($id);
        $Pesanan->update([
            'status' => 'sudah bayar',
        ]);
        return redirect()->route('managePesanan');
    }
    public function updateBatal($id)
    {
        $Pesanan = Pesanan::findOrFail($id);
        $Pesanan->update([
            'status' => 'dibatalkan',
        ]);
        return redirect()->route('managePesanan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

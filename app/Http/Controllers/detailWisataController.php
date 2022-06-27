<?php

namespace App\Http\Controllers;

use App\Models\DetailWisata;
use App\Models\PaketWisata;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DataTables;
use Dompdf\Adapter\PDFLib;
use PDF;

class detailWisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $DetailWisata = DetailWisata::orderBy('id', 'desc')->get();
        // dd($DetailWisata);
        return view('admin.detailwisata.index', [
            'DetailWisata' => $DetailWisata
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paket = PaketWisata::orderBy('id', 'desc')->get();
        return view('admin.detailwisata.create', [
            'paketWisata' => $paket
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'wisata' => 'required',
            'nama_paket' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',

        ]);

        // TablePaket::create($request->all());
        DetailWisata::create([
            'id_paketwisata' => $request->wisata,
            'nama_paket' => $request->nama_paket,
            'harga' => $request->harga,
            'desc' => $request->deskripsi,
        ]);

        return redirect()->route('detailwisata.index')
            ->with('success', 'Paket created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DetailWisata  $detailWisata
     * @return \Illuminate\Http\Response
     */
    public function show(DetailWisata $detailWisata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DetailWisata  $detailWisata
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $DetailWisata = DetailWisata::find($id);
        $paket = PaketWisata::orderBy('id', 'desc')->get();
        return view('admin.detailwisata.edit', [
            'DetailWisata' => $DetailWisata,
            'paketWisata' => $paket,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DetailWisata  $detailWisata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'wisata' => 'required',
            'nama_paket' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',

        ]);

        $PaketWisata = DetailWisata::findOrFail($id);
        $PaketWisata->update([
            'id_paketwisata' => $request->wisata,
            'nama_paket' => $request->nama_paket,
            'harga' => $request->harga,
            'desc' => $request->deskripsi,

        ]);

        return redirect()->route('detailwisata.index')
            ->with('success', 'Berhasil mengubah ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DetailWisata  $detailWisata
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paket = DetailWisata::find($id);
        $paket->delete();
        return redirect()->route('detailwisata.index')
            ->with('success', 'Paket Telah dihapus.');;
    }
}

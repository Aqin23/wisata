<?php

namespace App\Http\Controllers;

use App\Models\PaketWisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaketWisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $PaketWisata = DB::table('paketwisata')->orderBy('id', 'desc')->get();
        return view('admin.paketwisata.index', ['PaketWisata' => $PaketWisata]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.paketwisata.create');
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
            'nama_wisata' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $filename = $request->foto->getClientOriginalName();

        $foto = $request->foto->storeAs('foto', $filename);


        // TablePaket::create($request->all());
        PaketWisata::create([
            'nama_wisata' => $request->nama_wisata,
            'foto' => $foto,
        ]);

        return redirect()->route('paketwisata.index')
            ->with('success', 'Paket created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $PaketWisata = PaketWisata::find($id);
        return view('admin.paketwisata.edit', compact('PaketWisata'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'nama_wisata' => 'required',
            'foto' => 'required',

        ]);
        $PaketWisata = PaketWisata::findOrFail($id);
        $PaketWisata->update([
            'nama_wisata' => $request->nama_wisata,
            'foto' => $request->foto,

        ]);

        return redirect()->route('paketwisata.index')
            ->with('success', 'Berhasil mengubah ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paket = PaketWisata::find($id);
        $paket->delete();
        return redirect()->route('paketwisata.index')
            ->with('success', 'Paket Telah dihapus.');;
    }
}

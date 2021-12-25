<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Buku::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $buku = new Buku();
        $buku->kode = $request->kode;
        $buku->judul = $request->judul;
        $buku->penulis = $request->penulis;
        $buku->penerbit = $request->penerbit;
        $buku->tahun = $request->tahun;
        $buku->save();

        return "Data buku berhasil ditambahkan";
    }

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $kode = $request->kode;
        $judul = $request->judul;
        $penulis = $request->penulis;
        $penerbit = $request->penerbit;
        $tahun = $request->tahun;

        $buku = Buku::find($id);
        $buku->kode = $kode;
        $buku->judul = $judul;
        $buku->penulis = $penulis;
        $buku->penerbit = $penerbit;
        $buku->tahun = $tahun;
        $buku->save();

        return "Data buku berhasil diubah";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //
        $buku = Buku::find($id);
        $buku->delete();

        return "Data buku berhasil dihapus";
    }
}

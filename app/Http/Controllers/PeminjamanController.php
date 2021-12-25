<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Peminjaman::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $peminjaman = new Peminjaman();
        $peminjaman->judul = $request->judul;
        $peminjaman->tanggalpinjam = $request->tanggalpinjam;
        $peminjaman->tanggalkembali = $request->tanggalkembali;
        $peminjaman->status = $request->status;
        $peminjaman->save();

        return "Data peminjaman berhasil ditambahkan";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function update(Request $request, $id)
    {
        $judul = $request->judul;
        $tanggalpinjam = $request->tanggalpinjam;
        $tanggalkembali = $request->tanggalkembali;
        $status = $request->status;

        $peminjaman = Peminjaman::find($id);
        $peminjaman->judul = $judul;
        $peminjaman->tanggalpinjam = $tanggalpinjam;
        $peminjaman->tanggalkembali = $tanggalkembali;
        $peminjaman->status = $status;
        $peminjaman->save();

        return "Data peminjaman berhasil diubah";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $peminjaman = Peminjaman::find($id);
        $peminjaman->delete();

        return "Data peminjaman berhasil dihapus";
    }
}

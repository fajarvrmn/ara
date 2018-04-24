<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detailsewa;
use App\Kamera;
class DetailsewaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sewa=Detailsewa::all();
        return view('sewa.index', compact('sewa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $kamera=Kamera::all();
        return view('sewa.create',compact('kamera'));
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
        $total = $request->all();
        $kamera = Kamera::where('id', $total['kamera_id'])->first();
        $harga = $kamera->harga_sewa;
        

        $sewa = new Detailsewa;
        $sewa->total_harga=($harga*$request->jumlah);
        $sewa->tanggal_sewa = $request->tanggal;
        $sewa->nama_customer = $request->nama;
        $sewa->jenis_kelamin = $request->jk;
        $sewa->alamat = $request->alamat;
        $sewa->no_tlp = $request->notlp;
        $sewa->no_ktp = $request->noktp;
        $sewa->jumlah_hari = $request->jumlah;
        $sewa->kamera_id = $request->kamera_id;
// dd($sewa);
        $sewa->save();
        return redirect('sewa');
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
        $sewa=Detailsewa::findOrFail($id);
        return view('sewa.show',compact('sewa'));
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
        $sewa=Detailsewa::findOrFail($id);
        $kamera=Kamera::all();
        return view('sewa.edit',compact('sewa','kamera'));

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
        //
        $sewa=Detailsewa::findOrFail($id);
        $sewa->tanggal_sewa = $request->tanggal;
        $sewa->nama_customer = $request->nama;
        $sewa->jenis_kelamin = $request->jk;
        $sewa->alamat = $request->alamat;
        $sewa->no_tlp = $request->notlp;
        $sewa->no_ktp = $request->noktp;
        $sewa->jumlah_hari = $request->jumlah;
        $sewa->kamera_id = $request->bmerk;
        $sewa->save();
        return redirect('sewa');

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
        $sewa=Detailsewa::findOrFail($id);
        $sewa->delete();
        return redirect('sewa');
    }
}

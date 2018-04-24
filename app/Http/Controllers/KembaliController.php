<?php

namespace App\Http\Controllers;
use App\Detailsewa;
use App\Kamera;
use App\Kembali;
use Illuminate\Http\Request;

class KembaliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kembali=Kembali::all();
        return view('pengembalian.index', compact('kembali'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $kembali=Detailsewa::all();
        return view('pengembalian.create',compact('kembali'));
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
        $bebas = $request->all();

        $sewa = Detailsewa::where('id', $bebas['sewa_id'])->first();

        $kamera = Kamera::where('id', $sewa->kamera_id)->first();

        $kembali = new Kembali;
        $kembali->tanggal_kembali= $request->tanggal_kembali;
        $kembali->jumlah_hari= $request->jumlah_hari;
        $kembali->sewa_id= $request->sewa_id;
        $kembali->telat= ($request->jumlah_hari - $sewa->jumlah_hari);
        $kembali->denda= (($request->jumlah_hari - $sewa->jumlah_hari) * $kamera->harga_sewa);
        $kembali->total_harga= $sewa->total_harga + (($request->jumlah_hari - $sewa->jumlah_hari) * $kamera->harga_sewa);
        $kembali->save();
        return redirect('kembali');
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
    public function update(Request $request, $id)
    {
        //
        
        $bebas = $request->all();

        $sewa = Detailsewa::where('id', $bebas['sewa_id'])->first();

        $kamera = Kamera::where('id', $sewa->kamera_id)->first();

        $kembali = new Kembali;
        $kembali->tanggal_kembali= $request->tanggal_kembali;
        $kembali->jumlah_hari= $request->jumlah_hari;
        $kembali->sewa_id= $request->sewa_id;
        $kembali->telat= ($request->jumlah_hari - $sewa->jumlah_hari);
        $kembali->denda= (($request->jumlah_hari - $sewa->jumlah_hari) * $kamera->harga_sewa);
        $kembali->total_harga= $sewa->total_harga + (($request->jumlah_hari - $sewa->jumlah_hari) * $kamera->harga_sewa);
        $kembali->save();
        return redirect('kembali'); 
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

        $kembali=Kembali::findOrFail($id);
        $kembali->delete();
        return redirect('kembali');
    }
}

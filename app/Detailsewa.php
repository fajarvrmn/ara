<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detailsewa extends Model
{
    //
    protected $table='detailsewas';
    protected $fillable=['tanggal_sewa','nama_customer','jenis_kelamin','alamat','no_tlp','no_ktp','jumlah_hari','kamera_id'];
    protected $visible=['tanggal_sewa','nama_customer','jenis_kelamin','alamat','no_tlp','no_ktp','jumlah_hari','kamera_id'];
    public $timestamp=true;

    public function kamera()
    {
    	return $this->belongsTo('App\kamera','kamera_id');
    }
}
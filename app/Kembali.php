<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kembali extends Model
{
    //
    protected $table='kembalis';
    protected $fillable=['sewa_id','tanggal_kembali','jumlah_hari','telat','total_harga','denda'];
    protected $visible=['sewa_id','tanggal_kembali','jumlah_hari','telat','total_harga','denda'];
    public $timestamp=true;

    public function sewwa()
    {
    	return $this->belongsTo('App\Detailsewa','sewa_id');
    }
}

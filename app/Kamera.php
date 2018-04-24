<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kamera extends Model
{
    //
    protected $table='kameras';
    protected $fillable=['gambar','merk_kamera','harga_sewa'];
    protected $visible=['gambar','merk_kamera','harga_sewa'];
    public $timestamp=true;

    public function detailsewas()
    {
    	return $this->hasMany('App\Detailsewa','kamera_id');
    }
}

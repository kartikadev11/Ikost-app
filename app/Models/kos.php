<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kos extends Model
{
    protected $table = "data_kos";
    protected $primaryKey ="id_kos";
    protected $fillable=[
        'id_kos','nama_kos','alamat','harga_sewa','luas_kamar','jenis_kos_id_jenis','fasilitas_id_fasilitas','lokasi_id_lokasi','keamanan_id_keamanan','keterangan','image',
    ];

    public function jenis_kos(){
        return $this->belongsTo(jenis_kos::class);
    }
    public function fasilitas(){
        return $this->belongsTo(fasilitas::class);
    }
    public function lokasi(){
        return $this->belongsTo(lokasi::class);
    }
    public function keamanan(){
        return $this->belongsTo(keamanan::class);
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lokasi extends Model
{
    protected $table = "lokasi";
    protected $primaryKey ="id_lokasi";
    protected $fillable=[
        'id_lokasi','lokasi'
    ];
    public function kos(){
        return $this->hasMany(kos::class);

    }

}
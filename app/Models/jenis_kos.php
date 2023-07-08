<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenis_kos extends Model
{
    protected $table = "jenis_kos";
    protected $primaryKey ="id_jenis";
    protected $fillable=[
        'id_jenis','jenis_kos'
    ];
    public function kos(){
        return $this->hasMany(kos::class);

    }
}
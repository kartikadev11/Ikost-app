<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fasilitas extends Model
{
    protected $table = "fasilitas";
    protected $primaryKey ="id_fasilitas";
    protected $fillable=[
        'id_fasilitas','fasilitas'
    ];
    public function kos(){
        return $this->hasMany(kos::class);

    }

}
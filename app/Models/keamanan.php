<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keamanan extends Model
{
    protected $table = "keamanan";
    protected $primaryKey ="id_keamanan";
    protected $fillable=[
        'id_keamanan','keamanan'
    ];
    public function kos(){
        return $this->hasMany(kos::class);

    }

}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kriteria extends Model
{
    protected $table = "kriteria";
    protected $primaryKey ="id";
    protected $fillable=[
        'id','nama_kriteria','bobot','label'
    ];
}
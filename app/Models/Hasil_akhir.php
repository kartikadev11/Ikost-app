<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hasil_akhir extends Model
{
    use HasFactory;
    protected $guarded = 'id_kos';
    protected $table = 'hasil_akhir';
}
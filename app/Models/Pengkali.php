<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengkali extends Model
{
    use HasFactory;
    protected $guarded = 'id_kos';
    protected $table = 'pengkali';
}
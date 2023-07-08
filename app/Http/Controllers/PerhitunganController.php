<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Hasil;
use App\Models\Hasil_akhir;
use App\Models\Normalisasi;
use App\Models\Pengkali;
use Illuminate\Http\Request;

class PerhitunganController extends Controller
{
    public function alternatif(){
        return view('alternatif.alternatif',[
            "title" => "Nilai Alternatif",
            'alternatif' => Alternatif::get()
        ]);
        
    }
    public function normalisasi(){
        return view('normalisasi.normalisasi',[
            "title" => "Normalisasi",
            'normalisasi' => Normalisasi::get()
        ]);
        
    }

    public function pengkali(){
        return view('pengkali.pengkali',[
            "title" => "Hasil Kali",
            'pengkali' => Pengkali::get()
        ]);
        
    }
    public function hasil(){
        return view('hasil.hasil',[
            "title" => "Perangkingan",
            'hasil' => Hasil_akhir::get()
        ]);
        
    }
}
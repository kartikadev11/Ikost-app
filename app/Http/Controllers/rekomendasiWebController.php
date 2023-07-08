<?php

namespace App\Http\Controllers;

use App\Models\Hasil_akhir;
use App\Models\kriteria;
use App\Models\Pengkali;
use Illuminate\Http\Request;

class rekomendasiWebController extends Controller
{
    function index(){
        $dtKriteria = kriteria::paginate(5);
        return view('rekomendasiUser',compact('dtKriteria'),[
            "title" => "Daftar Kriteria"
        ]);
    } 

    function edit($id)
    {
        $krt = kriteria::findorfail($id);
        return view('editRekomendasiKrit',compact('krt'),[
            "title" => "Edit Kriteria"
        ]);
    }
    function update(Request $request, $id)
    {
        $krt = kriteria::findorfail($id);
        $krt->update($request->all());
        return Redirect('/ikost/rekomendasi')->with('toast_success','Data Berhasil DiUpdate');
    }

    public function pengkali(){
        return view('perhitunganUser',[
            "title" => "Hasil Kali",
            'pengkali' => Pengkali::get()
        ]);
        
    }

    public function hasil(){
        return view('rangkingKosUser',[
            "title" => "Perangkingan",
            'hasil' => Hasil_akhir::get()
        ]);
        
    }
}
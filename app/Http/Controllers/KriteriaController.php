<?php

namespace App\Http\Controllers;

use App\Models\kriteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class KriteriaController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function index(){
        $dtKriteria = kriteria::paginate(5);
        return view('kriteria.daftarKriteria',compact('dtKriteria'),[
            "title" => "Daftar Kriteria"
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    function create()
    {
        return view('kriteria.inputKriteria',[
            "title" => "Input Kriteria"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    function store(Request $request)
    {
       // dd($request->all()); 
       kriteria::create([
        'nama_kriteria'=>$request->nama_kriteria,
        'bobot'=>$request->bobot,
        'jenis_kriteria'=>$request->jenis_kriteria
       ]);
       return redirect('/daftarKriteria')->with('toast_success','Data Berhasil Tersimpan');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    function edit($id)
    {
        $krt = kriteria::findorfail($id);
        return view('kriteria.editKriteria',compact('krt'),[
            "title" => "Edit Kriteria"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    function update(Request $request, $id)
    {
        $krt = kriteria::findorfail($id);
        $krt->update($request->all());
        return Redirect('daftarKriteria')->with('toast_success','Data Berhasil DiUpdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    function destroy($id)
    {
        $krt = kriteria::findorfail($id);
        $krt->delete();
        return back()->with('info','Data Berhasil Dihapus');
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\kos;
use App\Models\lokasi;
use App\Models\keamanan;
use App\Models\fasilitas;
use App\Models\jenis_kos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class KosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function index(){
        $dtKos = kos::with('jenis_kos','fasilitas','lokasi','keamanan')->paginate(10);
        return view('dataKos.kos',compact('dtKos'),[
            "title" => "Daftar Kos"
        ]);}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jns = jenis_kos::all();
        $fst = fasilitas::all();
        $lks = lokasi::all();
        $kmn = keamanan::all();
        return view('dataKos.inputKos',compact('jns','fst','lks','kmn'),[
            "title" => "Input kos"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $data = kos::create([
            'nama_kos'=>$request->nama_kos,
            'alamat'=>$request->alamat,
            'harga_sewa'=>$request->harga_sewa,
            'luas_kamar'=>$request->luas_kamar,
            'jenis_kos_id_jenis'=>$request->jenis_kos_id_jenis,
            'fasilitas_id_fasilitas'=>$request->fasilitas_id_fasilitas,
            'lokasi_id_lokasi'=>$request->lokasi_id_lokasi,
            'keamanan_id_keamanan'=>$request->keamanan_id_keamanan,
            'keterangan'=>$request->keterangan,
            'image'=>$request->image
           ]);

           if($request->hasFile('image')){
            $request->file('image')->move('images/', $request->file('image')->getClientOriginalName());
            $data->image =$request->file('image')->getClientOriginalName();
            $data->save();
           }
           return redirect('/daftarKos')->with('toast_success','Data Berhasil Ditambahkan');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id_kos
     * @return \Illuminate\Http\Response
     */
    public function show($id_kos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_kos
     * @return \Illuminate\Http\Response
     */
    public function edit($id_kos)
    {
        $jns = jenis_kos::all();
        $fst = fasilitas::all();
        $lks = lokasi::all();
        $kmn = keamanan::all();
        $kos = kos::with('jenis_kos','fasilitas','lokasi','keamanan')->findorfail($id_kos);
        return view('dataKos.editKos',compact('kos','jns','fst','lks','kmn'),[
            "title" => "Edit Kos"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_kos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_kos)
    {
        $kos = kos::findorfail($id_kos);
        $kos->update($request->all());

        if($request->hasFile('image')){

           $destination = 'images/'.$kos->image;
           if(File::exists($destination)){
            File::delete($destination);
            }
            $request->file('image')->move('images/', $request->file('image')->getClientOriginalName());
            $kos->image =$request->file('image')->getClientOriginalName();
        }
        $kos->save();

        return Redirect('daftarKos')->with('toast_success','Data Berhasil DiUpdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_kos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_kos)
    {
        $kos = kos::findorfail($id_kos);
        $kos->delete();
        return back()->with('info','Data Berhasil Dihapus');
    }
}
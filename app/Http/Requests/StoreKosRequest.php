<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreKosRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nama_kos'=>'required',
            'alamat'=>'required',
            'harga_sewa'=>'required',
            'luas_kamar'=>'required',
            'jenis_kos_id_jenis'=>'required',
            'fasilitas_id_fasilitas'=>'required',
            'lokasi_id_lokasi'=>'required',
            'keamanan_id_keamanan'=>'required',
            'keterangan'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
}
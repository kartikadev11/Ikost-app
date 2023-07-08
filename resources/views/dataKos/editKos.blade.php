@extends('layouts.app')
@section('title', $title)
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Daftar Kos</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Daftar Kos</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">


            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- Default box -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Input Data Kos</h3>
                            </div>
                            <div class="card-body">
                                <form action="{{ url('updateKos', $kos->id_kos) }}"
                                    method="post"enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nama">Nama Kos</label>
                                        <input type="text" name="nama_kos" id="nama_kos" value="{{ $kos->nama_kos }}"
                                            class="form-control @error('nama_kos') is-invalid @enderror"
                                            placeholder="nama kos" value="{{ old('nama_kos') }}">
                                        @error('nama_kos')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Alamat</label>
                                        <input type="text" name="alamat" id="alamat" value="{{ $kos->alamat }}"
                                            class="form-control @error('alamat') is-invalid @enderror" placeholder="alamat"
                                            value="{{ old('alamat') }}">
                                        @error('alamat')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Harga Sewa</label>
                                        <input type="number" name="harga_sewa" id="harga_sewa" step=0.01
                                            value="{{ $kos->harga_sewa }}"
                                            class="form-control @error('harga_sewa') is-invalid @enderror"
                                            placeholder="harga sewa" value="{{ old('harga_sewa') }}">
                                        @error('harga_sewa')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Luas Kamar</label>
                                        <input type="number" name="luas_kamar" id="luas_kamar" step=0.01
                                            value="{{ $kos->luas_kamar }}"
                                            class="form-control @error('luas_kamar') is-invalid @enderror"
                                            placeholder="harga sewa" value="{{ old('luas_kamar') }}">
                                        @error('luas_kamar')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    {{-- jenis kos --}}
                                    <div class="form-group">
                                        <label for="nama">Jenis Kos</label>
                                        <select class="form-control-select" style="width: 100%;" name="jenis_kos_id_jenis"
                                            id="jenis_kos_id_jenis">
                                            <option disabled value>Pilih Jenis Kos</option>
                                            <option value="{{ $kos->jenis_kos_id_jenis }}">
                                                {{ $kos->jenis_kos->jenis_kos }}</option>


                                            @foreach ($jns as $item)
                                                <option value="{{ $item->id_jenis }}">{{ $item->jenis_kos }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                    {{-- fasilitas --}}
                                    <div class="form-group">
                                        <label for="nama">Fasilitas</label>
                                        <select class="form-control-select" style="width: 100%;"
                                            name="fasilitas_id_fasilitas" id="fasilitas_id_fasilitas">
                                            <option disabled value>Pilih Fasilitas</option>
                                            <option value="{{ $kos->fasilitas_id_fasilitas }}">
                                                {{ $kos->fasilitas->fasilitas }}</option>
                                            @foreach ($fst as $item)
                                                <option value="{{ $item->id_fasilitas }}">{{ $item->fasilitas }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                    {{-- lokasi --}}
                                    <div class="form-group">
                                        <label for="nama">Lokasi</label>
                                        <select class="form-control-select" style="width: 100%;" name="lokasi_id_lokasi"
                                            id="lokasi_id_lokasi">
                                            <option disabled value>Pilih Lokasi</option>
                                            <option value="{{ $kos->lokasi_id_lokasi }}">{{ $kos->lokasi->lokasi }}
                                            </option>
                                            @foreach ($lks as $item)
                                                <option value="{{ $item->id_lokasi }}">{{ $item->lokasi }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                    {{-- keamanan --}}
                                    <div class="form-group">
                                        <label for="nama">Keamanan</label>
                                        <select class="form-control-select" style="width: 100%;" name="keamanan_id_keamanan"
                                            id="keamanan_id_keamanan">
                                            <option disabled value>Pilih keamanan</option>
                                            <option value="{{ $kos->keamanan_id_keamanan }}">
                                                {{ $kos->keamanan->keamanan }}</option>
                                            @foreach ($kmn as $item)
                                                <option value="{{ $item->id_keamanan }}">{{ $item->keamanan }}</option>
                                            @endforeach
                                        </select>

                                    </div>

                                    {{-- Image --}}
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label>Kos Image:</label>
                                            <input type="file" name="image" class="form-control" placeholder="image">
                                            <img src="/images/{{ $kos->image }}" width="300px">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-outline">
                                            <label class="form-label" for="textAreaExample">Keterangan</label>
                                            <textarea class="form-control" name="keterangan" id="keterangan" value="{{ $kos->keterangan }}" rows="4">{{ $kos->keterangan }}</textarea>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Ubah Data</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                    </div>
                    <!-- /.card-body -->
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->
            </div>
    </div>
    </div>
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

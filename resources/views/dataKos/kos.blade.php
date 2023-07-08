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
                                <h3 class="card-title">Daftar Kos</h3>
                                <div class="card-tools">
                                    <a href="/createKos" class="btn btn-primary btn-lg btn-block " role="button"
                                        aria-pressed="true">Tambah Data</a>

                                </div>
                            </div>
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Kos</th>
                                            <th>Alamat</th>
                                            <th>Harga Sewa</th>
                                            <th>Luas Kamar</th>
                                            <th>Jenis Kos</th>
                                            <th>Fasilitas</th>
                                            <th>Lokasi</th>
                                            <th>Keamanan</th>
                                            <th>Keterangan</th>
                                            <th>Kos Image</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dtKos as $item)
                                            <tr>

                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->nama_kos }}</td>
                                                <td>{{ $item->alamat }}</td>
                                                <td>{{ $item->harga_sewa }}</td>
                                                <td>{{ $item->luas_kamar }}</td>
                                                <td>{{ $item->jenis_kos->jenis_kos }}</td>
                                                <td>{{ $item->fasilitas->fasilitas }}</td>
                                                <td>{{ $item->lokasi->lokasi }}</td>
                                                <td>{{ $item->keamanan->keamanan }}</td>
                                                <td>{{ $item->keterangan }}</td>
                                                <td><img src="{{ asset('images/' . $item->image) }}" class="img-thumbnail"
                                                        style="width:200px" /></td>
                                                <td>
                                                    <a href="{{ url('editKos', $item->id_kos) }}"><i
                                                            class="fa-solid fa-pen-to-square"></i></a> | <a
                                                        href="{{ url('deleteKos', $item->id_kos) }}"><i
                                                            class="fa-solid fa-trash" style="color: red"></i></a>
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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

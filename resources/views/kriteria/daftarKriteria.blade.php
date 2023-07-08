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
                        <h1>Daftar Kriteria</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Daftar Kriteria</li>
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
                                <h3 class="card-title">Daftar Kriteria</h3>
                                <div class="card-tools">
                                    <a href="/createKriteria" class="btn btn-primary btn-lg btn-block " role="button"
                                        aria-pressed="true">Tambah Data</a>

                                </div>
                            </div>
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Kriteria</th>
                                            <th>Bobot</th>
                                            <th>Jenis Kriteria</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dtKriteria as $item)
                                            <tr>

                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->nama_kriteria }}</td>
                                                <td>{{ $item->bobot }}</td>
                                                <td>{{ $item->label }}</td>
                                                <td>
                                                    <a href="{{ url('editKriteria', $item->id) }}"><i
                                                            class="fa-solid fa-pen-to-square"></i></a> | <a
                                                        href="{{ url('deleteKriteria', $item->id) }}"><i
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

                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @include('sweetalert::alert')
@endsection

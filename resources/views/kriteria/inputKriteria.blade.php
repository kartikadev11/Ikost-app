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
                            <h3 class="card-title">Input Kriteria</h3>
                        </div>
                        <div class="card-body">
                            <form action="/simpanKriteria" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="nama">Nama Kriteria</label>
                                    <input type="text" name="nama_kriteria" id="nama_kriteria"
                                        class="form-control @error('nama_kriteria') is-invalid @enderror" placeholder="nama kriteria"
                                        value="{{ old('nama_kriteria') }}">
                                    @error('nama_kriteria')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="nama">Bobot</label>
                                    <input type="number" name="bobot" id="bobot" step=0.01
                                        class="form-control @error('email') is-invalid @enderror" placeholder="bobot"
                                        value="{{ old('email') }}">
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label name="label" for="sel1">Jenis Kriteria</label>
                                    <select name='label' class="form-control" id="sel1">
                                        <option value="benefit">benefit</option>
                                        <option value="cost">cost</option>
                                      </select>
                                </div>
                                
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Simpan Data</button>
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
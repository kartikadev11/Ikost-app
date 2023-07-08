@extends('layouts.webapp')
@section('content')
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1><a href="/">IKost</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="/">Home</a></li>
                    <li><a class="nav-link scrollto" href="/">About</a></li>
                    <li><a class="nav-link scrollto" href="/ikost/daftarkos">Kos</a></li>
                    <li><a class="nav-link scrollto active" href="/ikost/rekomendasi">Recomendation System</a></li>
                </ul>

            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
    <section id="kos" class="kos section-bg">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Rekomendasi </h2>
                <p>Sistem Rekomendasi Pemilihan Tempat Kos Metode SAW</p>
            </div>
            <div class="py-5">
                <div class="container">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <!-- Default box -->
                                <div class="card-body">
                                    <form action="{{ url('/ikost/updateKriteria', $krt->id) }}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="nama">Nama Kriteria</label>
                                            <input type="text" name="nama_kriteria" id="nama_kriteria"
                                                value="{{ $krt->nama_kriteria }}"
                                                class="form-control @error('nama_kriteria') is-invalid @enderror"
                                                placeholder="nama kriteria" @disabled(true)
                                                value="{{ old('nama_kriteria') }} ">
                                        </div>
                                        <div class="form-group mt-2">
                                            <label for="nama">Bobot</label>
                                            <input type="number" name="bobot" id="bobot" step=0.01
                                                value="{{ $krt->bobot }}"
                                                class="form-control @error('email') is-invalid @enderror"
                                                placeholder="bobot" value="{{ old('email') }}">
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group mt-2">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.card-body -->

                            </div>
                            <!-- /.card-body -->
                            <!-- /.card-footer-->
                        </div>
                        <!-- /.card -->
                    </div>

                </div>
            </div>
    </section>
    {{-- about end --}}
@endsection

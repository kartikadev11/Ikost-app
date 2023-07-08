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
                <strong>*Jumlah bobot harus sama dengan 1</strong>
            </div>
            <div class="py-5">
                <div class="container">
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
                                        <a class="btn btn-primary"
                                            href="{{ url('/ikost/editKriteria', $item->id) }}">Edit</a>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                    <div class="row">
                        <a href="/ikost/perhitungan" class="btn btn-primary btn-lg active" role="button"
                            aria-pressed="true">Lakukan
                            Perhitungan</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- about end --}}
@endsection

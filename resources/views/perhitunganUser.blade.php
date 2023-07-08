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
                <h2>Perhitungan </h2>
                <br>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <!-- Default box -->
                            <div class="card">
                                <div class="card-body">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Alternatif</th>
                                                <th>Harga Sewa</th>
                                                <th>Luas Kamar</th>
                                                <th>Fasilitas</th>
                                                <th>Lokasi</th>
                                                <th>Keamanan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pengkali as $item)
                                                <tr>

                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->nama_kos }}</td>
                                                    <td>{{ $item->harga_sewa }}</td>
                                                    <td>{{ $item->luas_kamar }}</td>
                                                    <td>{{ $item->fasilitas }}</td>
                                                    <td>{{ $item->lokasi }}</td>
                                                    <td>{{ $item->keamanan }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>

                                    </table>
                                    <div class="row">
                                        <a href="/ikost/rangking" class="btn btn-primary btn-lg active" role="button"
                                            aria-pressed="true">Lihat Hasil</a>
                                    </div>

                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->

                            <!-- /.card -->
                        </div>
                    </div>
                </div>


            </div>
    </section>
    {{-- about end --}}
@endsection

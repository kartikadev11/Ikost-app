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
                    <li><a class="nav-link scrollto " href="/">Home</a></li>
                    <li><a class="nav-link scrollto" href="/">About</a></li>
                    <li><a class="nav-link scrollto active " href="/ikost/daftarkos">Kos</a></li>
                    <li><a class="nav-link scrollto " href="/ikost/rekomendasi">Recomendation System</a></li>
                </ul>

            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
    <section id="kos" class="kos section-bg">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Kost</h2>
                <p>Informasi pilihan Kos yang tersedia</p>
            </div>
            <div class="py-5">
                <div class="container">
                    <div class="row">
                        @foreach ($dtKos as $item)
                            <div class="col-md-3 mt-3">
                                <div class="card">
                                    <img src="{{ asset('images/' . $item->image) }}" alt="kos image" width="300px"
                                        height="300px">
                                    <div class="card-body">
                                        <h5>{{ $item->nama_kos }}</h5>
                                        <p>biaya sewa: {{ $item->harga_sewa }} /bulan</p>
                                        <p>luas kamar: {{ $item->luas_kamar }} m<sup>2</sup></p>
                                        <small>{{ $item->keterangan }}</small>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- about end --}}
@endsection

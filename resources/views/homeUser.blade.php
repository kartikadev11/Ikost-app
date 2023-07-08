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
                    <li><a class="nav-link scrollto active" href="/">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto " href="/ikost/daftarkos">Kos</a></li>
                    <li><a class="nav-link scrollto " href="/ikost/rekomendasi">Recomendation System</a></li>
                </ul>

            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Bingung mau cari KOS dimana? Cari disini aja</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">Cari kos lebih mudah, tanpa harus keliling kota</h2>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
                    <img src="{{ 'assets/img/hero-img.jpg' }}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->
    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="testimonials section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>About Us</h2>
                </div>

                <div class="row content">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
                        <p style="text-align: justify">
                            IKost merupakan salah satu website yang menyediakan informasi KOS dan tempat untuk membantu
                            merekomendasikan tempat kos berdasarkan kriteria harga, fasilitas, lokasi, luas kamar, dan
                            keamanan yang disediakan.
                        </p>
                        <ul>
                            <li><i class="ri-check-double-line"></i> Pilih menu Recomendation System untuk menemukan
                                rekomendasi KOS</li>
                            <li><i class="ri-check-double-line"></i> Masukkan bobot kriteria KOS anda sesuai kebutuhan
                            </li>
                            <li><i class="ri-check-double-line"></i> Rekomendasi akan menampilkan urutan rangking KOS
                                teratas</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
                        <p style="text-align: justify">
                            Seiring dengan banyaknya pekerja dan mahasiswa rantauan yang datang dari daerah lain untuk
                            bekerja maupun menuntut ilmu, tempat kos merupakan hal yang paling dicari untuk tempat
                            tinggal, karena lebih efisien dari segi biaya waktu dan tenaga. Banyaknya tempat kos yang
                            menawarkan harga, fasilitas, dan lokasi yang berbeda pastinya membuat para pekerja dan
                            mahasiswa kebingungan dalam hal menentukan tempat tinggal sementara mereka.Oleh karena itu
                            dibutuhkan sistem yang dapat membantu mereka menemukan informasi mengenai tempat kos dan
                            bisa merekomendasikan tempat kos yang sesuai dengan kriteria harga, fasilitas dan lokasi
                            demi kenyamanan mereka.
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Kost</h2>
                    <p>Informasi pilihan Kos yang tersedia</p>
                </div>

                <div class="py-5">
                    <div class="container">
                        <div class="row">
                            @foreach ($tabelkos as $item)
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
                        <div class="mt-3 d-flex justify-content-center">
                            <a href="/ikost/daftarkos" class="btn btn-primary btn-lg btn-block " role="button"
                                aria-pressed="true">Selengkapnya</a>
                        </div>
                    </div>
                </div>



            </div>
        </section><!-- End Features Section -->





    </main><!-- End #main -->
@endsection

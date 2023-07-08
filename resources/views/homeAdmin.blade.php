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
            <h1>Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href=" ">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
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
                <h3 class="card-title">Selamat Datang di Website Pemilihan Tempat Kost</h3>
              </div>
              <div class="card-body">
                <h5> SPK Pemilihan Tempat Kos adalah sistem keputusan untuk memilih tempat kost terbaik yang sesuai dengan kebutuhan calon penyewa kost.</h5>
                  <h5> Di website ini sendiri memiliki beberapa fitur yaitu : </h5>
                  <p> 1. Daftar Kos 
                   <br>2. Kriteria
                   <br>3. Alternatif
                   <br>4. Perhitungan
                   <br>
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
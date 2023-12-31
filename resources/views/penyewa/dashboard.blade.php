@extends('layouts.penyewa')

@section('title_dashboard', 'Dashboard')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Pemesanan</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/penyewa">Dashboard</a></li>
                <li class="breadcrumb-item active">-</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
  
      <!-- Main content -->
      <section class="content">
  
        <div class="row">
          <div class="col">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Dashboard</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                Selamat datang, {{auth()->user()->nama_user}}

                <p>
                  Selamat datang di Sistem informasi TobaStay. Hal-hal yang anda dapatkan setelah masuk pada halaman penyewa website kami adalah sebagai berikut :
Dapat menegelola data diri pada “Ubah data diri”
 <br>1. Anda dapat melakukan perubahan pada data diri anda seperti penggantian data diri, foto profil.
 <br>2. Anda dapat melaukukan penyewaan akomodasi
                </p>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
          <div class="col">

          </div>
      </div>
  
      </section>
      <!-- /.content -->
@endsection
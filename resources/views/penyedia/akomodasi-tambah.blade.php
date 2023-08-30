@extends('layouts.penyedia')

@section('title_dashboard', 'Menambah akomodasi')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Menambah akomodasi</h1>
            </div>
            <div class="col-sm-6">  
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/penyedia/akomodasi">Akomodasi</a></li>
                <li class="breadcrumb-item active">Menambah</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
  
      <!-- Main content -->
      <section class="content">
        @if (count($errors) > 0)
        <div class="alert alert-danger">
          <strong>Maaf </strong> Terdapat masalah di form<br><br>
          <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif

        @if (\Session::has('success'))
        <div class="alert alert-success alert-dismissible col-lg-4">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h5><i class="icon fas fa-check"></i> Berhasil</h5>
          {!! \Session::get('success') !!}
        </div>
        @endif
        <div class="card collapsed-card">
          <div class="card-header">
            <h3 class="card-title">Form menambah Kos</h3>
  
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-plus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="card card-primary">
              
              <!-- /.card-header -->
              <!-- form start -->
              
              <form id="form-kos" action="/penyedia/akomodasi-tambah/kos" class="" autocomplete="off" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="card-body ">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Kos</label>
                    <input type="text" name="nama_akomodasi" class="form-control" id="exampleInputEmail1" placeholder="Nama Kos">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kecamatan</label>
                    <select name="kecamatan" id="" class="custom-select">
                      <option selected disabled value="">Kecamatan</option>
                      <option value="balige">Balige</option>
                      <option value="porsea">porsea</option>
                      <option value="laguboti">laguboti</option>
                      <option value="silaen">silaen</option>
                      <option value="siantarnarumonda">siantar narumonda</option>
                      <option value="sigumpar">sigumpar</option>
                      <option value="lumban julu">lumban julu</option>
                      <option value="ajibata">ajibata</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <textarea id="" cols="30" rows="5" class="form-control" name="alamat" placeholder="Alamat"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Deskripsi</label>
                    <textarea id="" cols="30" rows="5" class="form-control" name="deskripsi_akomodasi" placeholder="Deskripsi"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Harga / hari</label>
                    <input type="number" name="harga_hari" class="form-control" id="exampleInputEmail1" placeholder="Harga / hari">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Harga / bulan</label>
                    <input type="number" name="harga_bulan" class="form-control" id="exampleInputEmail1" placeholder="Harga / bulan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Stok</label>
                    <input type="number" name="stok" class="form-control" id="exampleInputEmail1" placeholder="Stok">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Ukuran</label>
                    <input type="text" name="ukuran" class="form-control" id="exampleInputEmail1" placeholder="Format penulisan : 3x3">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Gambar</label>
                    <input type="file" name="img" class="form-control" id="exampleInputEmail1">
                  </div>
                  
                  <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="terms" class="custom-control-input" id="kos">
                      <label class="custom-control-label" for="kos">Setuju <a href="/pusatbantuan">dengan ketentuan</a>.</label>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
          <!-- /.card-footer-->
        </div>

        {{-- KONTRAKAN --}}
        <div class="card collapsed-card">
          <div class="card-header">
            <h3 class="card-title">Form menambah kontrakan</h3>
  
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-plus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="card card-primary">
              
              <!-- /.card-header -->
              <!-- form start -->
              
              <form id="form-kontrakan"action="/penyedia/akomodasi-tambah/kontrakan" method="POST" class="" autocomplete="off" enctype="multipart/form-data">
                @csrf
                <div class="card-body ">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama kontrakan</label>
                    <input type="text" name="nama_akomodasi" class="form-control" id="exampleInputEmail1" placeholder="Nama Kontrakan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kecamatan</label>
                    <select name="kecamatan" id="" class="custom-select">
                      <option selected disabled value="">Kecamatan</option>
                      <option value="balige">Balige</option>
                      <option value="porsea">porsea</option>
                      <option value="laguboti">laguboti</option>
                      <option value="silaen">silaen</option>
                      <option value="siantarnarumonda">siantar narumonda</option>
                      <option value="sigumpar">sigumpar</option>
                      <option value="lumban julu">lumban julu</option>
                      <option value="ajibata">ajibata</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <textarea id="" cols="30" rows="5" class="form-control" name="alamat" placeholder="Alamat"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Deskripsi</label>
                    <textarea id="" cols="30" rows="5" class="form-control" name="deskripsi_akomodasi" placeholder="Deskripsi"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Harga / hari</label>
                    <input type="number" name="harga_hari" class="form-control" id="exampleInputEmail1" placeholder="Harga / hari">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Harga / bulan</label>
                    <input type="number" name="harga_bulan" class="form-control" id="exampleInputEmail1" placeholder="Harga / bulan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Stok</label>
                    <input type="number" name="stok" class="form-control" id="exampleInputEmail1" placeholder="Stok">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Ukuran</label>
                    <input type="text" name="ukuran" class="form-control" id="exampleInputEmail1" placeholder="Format penulisan : 3x3">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Gambar</label>
                    <input type="file" name="img" class="form-control" id="exampleInputEmail1">
                  </div>
                  
                  <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="terms" class="custom-control-input" id="kontrakan">
                      <label class="custom-control-label" for="kontrakan">Setuju <a href="/pusatbantuan">dengan ketentuan</a>.</label>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
          <!-- /.card-footer-->
        </div>

        {{-- KONTRAKAN --}}
        <div class="card collapsed-card">
          <div class="card-header">
            <h3 class="card-title">Form menambah Homestay</h3>
  
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-plus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="card card-primary">
              
              <!-- /.card-header -->
              <!-- form start -->
              
              <form id="form-homestay"action="/penyedia/akomodasi-tambah/homestay" method="POST" class="" autocomplete="off" enctype="multipart/form-data">
                @csrf
                <div class="card-body ">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama homestay</label>
                    <input type="text" name="nama_akomodasi" class="form-control" id="exampleInputEmail1" placeholder="Nama Kontrakan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kecamatan</label>
                    <select name="kecamatan" id="" class="custom-select">
                      <option selected disabled value="">Kecamatan</option>
                      <option value="balige">Balige</option>
                      <option value="porsea">porsea</option>
                      <option value="laguboti">laguboti</option>
                      <option value="silaen">silaen</option>
                      <option value="siantarnarumonda">siantar narumonda</option>
                      <option value="sigumpar">sigumpar</option>
                      <option value="lumban julu">lumban julu</option>
                      <option value="ajibata">ajibata</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <textarea id="" cols="30" rows="5" class="form-control" name="alamat" placeholder="Alamat"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Deskripsi</label>
                    <textarea id="" cols="30" rows="5" class="form-control" name="deskripsi_akomodasi" placeholder="Deskripsi"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Harga / hari</label>
                    <input type="number" name="harga_hari" class="form-control" id="exampleInputEmail1" placeholder="Harga / hari">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Harga / bulan</label>
                    <input type="number" name="harga_bulan" class="form-control" id="exampleInputEmail1" placeholder="Harga / bulan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Stok</label>
                    <input type="number" name="stok" class="form-control" id="exampleInputEmail1" placeholder="Stok">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Ukuran</label>
                    <input type="text" name="ukuran" class="form-control" id="exampleInputEmail1" placeholder="Format penulisan : 3x3">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Gambar</label>
                    <input type="file" name="img" class="form-control" id="exampleInputEmail1">
                  </div>
                  
                  <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="terms" class="custom-control-input" id="homestay">
                      <label class="custom-control-label" for="homestay">Setuju <a href="/pusatbantuan">dengan ketentuan</a>.</label>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
          <!-- /.card-footer-->
        </div>
        
        
        <!-- Default box -->
        
        <!-- /.card -->
  
      </section>
      <!-- /.content -->
@endsection

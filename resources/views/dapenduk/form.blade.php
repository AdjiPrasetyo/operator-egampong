@extends('layout.main')
@section('container')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="url('home')">Home</a></li>
        <li class="breadcrumb-item"><a href="{{url('kk')}}">Kartu Keluarga</a></li>
        <li class="breadcrumb-item active">Tambah Keluarga</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">

      <div class="card">
        <div class="card-body text-center">
          <h5 class="card-title">Data Keluarga</h5>

          <!-- Floating Labels Form -->
          <form class="row g-3" method="POST" action="{{url('ktp')}}">
            <div class="col-md-6">
              @csrf
              <div class="form-floating">
                <input type="text" value="{{$data['id']}}" name="kk_id" class="form-control" maxlength="16"
                  id="floatingName" placeholder="NO KK" readonly>
                <label for="floatingName">No KK</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <input type="text" value="{{old('id')}}" name="id" class="form-control" maxlength="16" id="floatingName"
                  placeholder="NIK">
                <label for="floatingName">NIK</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <input type="text" value="{{old('nama_lengkap')}}" name="nama_lengkap" class="form-control"
                  id="floatingName" placeholder="Nama Lengkap" style="text-transform: uppercase">
                <label for="floatingName">Nama Lengkap</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <input type="text" value="{{old('tempat_lahir')}}" name="tempat_lahir" class="form-control"
                  id="floatingName" placeholder="Tempat Lahir" style="text-transform: uppercase">
                <label for="floatingName">Tempat Lahir</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-floating">
                <input type="date" value="{{old('tempat_lahir')}}" name="tanggal_lahir" class="form-control"
                  id="inputDate">
                <label for="inputDate">Tanggal Lahir</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-floating mb-3">
                <select class="form-select" value="{{old('jenis_kelamin')}}" name="jenis_kelamin" id="floatingSelect"
                  aria-label="State">
                  <option value="">Pilih</option>
                  <option value="LAKI-LAKI">LAKI_LAKI</option>
                  <option value="PEREMPUAN">PEREMPUAN</option>
                </select>
                <label for="floatingSelect">Jenis Kelamin</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-floating mb-3">
                <select class="form-select" value="{{old('agama')}}" name="agama" id="floatingSelect"
                  aria-label="State">
                  <option value="">Pilih</option>
                  <option value="ISLAM">ISLAM</option>
                  <option value="KRISTEN">KRISTEN</option>
                  <option value="HINDU">HINDU</option>
                  <option value="BUDHA">BUDHA</option>
                </select>
                <label for="floatingSelect">Agama</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <input type="text" value="{{old('pendidikan')}}" name="pendidikan" class="form-control"
                  id="floatingName" placeholder="Pendidikan" style="text-transform: uppercase">
                <label for="floatingName">Pendidikan</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <input type="text" value="{{old('pekerjaan')}}" name="pekerjaan" class="form-control" id="floatingName"
                  placeholder="Pekerjaan" style="text-transform: uppercase">
                <label for="floatingName">Pekerjaan</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating mb-3">
                <select class="form-select" value="{{old('status_perkawinan')}}" name="status_perkawinan"
                  id="floatingSelect" aria-label="State">
                  <option value="">Pilih</option>
                  <option value="KAWIN">KAWIN</option>
                  <option value="BELUM KAWIN">BELUM KAWIN</option>
                  <option value="CERAI HIDUP">CERAI HIDUP</option>
                  <option value="CERAI MATI">CERAI MATI</option>
                </select>
                <label for="floatingSelect">Status Perkawinan</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating mb-3">
                <select class="form-select" value="{{old('status_keluarga')}}" name="status_keluarga"
                  id="floatingSelect" aria-label="State">
                  <option value="">Pilih</option>
                  <option value="KEPALA KELUARGA">KEPALA KELUARGA</option>
                  <option value="SUAMI">SUAMI</option>
                  <option value="ISTRI">ISTRI</option>
                  <option value="ANAK">ANAK</option>
                  <option value="MENANTU">MENANTU</option>
                  <option value="MERTUA">MERTUA</option>
                </select>
                <label for="floatingSelect">Status Keluarga</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <input type="text" value="{{old('nama_ayah')}}" name="nama_ayah" class="form-control" id="floatingName"
                  placeholder="Nama Ayah" style="text-transform: uppercase">
                <label for="floatingName">Nama Ayah</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <input type="text" value="{{old('nama_ibu')}}" name="nama_ibu" class="form-control" id="floatingName"
                  placeholder="Nama Ibu" style="text-transform: uppercase">
                <label for="floatingName">Nam Ibu</label>
              </div>
            </div>

            <div class="text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
          </form><!-- End floating Labels Form -->

        </div>
      </div>

    </div>
  </section>

</main><!-- End #main -->
@endsection
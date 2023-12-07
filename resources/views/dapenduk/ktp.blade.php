@extends('layout.main')

@section('container')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Data Penduduk</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="home">Home</a></li>
        <li class="breadcrumb-item">Dapenduk</li>
        <li class="breadcrumb-item active">Kartu Tanda Penduduk</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->


  <section class="section dashboard">
    @if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <i class="bi bi-exclamation-octagon me-1"></i>
      @foreach ($errors->all() as $item)
      {{$item}}
      @endforeach
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <i class="bi bi-exclamation-octagon me-1"></i>
      {{session('success')}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif


  </section>

  <div class="card">
    <div class="card-body">
      <h5 class="card-title text-center">Data Kartu Tanda Penduduk</h5>
      <!-- Table with stripped rows -->
      <table class="table datatable">
        <thead>
          <tr>
            <th scope="col">No KK</th>
            <th scope="col">NIK</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Alamat</th>

          </tr>
        </thead>
        @if (Auth::user()->role == 'admin')
        <tbody>
          @foreach ($data as $item)
          <tr>
            <td scope="row">{{$item['kk_id']}}</td>
            <td>{{$item['id']}}</td>
            <td>{{$item['nama_lengkap']}}</td>
            <td>{{$item['jenis_kelamin']}}</td>
            <td>{{$item['alamat']}}</td>
          </tr>
          @endforeach

        </tbody>
        @endif
        @if (Auth::user()->role == 'sukadamai')
        <tbody>
          @foreach ($data as $item)
          @if ($item['alamat'] == 'SUKA DAMAI')
          <tr>
            <td scope="row">{{$item['kk_id']}}</td>
            <td>{{$item['id']}}</td>
            <td>{{$item['nama_lengkap']}}</td>
            <td>{{$item['jenis_kelamin']}}</td>
            <td>{{$item['alamat']}}</td>
          </tr>
          @endif
          @endforeach

        </tbody>
        @endif
        @if (Auth::user()->role == 'kebunbaru')
        <tbody>
          @foreach ($data as $item)
          @if ($item['alamat'] == 'KEBUN BARU')
          <tr>
            <td scope="row">{{$item['kk_id']}}</td>
            <td>{{$item['id']}}</td>
            <td>{{$item['nama_lengkap']}}</td>
            <td>{{$item['jenis_kelamin']}}</td>
            <td>{{$item['alamat']}}</td>
          </tr>
          @endif
          @endforeach
        </tbody>
        @endif
        @if (Auth::user()->role == 'rejosari')
        <tbody>
          @foreach ($data as $item)
          @if ($item['alamat'] == 'REJO SARI')
          <tr>
            <td scope="row">{{$item['kk_id']}}</td>
            <td>{{$item['id']}}</td>
            <td>{{$item['nama_lengkap']}}</td>
            <td>{{$item['jenis_kelamin']}}</td>
            <td>{{$item['alamat']}}</td>
          </tr>
          @endif
          @endforeach
        </tbody>
        @endif
        @if (Auth::user()->role == 'margoyoso')
        <tbody>
          @foreach ($data as $item)
          @if ($item['alamat'] == 'MARGO YOSO')
          <tr>
            <td scope="row">{{$item['kk_id']}}</td>
            <td>{{$item['id']}}</td>
            <td>{{$item['nama_lengkap']}}</td>
            <td>{{$item['jenis_kelamin']}}</td>
            <td>{{$item['alamat']}}</td>
          </tr>
          @endif
          @endforeach
        </tbody>
        @endif
        @if (Auth::user()->role == 'payungraja')
        <tbody>
          @foreach ($data as $item)
          @if ($item['alamat'] == 'PAYUNG RAJA')
          <tr>
            <td scope="row">{{$item['kk_id']}}</td>
            <td>{{$item['id']}}</td>
            <td>{{$item['nama_lengkap']}}</td>
            <td>{{$item['jenis_kelamin']}}</td>
            <td>{{$item['alamat']}}</td>
          </tr>
          @endif
          @endforeach
        </tbody>
        @endif

      </table>
      <!-- End Table with stripped rows -->

    </div>
  </div>

</main><!-- End #main -->
@endsection
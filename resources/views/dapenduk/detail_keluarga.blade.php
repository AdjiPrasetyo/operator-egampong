@extends('layout.main')
@section('container')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{url('kk')}}"> Kartu Keluarga</a></li>
        <li class="breadcrumb-item active">Detail Keluarga</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">

      <div class="card">
        <div class="card-body text-center">
          <h5 class="card-title">KARTU KELUARGA</h5>
          <h5 class="text-center">{{$id}}</h5>
          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">NIK</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Tempat Lahir</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Agama</th>
                <th scope="col">Pendidikan</th>
                <th scope="col">Jenis Pekerjaan</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $item)
              <tr>
                <th scope="row">{{$item['nama_lengkap']}}</th>
                <td>{{$item['id']}}</td>
                <td>{{$item['jenis_kelamin']}}</td>
                <td>{{$item['tempat_lahir']}}</td>
                <td>{{\Carbon\Carbon::parse($item['tanggal_lahir'])->format('d-m-y')}}</td>
                <td>{{$item['agama']}}</td>
                <td>{{$item['pendidikan']}}</td>
                <td>{{$item['pekerjaan']}}</td>
                <td>{{$item['status_keluarga']}}</td>
              </tr>

              @endforeach
            </tbody>
          </table>
          <!-- End Table with stripped rows -->
        </div>
      </div>

    </div>
  </section>

</main><!-- End #main -->
@endsection
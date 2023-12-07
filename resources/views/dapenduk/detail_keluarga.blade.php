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


          <div class="container text-center">
            <div class="row">
              <div class="col-md-12">
                <h3>{{$id}}</h3>
              </div>
              <div class="col-md-1 ms-auto"><a href="{{url('ktp/'.$id)}}" class="btn btn-success"
                  data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="custom-tooltip"
                  data-bs-title="Tambah Keluarga">
                  <i class=" bi bi-person-fill-add"></i>
                </a></div>
            </div>
          </div>


          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>

                <th>Nama Lengkap</th>
                <th>NIK</th>
                <th>Jenis Kelamin</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Agama</th>
                <th>Pendidikan</th>
                <th>Jenis Pekerjaan</th>
                {{-- <th scope="col">Status</th> --}}
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $item)
              <tr>
                <td>{{$item['nama_lengkap']}}</td>
                <td>{{$item['id']}}</td>
                <td>{{$item['jenis_kelamin']}}</td>
                <td>{{$item['tempat_lahir']}}</td>
                <td>{{\Carbon\Carbon::parse($item['tanggal_lahir'])->format('d-m-Y')}}</td>
                <td>{{$item['agama']}}</td>
                <td>{{$item['pendidikan']}}</td>
                <td>{{$item['pekerjaan']}}</td>
                {{-- <td scope="row">{{$item['status_keluarga']}}</td> --}}
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
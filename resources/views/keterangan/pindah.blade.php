@extends('layout.main')

@section('container')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Keterangan</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="home">Home</a></li>
        <li class="breadcrumb-item">Keterangan</li>
        <li class="breadcrumb-item active">Pindah</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->


  <section class="section dashboard">
    @include('layout.message')
  </section>


  <div class="card">
    <div class="card-body">
      <h5 class="card-title text-center">Data Pindah Domisili</h5>
      <!-- Table with stripped rows -->
      <table class="table datatable">
        <thead>
          <tr>
            <th scope="col">NIK</th>
            <th scope="col">No KK</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Alamat</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $item)
          <tr>
            <td scope="row">{{$item['id']}}</td>
            <td>{{$item['kk_id']}}</td>
            <td>{{$item['nama_lengkap']}}</td>
            <td>{{$item['alamat']}}</td>
          </tr>
          @endforeach

        </tbody>
      </table>
      <!-- End Table with stripped rows -->

    </div>
  </div>

</main><!-- End #main -->
@endsection
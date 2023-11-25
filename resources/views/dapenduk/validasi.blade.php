@extends('layout.main')

@section('container')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Data Penduduk</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
        <li class="breadcrumb-item">Dapenduk</li>
        <li class="breadcrumb-item active">Validasi Data</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->


  <section class="section dashboard">

    @include('layout.message')

    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Validasi Data Penduduk</h5>
        <!-- Table with stripped rows -->
        <table class="table datatable">
          <thead>
            <tr>
              <th scope="col">No KK</th>
              <th scope="col">NIK</th>
              <th scope="col">Nama Lengkap</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $item)
            <tr>
              <th scope="row">{{$item['kk_id']}}</th>
              <td>{{$item['id']}}</td>
              <td>{{$item['nama_lengkap']}}</td>
              <td>{{$item['jenis_kelamin']}}</td>
              <td>
                <form action="{{url('pindah/'.$item['id'])}}" method="POST"
                  onsubmit="return confirm('Apakah Benar Penduduk Telah Pindah ?')" class="d-inline">
                  @csrf
                  @method('POST')
                  <button type="submit" class="btn btn-outline-success" data-bs-toggle="tooltip"
                    data-bs-placement="left" data-bs-custom-class="custom-tooltip" data-bs-title="Pindah"><i
                      class="bi bi-person-lines-fill"></i></button>
                </form>
                <form action="{{url('meninggal/'.$item['id'])}}" method="POST"
                  onsubmit="return confirm('Apakah Benar Penduduk Telah Meninggal ?')" class="d-inline">
                  @csrf
                  @method('POST')
                  <button type="submit" class="btn btn-outline-danger" data-bs-toggle="tooltip" data-bs-placement="left"
                    data-bs-custom-class="custom-tooltip" data-bs-title="Meninggal"><i
                      class="bi bi-person-fill-x"></i></button>
                </form>


              </td>
            </tr>
            @endforeach

          </tbody>
        </table>
        <!-- End Table with stripped rows -->

      </div>
    </div>

  </section>



</main><!-- End #main -->
@endsection
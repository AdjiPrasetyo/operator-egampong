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
      <h5 class="card-title">Datatables</h5>
      <!-- Table with stripped rows -->
      <table class="table datatable">
        <thead>
          <tr>
            <th scope="col">No KK</th>
            <th scope="col">NIK</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Jenis Kelamin</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $item)
          <tr>
            <th scope="row">{{$item['kk_id']}}</th>
            <td>{{$item['id']}}</td>
            <td>{{$item['nama_lengkap']}}</td>
            <td>{{$item['jenis_kelamin']}}</td>

            {{-- <td>{{\Carbon\Carbon::parse($item['created_at'])->format('l\, d-m-y')}}</td>
            <td>{{\Carbon\Carbon::parse($item['updated_at'])->format('l\, d-m-y')}}</td> --}}
            {{-- <td>
              <a href="{{url('kk/'.$item['id'])}}" class="btn btn-primary"
              data-bs-toggle="tooltip" data-bs-placement="left"
              data-bs-custom-class="custom-tooltip"
              data-bs-title="Data Keluarga"><i class="bi bi-people-fill"></i></a>

              <a href="{{url('kk/'.$item['id'])}}" class="btn btn-success"
              data-bs-toggle="tooltip" data-bs-placement="left"
              data-bs-custom-class="custom-tooltip"
              data-bs-title="Tambah Keluarga"><i class="bi bi-person-fill-add"></i></a>

            </td> --}}
          </tr>
          @endforeach
        
        </tbody>
      </table>
      <!-- End Table with stripped rows -->

    </div>
  </div>

</main><!-- End #main -->
@endsection
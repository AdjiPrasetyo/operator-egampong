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
      <h5 class="card-title">Data Penduduk Pindah</h5>
      <!-- Table with stripped rows -->
      <table class="table datatable">
        <thead>
          <tr>
            <th scope="col">No Agenda</th>
            <th scope="col">NIK</th>
            <th scope="col">Created</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $item)
          <tr>
            <th scope="row">{{$item['id']}}</th>
            <td>{{$item['ktp_id']}}</td>
            <td>{{\Carbon\Carbon::parse($item['created_at'])->format('l\, d-m-y')}}</td>
            {{-- <td>
              <a href="{{url('kk/'.$item['id'])}}" class="btn btn-primary" data-bs-toggle="tooltip"
                data-bs-placement="left" data-bs-custom-class="custom-tooltip" data-bs-title="Data Keluarga"><i
                  class="bi bi-people-fill"></i></a>

              <a href="{{url('kk/'.$item['id'])}}" class="btn btn-success" data-bs-toggle="tooltip"
                data-bs-placement="left" data-bs-custom-class="custom-tooltip" data-bs-title="Tambah Keluarga"><i
                  class="bi bi-person-fill-add"></i></a>

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
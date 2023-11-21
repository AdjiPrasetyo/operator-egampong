@extends('layout.main')

@section('container')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Data Penduduk</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="home">Home</a></li>
        <li class="breadcrumb-item">Dapenduk</li>
        <li class="breadcrumb-item active">Kartu Keluarga</li>
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
    
    <div class="row" style="margin: 3% 20% 0% 20%">

      <div class="card text-center" style="width: 50rem" >
        <div class="card-body">
          <h5 class="card-title">Tambah Data Kartu Keluarga</h5>

          <!-- Floating Labels Form -->
          <form class="row g-4 justify-content-center" action="" method="POST">
            @csrf
            <div class="col-md-6">
              <div class="form-floating">
                <input type="text" value="{{old('id')}}" class="form-control" name="id" id="floatingName" placeholder="Nomor Kartu Keluarga" maxlength="16" minlength="16">
                <label for="floatingName">Nomor Kartu Keluarga</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating mb-3">
                <select name="alamat" class="form-select" id="floatingSelect" aria-label="State">
                  <option value="">Pilih</option>
                  <option value="SUKA DAMAI">SUKA DAMAI</option>
                  <option value="KEBUN BARU">KEBUN BARU</option>
                  <option value="REJO SARI">REJO SARI</option>
                  <option value="MARGO YOSO">MARGO YOSO</option>
                  <option value="PAYUNG RAJA">PAYUNG RAJA</option>
                </select>
                <label for="floatingSelect">Dusun</label>
              </div>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
              {{-- <button type="reset" class="btn btn-secondary">Reset</button> --}}
            </div>
          </form><!-- End floating Labels Form -->

        </div>
      </div>

    </div>
  </section>

  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Datatables</h5>
      <!-- Table with stripped rows -->
      <table class="table datatable">
        <thead>
          <tr>
            <th scope="col">No KK</th>
            <th scope="col">Alamat</th>
            <th scope="col">Created</th>
            <th scope="col">Updated</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $item)
          <tr>
            <th scope="row">{{$item['id']}}</th>
            <td>{{$item['alamat']}}</td>
            <td>{{\Carbon\Carbon::parse($item['created_at'])->format('l\, d-m-y')}}</td>
            <td>{{\Carbon\Carbon::parse($item['updated_at'])->format('l\, d-m-y')}}</td>
            <td>
    
            <a href="{{url('kk/'.$item['id'])}}" class="btn btn-primary"
              data-bs-toggle="tooltip" data-bs-placement="left"
              data-bs-custom-class="custom-tooltip"
              data-bs-title="Data Keluarga"><i class="bi bi-people-fill"></i></a>

              <a class="btn btn-success add-data"
              data-bs-toggle="modal" 
              data-bs-target="#modal-add"
              data-id="{{$item['id']}}"
              href="#">
              <i class="bi bi-person-fill-add"></i>
            </a>
            @include('layout.modal.add')
            </td>
            
          </tr>
          
          @endforeach
       
          
        </tbody>
      </table>
      <!-- End Table with stripped rows -->

    </div>
  </div>

</main><!-- End #main -->

@include('layout.modal.js')
@endsection
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
    @include('layout.message')

    <div class="row" style="margin: 3% 20% 0% 20%">

      <div class="card text-center" style="width: 50rem">
        <div class="card-body">
          <h5 class="card-title">Tambah Data Kartu Keluarga</h5>
          @if (Auth::user()->role == 'admin')
          <!-- Floating Labels Form -->
          <form class="row g-4 justify-content-center" action="" method="POST">
            @csrf
            <div class="col-md-6">
              <div class="form-floating">
                <input type="text" value="{{old('id')}}" class="form-control" name="id" id="floatingName"
                  placeholder="Nomor Kartu Keluarga" maxlength="16" minlength="16">
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
          @endif
          @if (Auth::user()->role == 'sukadamai')
          <!-- Floating Labels Form -->
          <form class="row g-4 justify-content-center" action="" method="POST">
            @csrf
            <div class="col-md-6">
              <div class="form-floating">
                <input type="text" value="{{old('id')}}" class="form-control" name="id" id="floatingName"
                  placeholder="Nomor Kartu Keluarga" maxlength="16" minlength="16">
                <label for="floatingName">Nomor Kartu Keluarga</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating mb-3">
                <select name="alamat" class="form-select" id="floatingSelect" aria-label="State">
                  <option value="SUKA DAMAI">SUKA DAMAI</option>
                </select>
                <label for="floatingSelect">Dusun</label>
              </div>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
              {{-- <button type="reset" class="btn btn-secondary">Reset</button> --}}
            </div>
          </form><!-- End floating Labels Form -->
          @endif
          @if (Auth::user()->role == 'kebunbaru')
          <!-- Floating Labels Form -->
          <form class="row g-4 justify-content-center" action="" method="POST">
            @csrf
            <div class="col-md-6">
              <div class="form-floating">
                <input type="text" value="{{old('id')}}" class="form-control" name="id" id="floatingName"
                  placeholder="Nomor Kartu Keluarga" maxlength="16" minlength="16">
                <label for="floatingName">Nomor Kartu Keluarga</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating mb-3">
                <select name="alamat" class="form-select" id="floatingSelect" aria-label="State">
                  <option value="KEBUN BARU">KEBUN BARU</option>
                </select>
                <label for="floatingSelect">Dusun</label>
              </div>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
              {{-- <button type="reset" class="btn btn-secondary">Reset</button> --}}
            </div>
          </form><!-- End floating Labels Form -->
          @endif
          @if (Auth::user()->role == 'rejosari')
          <!-- Floating Labels Form -->
          <form class="row g-4 justify-content-center" action="" method="POST">
            @csrf
            <div class="col-md-6">
              <div class="form-floating">
                <input type="text" value="{{old('id')}}" class="form-control" name="id" id="floatingName"
                  placeholder="Nomor Kartu Keluarga" maxlength="16" minlength="16">
                <label for="floatingName">Nomor Kartu Keluarga</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating mb-3">
                <select name="alamat" class="form-select" id="floatingSelect" aria-label="State">
                  <option value="REJO SARI">REJO SARI</option>
                </select>
                <label for="floatingSelect">Dusun</label>
              </div>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
              {{-- <button type="reset" class="btn btn-secondary">Reset</button> --}}
            </div>
          </form><!-- End floating Labels Form -->
          @endif
          @if (Auth::user()->role == 'margoyoso')
          <!-- Floating Labels Form -->
          <form class="row g-4 justify-content-center" action="" method="POST">
            @csrf
            <div class="col-md-6">
              <div class="form-floating">
                <input type="text" value="{{old('id')}}" class="form-control" name="id" id="floatingName"
                  placeholder="Nomor Kartu Keluarga" maxlength="16" minlength="16">
                <label for="floatingName">Nomor Kartu Keluarga</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating mb-3">
                <select name="alamat" class="form-select" id="floatingSelect" aria-label="State">
                  <option value="MARGO YOSO">MARGO YOSO</option>
                </select>
                <label for="floatingSelect">Dusun</label>
              </div>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
              {{-- <button type="reset" class="btn btn-secondary">Reset</button> --}}
            </div>
          </form><!-- End floating Labels Form -->
          @endif
          @if (Auth::user()->role == 'payungraja')
          <!-- Floating Labels Form -->
          <form class="row g-4 justify-content-center" action="" method="POST">
            @csrf
            <div class="col-md-6">
              <div class="form-floating">
                <input type="text" value="{{old('id')}}" class="form-control" name="id" id="floatingName"
                  placeholder="Nomor Kartu Keluarga" maxlength="16" minlength="16">
                <label for="floatingName">Nomor Kartu Keluarga</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating mb-3">
                <select name="alamat" class="form-select" id="floatingSelect" aria-label="State">
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
          @endif


        </div>
      </div>

    </div>
  </section>

  <div class="card">
    <div class="card-body">
      <h5 class="card-title text-center"> Data Kartu Keluarga</h5>
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
        @if (Auth::user()->role == 'admin')
        <tbody>
          @foreach ($data as $item)
          <tr>
            <th scope="row">{{$item['id']}}</th>
            <td>{{$item['alamat']}}</td>
            <td>{{\Carbon\Carbon::parse($item['created_at'])->format('d-m-Y')}}</td>
            <td>{{\Carbon\Carbon::parse($item['updated_at'])->format('d-m-Y')}}</td>
            <td>

              <a href="{{url('kk/'.$item['id'])}}" class="btn btn-primary" data-bs-toggle="tooltip"
                data-bs-placement="left" data-bs-custom-class="custom-tooltip" data-bs-title="Data Keluarga"><i
                  class="bi bi-people-fill"></i></a>

              <a href="{{url('ktp/'.$item['id'])}}" class="btn btn-success" data-bs-toggle="tooltip"
                data-bs-placement="left" data-bs-custom-class="custom-tooltip" data-bs-title="Tambah Keluarga">
                <i class=" bi bi-person-fill-add"></i>
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
        @endif
        @if (Auth::user()->role == 'sukadamai')
        <tbody>
          @foreach ($data as $item)
          @if ($item['alamat'] == 'SUKA DAMAI')
          <tr>
            <th scope="row">{{$item['id']}}</th>
            <td>{{$item['alamat']}}</td>
            <td>{{\Carbon\Carbon::parse($item['created_at'])->format('d-m-Y')}}</td>
            <td>{{\Carbon\Carbon::parse($item['updated_at'])->format('d-m-Y')}}</td>
            <td>

              <a href="{{url('kk/'.$item['id'])}}" class="btn btn-primary" data-bs-toggle="tooltip"
                data-bs-placement="left" data-bs-custom-class="custom-tooltip" data-bs-title="Data Keluarga"><i
                  class="bi bi-people-fill"></i></a>

              <a href="{{url('ktp/'.$item['id'])}}" class="btn btn-success" data-bs-toggle="tooltip"
                data-bs-placement="left" data-bs-custom-class="custom-tooltip" data-bs-title="Tambah Keluarga">
                <i class=" bi bi-person-fill-add"></i>
              </a>
            </td>
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
            <th scope="row">{{$item['id']}}</th>
            <td>{{$item['alamat']}}</td>
            <td>{{\Carbon\Carbon::parse($item['created_at'])->format('d-m-Y')}}</td>
            <td>{{\Carbon\Carbon::parse($item['updated_at'])->format('d-m-Y')}}</td>
            <td>

              <a href="{{url('kk/'.$item['id'])}}" class="btn btn-primary" data-bs-toggle="tooltip"
                data-bs-placement="left" data-bs-custom-class="custom-tooltip" data-bs-title="Data Keluarga"><i
                  class="bi bi-people-fill"></i></a>

              <a href="{{url('ktp/'.$item['id'])}}" class="btn btn-success" data-bs-toggle="tooltip"
                data-bs-placement="left" data-bs-custom-class="custom-tooltip" data-bs-title="Tambah Keluarga">
                <i class=" bi bi-person-fill-add"></i>
              </a>
            </td>
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
            <th scope="row">{{$item['id']}}</th>
            <td>{{$item['alamat']}}</td>
            <td>{{\Carbon\Carbon::parse($item['created_at'])->format('d-m-Y')}}</td>
            <td>{{\Carbon\Carbon::parse($item['updated_at'])->format('d-m-Y')}}</td>
            <td>

              <a href="{{url('kk/'.$item['id'])}}" class="btn btn-primary" data-bs-toggle="tooltip"
                data-bs-placement="left" data-bs-custom-class="custom-tooltip" data-bs-title="Data Keluarga"><i
                  class="bi bi-people-fill"></i></a>

              <a href="{{url('ktp/'.$item['id'])}}" class="btn btn-success" data-bs-toggle="tooltip"
                data-bs-placement="left" data-bs-custom-class="custom-tooltip" data-bs-title="Tambah Keluarga">
                <i class=" bi bi-person-fill-add"></i>
              </a>
            </td>
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
            <th scope="row">{{$item['id']}}</th>
            <td>{{$item['alamat']}}</td>
            <td>{{\Carbon\Carbon::parse($item['created_at'])->format('d-m-Y')}}</td>
            <td>{{\Carbon\Carbon::parse($item['updated_at'])->format('d-m-Y')}}</td>
            <td>

              <a href="{{url('kk/'.$item['id'])}}" class="btn btn-primary" data-bs-toggle="tooltip"
                data-bs-placement="left" data-bs-custom-class="custom-tooltip" data-bs-title="Data Keluarga"><i
                  class="bi bi-people-fill"></i></a>

              <a href="{{url('ktp/'.$item['id'])}}" class="btn btn-success" data-bs-toggle="tooltip"
                data-bs-placement="left" data-bs-custom-class="custom-tooltip" data-bs-title="Tambah Keluarga">
                <i class=" bi bi-person-fill-add"></i>
              </a>
            </td>
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
            <th scope="row">{{$item['id']}}</th>
            <td>{{$item['alamat']}}</td>
            <td>{{\Carbon\Carbon::parse($item['created_at'])->format('d-m-Y')}}</td>
            <td>{{\Carbon\Carbon::parse($item['updated_at'])->format('d-m-Y')}}</td>
            <td>

              <a href="{{url('kk/'.$item['id'])}}" class="btn btn-primary" data-bs-toggle="tooltip"
                data-bs-placement="left" data-bs-custom-class="custom-tooltip" data-bs-title="Data Keluarga"><i
                  class="bi bi-people-fill"></i></a>

              <a href="{{url('ktp/'.$item['id'])}}" class="btn btn-success" data-bs-toggle="tooltip"
                data-bs-placement="left" data-bs-custom-class="custom-tooltip" data-bs-title="Tambah Keluarga">
                <i class=" bi bi-person-fill-add"></i>
              </a>
            </td>
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
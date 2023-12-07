@extends('layout.main')

@section('container')
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="home">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">
      @if (Auth::user()->role == 'admin')
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item-active">Informasi Gampong</li>
        </ol>
      </nav>
      @include('layout.info.all')
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item-active">Informasi Dusun</li>
        </ol>
      </nav>
      @include('layout.info.sukadamai')
      @include('layout.info.kebunbaru')
      @include('layout.info.rejosari')
      @include('layout.info.margoyoso')
      @include('layout.info.payungraja')
      @endif
      @if (Auth::user()->role == 'sukadamai')
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item-active">Informasi Dusun</li>
        </ol>
      </nav>
      @include('layout.info.sukadamai')
      @endif
      @if (Auth::user()->role == 'kebunbaru')
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item-active">Informasi Dusun</li>
        </ol>
      </nav>
      @include('layout.info.kebunbaru')
      @endif
      @if (Auth::user()->role == 'rejosari')
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item-active">Informasi Dusun</li>
        </ol>
      </nav>
      @include('layout.info.rejosari')
      @endif
      @if (Auth::user()->role == 'margoyoso')
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item-active">Informasi Dusun</li>
        </ol>
      </nav>
      @include('layout.info.margoyoso')
      @endif
      @if (Auth::user()->role == 'payungraja')
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item-active">Informasi Dusun</li>
        </ol>
      </nav>
      @include('layout.info.payungraja')
      @endif



    </div>
  </section>

</main><!-- End #main -->


@endsection
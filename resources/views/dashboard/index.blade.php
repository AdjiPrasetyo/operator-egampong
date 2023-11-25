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

    </div>
  </section>

</main><!-- End #main -->


@endsection
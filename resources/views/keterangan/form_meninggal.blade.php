<div class="row" style="margin: 3% 20% 0% 20%">

  <div class="card text-center" style="width: 50rem">
    <div class="card-body">
      <h5 class="card-title">Tambah Data Keterangan Meninggal</h5>

      <!-- Floating Labels Form -->
      <form class="row g-4 justify-content-center" action="" method="POST">
        @csrf
        <div class="col-md-12">
          <div class="form-floating">
            <input type="text" value="{{old('id')}}" class="form-control" name="id" id="floatingName"
              placeholder="Nomor Agenda">
            <label for="floatingName">Nomor Agenda</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-floating">
            <input type="text" value="{{old('ktp_id')}}" class="form-control" name="ktp_id" id="floatingName"
              placeholder="NIK" maxlength="16">
            <label for="floatingName">NIK</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-floating">
            <input type="text" value="{{old('tempat')}}" class="form-control" name="tempat" id="floatingName"
              placeholder="tempat">
            <label for="floatingName">Tempat</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-floating">
            <input type="date" value="{{old('tanggal')}}" class="form-control" name="tanggal" id="floatingName"
              placeholder="tanggal">
            <label for="floatingName">Tanggal</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-floating">
            <input type="text" value="{{old('umur')}}" class="form-control" name="umur" id="floatingName"
              placeholder="umur">
            <label for="floatingName">Umur</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-floating">
            <input type="text" value="{{old('sebab')}}" class="form-control" name="sebab" id="floatingName"
              placeholder="sebab">
            <label for="floatingName">Sebab</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-floating">
            <input type="text" value="{{old('makam')}}" class="form-control" name="makam" id="floatingName"
              placeholder="makam">
            <label for="floatingName">Makam</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-floating">
            <input type="text" value="{{old('nama_pelapor')}}" class="form-control" name="nama_pelapor"
              id="floatingName" placeholder="nama_pelapor">
            <label for="floatingName">Pelapor</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-floating">
            <input type="text" value="{{old('hubungan_pelapor')}}" class="form-control" name="hubungan_pelapor"
              id="floatingName" placeholder="hubungan_pelapor">
            <label for="floatingName">Hubungan</label>
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
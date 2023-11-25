<div class="row" style="margin: 3% 20% 0% 20%">

  <div class="card text-center" style="width: 50rem">
    <div class="card-body">
      <h5 class="card-title">Tambah Data Keterangan Pindah</h5>

      <!-- Floating Labels Form -->
      <form class="row g-4 justify-content-center" action="" method="POST">
        @csrf
        <div class="col-md-6">
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
        <div class="col-12">
          <div class="form-floating">
            <textarea class="form-control" placeholder="keterangan" value="{{old('keterangan')}}" name="keterangan"
              id="floatingTextarea" style="height: 100px;"></textarea>
            <label for="floatingTextarea">Keterangan</label>
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
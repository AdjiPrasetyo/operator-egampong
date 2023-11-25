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
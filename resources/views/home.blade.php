<x-layout>
<div class="container py-5">
    <div class="row justify-content-center">
      @if (Auth::user()->email == 'admin@ksu.com')
      <div class="col-sm-4 card btn btn-light border-0">
        <a href={{ route('recapitulation') }} class="text-decoration-none text-dark">
          <div class="card-body py-5">
            <img src={{ asset('img/rekapitulasi.png') }} class="card-img-top card-image" alt="rekapitulasi">
            <h5 class="card-title text-center fs-4 mt-4">Rekapitulasi APD</h5>
          </div>
        </a>
      </div>
      @else
      <div class="col-sm-4 card btn btn-light border-0">
        <a href={{ route('inspection') }} class="text-decoration-none text-dark">
          <div class="card-body py-5">
            <img src={{ asset('img/inspeksi.png') }} class="card-img-top card-image" alt="inspeksi">
            <h5 class="card-title text-center fs-4 mt-4">Inspeksi APD</h5>
          </div>
        </a>
      </div>
      @endif
    </div>
  </div>
</x-layout>
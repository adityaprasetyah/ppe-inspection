<x-layout>
<div class="container py-5">
    <div class="row justify-content-between">
      <div class="col-5 card border border-3 border-dark">
        <a href={{ route('recapitulation') }} class="text-decoration-none text-dark">
          <div class="card-body py-5">
            <img src={{ asset('img/rekapitulasi.png') }} class="card-img-top card-image" alt="rekapitulasi">
            <h5 class="card-title fw-bold text-center fs-4 mt-4">Rekapitulasi APD</h5>
          </div>
        </a>
      </div>
      <div class="col-5 card border border-3 border-dark">
        <a href={{ route('inspection') }} class="text-decoration-none text-dark">
          <div class="card-body py-5">
            <img src={{ asset('img/inspeksi.png') }} class="card-img-top card-image" alt="inspeksi">
            <h5 class="card-title fw-bold text-center fs-4 mt-4">Inspeksi APD</h5>
          </div>
        </a>
      </div>
    </div>
  </div>
</x-layout>
<x-layout>
  <div class="container py-5">
    <div class="col-md-8">
      <h1 class="fw-bold fs-2 mb-4">Pilih Jenis APD</h1>
      <ul class="list-group">
        <li class="list-group-item py-3">
          <a href={{route('inspection.create', [
            'area' => $area->slug,
            'type' => 'body-harness'
          ])}}>
            Body Harness
          </a>
        </li>
        <li class="list-group-item py-3">
          <a href={{route('inspection.create', [
            'area' => $area->slug,
            'type' => 'safety-helmet'
          ])}}>
            Safety Helmet
          </a>
        </li>
        <li class="list-group-item py-3">
          <a href={{route('inspection.create', [
            'area' => $area->slug,
            'type' => 'face-shield'
          ])}}>
            Face Shield
          </a>
        </li>
        <li class="list-group-item py-3">
          <a href={{route('inspection.create', [
            'area' => $area->slug,
            'type' => 'kap-las'
          ])}}>
            Kap Las
          </a>
        </li>
        <li class="list-group-item py-3">
          <a href={{route('inspection.create', [
            'area' => $area->slug,
            'type' => 'sarung-tangan-las'
          ])}}>
            Sarung Tangan Las
          </a>
        </li>
        <li class="list-group-item py-3">
          <a href={{route('inspection.create', [
            'area' => $area->slug,
            'type' => 'ear-plug'
          ])}}>
            Ear Plug
          </a>
        </li>
      </ul>
    </div>
  </div>
</x-layout>
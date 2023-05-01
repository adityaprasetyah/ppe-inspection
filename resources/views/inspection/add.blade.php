<x-layout>
  <div class="container my-5">
    <h1 class="fs-4 mb-5"><a href={{ route('inspection.select.type', $area) }}>{{ $area->name }}</a> / Tambah Inspeksi</h1>
    <div class="col-8">
      @if ($type == 'body-harness')
        @include('inspection.add.body-harness')
      @elseif ($type == 'safety-helmet')
        @include('inspection.add.safety-helmet')
      @elseif ($type == 'face-shield')
        @include('inspection.add.face-shield')
      @elseif ($type == 'kap-las')
        @include('inspection.add.kap-las')
      @elseif ($type == 'sarung-tangan-las')
        @include('inspection.add.sarung-tangan-las')
      @elseif ($type == 'ear-plug')
        @include('inspection.add.ear-plug')
      @endif
    </div>
  </div>
</x-layout>
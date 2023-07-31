<x-layout>
  <div class="container my-5">
    <h1 class="fw-bold fs-2 mb-4 text-center">Pilih Area Rekapitulasi</h1>
    <ul class="list-group mb-5">
      @foreach ($areas as $area)
      <li class="list-group-item py-4">
        <a href="{{ route('recapitulation.list', $area->slug) }}" class="text-decoration-none text-dark fs-5">
          {{ $area->name }}
        </a>
      </li>
      @endforeach
    </ul>

    <ul class="list-group">
      <li class="list-group-item py-4">
        <a href="{{ route('recapitulation.history') }}" class="text-decoration-none text-dark fs-5">
          History
        </a>
      </li>
    </ul>
  </div>
</x-layout>
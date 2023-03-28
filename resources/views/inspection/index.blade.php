<x-layout>
  <div class="container my-5">
    <h1 class="fw-bold fs-2 mb-4 text-center">Pilih Area Inspeksi</h1>
    <ul class="list-group">
      @foreach ($areas as $area)
      <li class="list-group-item py-4">
        <a href="{{ route('inspection.list', $area->slug) }}" class="text-decoration-none text-dark fs-5">
          {{ $area->name }}
        </a>
      </li>
      @endforeach
    </ul>
  </div>
</x-layout>
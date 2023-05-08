<x-layout>
  <div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h1 class="fs-5">Manage Area</h1>
      @auth
      @if (Auth::user()->email == 'admin@ksu.com')
      <a type="button" href={{ route('area.add') }} class="btn btn-primary">Tambah Area</a>
      @endif
      @endauth
    </div>
    @if (count($areas) == 0)
    <div class="alert alert-warning my-5" role="alert">
      Belum ada area.
    </div>
    @else
    <div class="overflow-auto">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col" class="fw-bold">Nama Area</th>
            <th scope="col" class="fw-bold text-center">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($areas as $area)
          <tr class="py-2">
            <td>{{ $area->name }}</td>
            <td class="text-center">
              <form method="POST" action="{{ route('area.delete', $area->slug) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger border">Hapus</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    @endif
  </div>
</x-layout>
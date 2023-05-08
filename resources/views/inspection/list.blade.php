<x-layout>
  <div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h1 class="fs-5"><a href={{ route('inspection') }}>Inspeksi</a> \   Area {{ $area->name }}</h1>
      @auth
      @if (Auth::user()->email == 'safety@ksu.com')
      <a type="button" href={{ route('inspection.select.type', $area->slug) }} class="btn btn-primary">Tambah Inspeksi</a>
      @endif
      @endauth
    </div>
    @if (count($inspecs) == 0)
    <div class="alert alert-warning my-5" role="alert">
      Belum ada inspeksi untuk area {{ $area->name }}.
    </div>
    @else
    <div class="overflow-auto">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col" class="fw-bold text-center">id</th>
            <th scope="col" class="fw-bold">Nama APD</th>
            <th scope="col" class="fw-bold">Nama Peminjam</th>
            <th scope="col" class="fw-bold">Nama Inspektor</th>
            <th scope="col" class="fw-bold text-center">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($inspecs as $inspec)
          <tr class="py-2">
            <td class="text-center">{{ $inspec->string_id }}</td>
            <td>{{ $inspec->ppe_name }}</td>
            <td>{{ $inspec->borrower_name }}</td>
            <td>{{ $inspec->inspector_name }}</td>
            <td class="text-center">
              <a href={{ route('inspection.detail', $inspec->id) }}>
                <button class="btn btn-light border">Lihat</button>
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    @endif
  </div>
</x-layout>
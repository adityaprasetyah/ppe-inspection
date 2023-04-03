<x-layout>
  <div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h1 class="fs-5"><a href={{ route('recapitulation') }}>Rekapitulasi</a> \   Area {{ $area->name }}</h1>
      <a type="button" href={{ route('recapitulation.create', $area->slug) }} class="btn btn-primary">Tambah Rekapitulasi</a>
    </div>
    @if (count($recaps) == 0)
    <div class="alert alert-warning my-5" role="alert">
      Belum ada rekapitulasi untuk area {{ $area->name }}.
    </div>
    @else
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col" class="fw-bold text-center">id</th>
          <th scope="col" class="fw-bold">Nama APD</th>
          <th scope="col" class="fw-bold">Nama Peminjam</th>
          <th scope="col" class="fw-bold text-center">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($recaps as $recap)
        <tr class="py-2">
          <td class="text-center">{{ $recap->string_id }}</td>
          <td>{{ $recap->ppe_name }}</td>
          <td>{{ $recap->borrower_name }}</td>
          <td class="text-center">
            <a href={{ route('recapitulation.detail', $recap->id) }}>
              <button class="btn btn-light border">Lihat</button>
            </a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    @endif
  </div>
</x-layout>
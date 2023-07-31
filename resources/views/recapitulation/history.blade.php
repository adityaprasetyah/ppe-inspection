<x-layout>
  <div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h1 class="fs-5"><a href={{ route('recapitulation') }}>Rekapitulasi</a> \ History Rekapitulasi</h1>
    </div>
    @if (count($recaps) == 0)
    <div class="alert alert-warning my-5" role="alert">
      Tidak ada data rekapitulasi dalam history.
    </div>
    @else
    <div class="overflow-auto">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col" class="fw-bold text-center">id</th>
            <th scope="col" class="fw-bold">Nama APD</th>
            <th scope="col" class="fw-bold">Nama Peminjam</th>
            <th scope="col" class="fw-bold text-center">Area</th>
            <th scope="col" class="fw-bold text-center">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($recaps as $recap)
          <tr class="py-2">
            <td class="text-center">
              <div class="d-flex align-items-center justify-content-center">
                @if($recap->status == 'danger')
                <span data-bs-toggle="tooltip" data-bs-title="APD perlu segera dikembalikan!" class="badge rounded-pill bg-danger me-2">!</span>
                @endif
                <p>{{ $recap->string_id }}</p>
              </div>
            </td>
            <td>{{ $recap->ppe_name }}</td>
            <td>{{ $recap->borrower_name }}</td>
            <td class="text-center">{{  $recap->area->name }}</td>
            <td class="text-center">
              <a href={{ route('recapitulation.detail', $recap->id) }}>
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
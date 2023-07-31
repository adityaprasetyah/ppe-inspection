<x-layout>
  <div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h1 class="fs-5"><a href={{ route('recapitulation') }}>Rekapitulasi</a> \   Area {{ $area->name }}</h1>
      @auth
      @if (Auth::user()->email == 'admin@ksu.com')
      <a type="button" href={{ route('recapitulation.create', $area->slug) }} class="btn btn-primary">Tambah Rekapitulasi</a>
      @endif
      @endauth
    </div>
    @if (count($recaps) == 0)
    <div class="alert alert-warning my-5" role="alert">
      Belum ada rekapitulasi untuk area {{ $area->name }}.
    </div>
    @else
    <div class="overflow-auto">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col" class="fw-bold text-center">id</th>
            <th scope="col" class="fw-bold">Nama APD</th>
            <th scope="col" class="fw-bold">Nama Peminjam</th>
            <th scope="col" class="fw-bold text-center">Tanggal Pengembalian</th>
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
            <td class="text-center">{{  date('j M Y', strtotime($recap->submission_date)) }}</td>
            <td class="text-center">
              <a href={{ route('recapitulation.detail', $recap->id) }}>
                <button class="btn btn-light border">Lihat</button>
              </a>
              <button type="button" class="btn btn-danger border" data-bs-toggle="modal" data-bs-target="#deleteModal" data-recap-id={{ $recap->id }}>
                Hapus
              </button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    @endif
  </div>

  <x-slot name="script">
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        var deleteModal = document.getElementById('deleteModal');
        deleteModal.addEventListener('show.bs.modal', function (event) {
          var button = event.relatedTarget; // Button that triggered the modal
          var recapId = button.getAttribute('data-recap-id'); // Extract the data-recap-id value
          console.log(recapId);
          document.getElementById('recapIdInput').value = recapId; // Set the value of the hidden input field
        });
      });
    </script>
  </x-slot>
</x-layout>

{{-- modal --}}
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data Rekapitulasi</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="lh-base">Data yang sudah dihapus akan disimpan pada halaman history rekapitulasi.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <form action={{ route('recapitulation.history.add') }} method="POST">
          @csrf
          @method('PUT')
          <input type="hidden" id="recapIdInput" name="recap_id" value="">
          <input type="hidden" name="area" value={{ $area->slug }}>
          <button type="submit" class="btn btn-danger">Ya</button>
        </form>
      </div>
    </div>
  </div>
</div>
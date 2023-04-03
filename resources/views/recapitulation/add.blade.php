<x-layout>
  <div class="container py-5">
    <div class="col-6">
      <h1 class="fw-bold fs-2 mb-4 text-center">Tambah Rekapitulasi</h1>
      <form action={{ route('recapitulation.store') }} method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="string_id" class="form-label">ID APD</label>
          <input type="text" name="string_id" class="form-control" id="string_id">
        </div>
        <div class="mb-3">
          <label for="borrower_name" class="form-label">Nama Pengguna</label>
          <input type="text" name="borrower_name" class="form-control" id="borrower_name">
        </div>
        <div class="mb-3">
          <label for="ppe_name" class="form-label">Jenis APD</label>
          <input type="text" name="ppe_name" class="form-control" id="ppe_name">
        </div>
        <div class="mb-3">
          <label for="loan_date" class="form-label">Tanggal Penyerahan</label>
          <input type="date" name="loan_date" class="form-control" id="loan_date">
        </div>
        <div class="mb-3">
          <label for="submission_date" class="form-label">Estimasi Proyek Selesai</label>
          <input type="date" name="submission_date" class="form-control" id="submission_date">
        </div>
        <div class="mb-3">
          <label for="image" class="form-label">Dokumentasi</label>
          <input type="file" name="image" class="form-control" id="image">
        </div>
        <div class="mb-3">
          <label for="notes" class="form-label">Catatan</label>
          <textarea name="notes" id="notes" rows="10" class="form-control"></textarea>
        </div>
        <input type="hidden" name="area_id" value={{ $area->slug }}>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</x-layout>
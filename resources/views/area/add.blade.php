<x-layout>
  <div class="container py-5">
    <div class="col-6">
      <h1 class="fw-bold fs-2 mb-4 text-center">Tambah Rekapitulasi</h1>
      <form action={{ route('area.store') }} method="POST">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Nama Area</label>
          <input type="text" name="name" class="form-control" id="name">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</x-layout>
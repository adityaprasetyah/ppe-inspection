<x-layout>
  <div class="container py-5">
    <h1 class="fw-bold fs-2 mb-4">Tambah Inspeksi</h1>
    <div class="col-6">
      <form>
        <div class="mb-3">
          <label for="worker" class="form-label">Nama Pekerja</label>
          <input type="text" name="worker" class="form-control" id="worker">
        </div>
        <div class="mb-3">
          <label for="ppe" class="form-label">Nama APD</label>
          <input type="text" name="ppe" class="form-control" id="ppe">
        </div>
        <div class="mb-3">
          <label for="id-ppe" class="form-label">ID APD</label>
          <input type="number" name="id-ppe" class="form-control" id="id-ppe">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</x-layout>
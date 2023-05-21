<x-layout>
  <div class="container my-5">
    <h1 class="fs-2 mb-4">Edit Data APD</h1>
    <div class="col-6">
      <form action={{ route('ppe.update') }} method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="total" class="form-label">Total APD Keseluruhan</label>
          <input type="number" name="total" class="form-control" value="{{ $ppe->total }}" id="total">
        </div>
        <div class="mb-3">
          <label for="total_warehouse" class="form-label">APD di Gudang</label>
          <input type="number" name="total_warehouse" class="form-control" value="{{ $ppe->total_warehouse }}" id="total_warehouse">
        </div>
        <div class="mb-3">
          <label for="total_onsite" class="form-label">APD di Lapangan</label>
          <input type="number" name="total_onsite" class="form-control" value="{{ $ppe->total_onsite }}" id="total_onsite">
        </div>
        <div class="mb-3">
          <label for="body_harness" class="form-label">Body Harness</label>
          <input type="number" name="body_harness" class="form-control" value="{{ $ppe->body_harness }}" id="body_harness">
        </div>
        <div class="mb-3">
          <label for="safety_helmet" class="form-label">Safety Helmet</label>
          <input type="number" name="safety_helmet" class="form-control" value="{{ $ppe->safety_helmet }}" id="safety_helmet">
        </div>
        <div class="mb-3">
          <label for="kap_las" class="form-label">Kap Las</label>
          <input type="number" name="kap_las" class="form-control" value="{{ $ppe->kap_las }}" id="kap_las">
        </div>
        <div class="mb-3">
          <label for="face_shield" class="form-label">Face Shield</label>
          <input type="number" name="face_shield" class="form-control" value="{{ $ppe->face_shield }}" id="face_shield">
        </div>
        <div class="mb-3">
          <label for="sarung_tangan_las" class="form-label">Sarung Tangan Las</label>
          <input type="number" name="sarung_tangan_las" class="form-control" value="{{ $ppe->sarung_tangan_las }}" id="sarung_tangan_las">
        </div>
        <div class="mb-3">
          <label for="earplug" class="form-label">Earplug</label>
          <input type="number" name="earplug" class="form-control" value="{{ $ppe->earplug }}" id="earplug">
        </div>
        <div class="mb-3">
          <label for="safety_shoes" class="form-label">Safety Shoes</label>
          <input type="number" name="safety_shoes" class="form-control" value="{{ $ppe->safety_shoes }}" id="safety_shoes">
        </div>
        <div class="mb-3">
          <label for="vest" class="form-label">Rompi</label>
          <input type="number" name="vest" class="form-control" value="{{ $ppe->vest }}" id="vest">
        </div>
        <button type="submit" class="btn btn-primary my-3">Perbarui Data</button>
      </form>
    </div>
  </div>
</x-layout>
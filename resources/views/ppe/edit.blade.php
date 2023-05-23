<x-layout>
  <div class="container my-5">
    <h1 class="fs-2 mb-4">Edit Data APD</h1>
    <form action={{ route('ppe.update') }} method="POST">
      @csrf
      @method('PUT')
      <div class="col-6">
        <div class="mb-3">
          <label for="total" class="form-label">Total APD Keseluruhan</label>
          <input type="number" name="total" class="form-control" value="{{ $ppe->total }}" id="total">
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <h1 class="fs-3 fw-bold my-3">APD di Gudang</h1>
          <div class="mb-3">
            <label for="total" class="form-label">Total APD</label>
            <input type="number" name="warehouse_total" class="form-control" value="{{ $ppe->warehouse_total }}" id="total">
          </div>
          <div class="mb-3">
            <label for="body_harness" class="form-label">Body Harness</label>
            <input type="number" name="warehouse_body_harness" class="form-control" value="{{ $ppe->warehouse_body_harness }}" id="body_harness">
          </div>
          <div class="mb-3">
            <label for="safety_helmet" class="form-label">Safety Helmet</label>
            <input type="number" name="warehouse_safety_helmet" class="form-control" value="{{ $ppe->warehouse_safety_helmet }}" id="safety_helmet">
          </div>
          <div class="mb-3">
            <label for="kap_las" class="form-label">Kap Las</label>
            <input type="number" name="warehouse_kap_las" class="form-control" value="{{ $ppe->warehouse_kap_las }}" id="kap_las">
          </div>
          <div class="mb-3">
            <label for="face_shield" class="form-label">Face Shield</label>
            <input type="number" name="warehouse_face_shield" class="form-control" value="{{ $ppe->warehouse_face_shield }}" id="face_shield">
          </div>
          <div class="mb-3">
            <label for="sarung_tangan_las" class="form-label">Sarung Tangan Las</label>
            <input type="number" name="warehouse_sarung_tangan_las" class="form-control" value="{{ $ppe->warehouse_sarung_tangan_las }}" id="sarung_tangan_las">
          </div>
          <div class="mb-3">
            <label for="earplug" class="form-label">Earplug</label>
            <input type="number" name="warehouse_earplug" class="form-control" value="{{ $ppe->warehouse_earplug }}" id="earplug">
          </div>
          <div class="mb-3">
            <label for="safety_shoes" class="form-label">Safety Shoes</label>
            <input type="number" name="warehouse_safety_shoes" class="form-control" value="{{ $ppe->warehouse_safety_shoes }}" id="safety_shoes">
          </div>
          <div class="mb-3">
            <label for="vest" class="form-label">Rompi</label>
            <input type="number" name="warehouse_vest" class="form-control" value="{{ $ppe->warehouse_vest }}" id="vest">
          </div>
        </div>
        <div class="col-md-6">
          <h1 class="fs-3 fw-bold my-3">APD di Lapangan</h1>
          <div class="mb-3">
            <label for="total" class="form-label">Total APD</label>
            <input type="number" name="onsite_total" class="form-control" value="{{ $ppe->onsite_total }}" id="total">
          </div>
          <div class="mb-3">
            <label for="body_harness" class="form-label">Body Harness</label>
            <input type="number" name="onsite_body_harness" class="form-control" value="{{ $ppe->onsite_body_harness }}" id="body_harness">
          </div>
          <div class="mb-3">
            <label for="safety_helmet" class="form-label">Safety Helmet</label>
            <input type="number" name="onsite_safety_helmet" class="form-control" value="{{ $ppe->onsite_safety_helmet }}" id="safety_helmet">
          </div>
          <div class="mb-3">
            <label for="kap_las" class="form-label">Kap Las</label>
            <input type="number" name="onsite_kap_las" class="form-control" value="{{ $ppe->onsite_kap_las }}" id="kap_las">
          </div>
          <div class="mb-3">
            <label for="face_shield" class="form-label">Face Shield</label>
            <input type="number" name="onsite_face_shield" class="form-control" value="{{ $ppe->onsite_face_shield }}" id="face_shield">
          </div>
          <div class="mb-3">
            <label for="sarung_tangan_las" class="form-label">Sarung Tangan Las</label>
            <input type="number" name="onsite_sarung_tangan_las" class="form-control" value="{{ $ppe->onsite_sarung_tangan_las }}" id="sarung_tangan_las">
          </div>
          <div class="mb-3">
            <label for="earplug" class="form-label">Earplug</label>
            <input type="number" name="onsite_earplug" class="form-control" value="{{ $ppe->onsite_earplug }}" id="earplug">
          </div>
          <div class="mb-3">
            <label for="safety_shoes" class="form-label">Safety Shoes</label>
            <input type="number" name="onsite_safety_shoes" class="form-control" value="{{ $ppe->onsite_safety_shoes }}" id="safety_shoes">
          </div>
          <div class="mb-3">
            <label for="vest" class="form-label">Rompi</label>
            <input type="number" name="onsite_vest" class="form-control" value="{{ $ppe->onsite_vest }}" id="vest">
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary my-3">Perbarui Data</button>
    </form>
  </div>
</x-layout>
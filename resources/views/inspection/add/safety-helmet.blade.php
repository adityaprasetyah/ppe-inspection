<form action={{ route('inspection.store') }} method="POST" enctype="multipart/form-data">
  @csrf
  <div class="mb-3">
    <label for="string_id" class="form-label">ID APD</label>
    <input type="text" name="string_id" class="form-control" id="string_id">
  </div>
  <div class="mb-3">
    <label for="ppe_name" class="form-label">Jenis APD</label>
    <input type="text" class="form-control" id="ppe_name" value="{{ $typename }}" disabled>
  </div>
  <div class="mb-3">
    <label for="inspector_name" class="form-label">Nama Inspektor</label>
    <input type="text" name="inspector_name" class="form-control" id="inspector_name">
  </div>
  <div class="mb-3">
    <label for="inspection_date" class="form-label">Tanggal Inspeksi</label>
    <input type="date" name="inspection_date" class="form-control" id="inspection_date">
  </div>
  <div class="mb-3">
    <label for="area" class="form-label">Area Kerja</label>
    <input type="text" class="form-control" id="area" value="{{ $area->name }}" disabled>
  </div>
  <div class="mb-3">
    <label for="borrower_name" class="form-label">Nama Pengguna APD</label>
    <input type="text" name="borrower_name" class="form-control" id="borrower_name">
  </div>
  <div class="mb-3">
    <label class="form-label">Apakah brim dalam keadaan baik?</label>
    <div class="form-check d-flex align-items-center">
      <input class="form-check-input me-2" type="radio" name="q1" id="q1-yes" value="Ya">
      <label class="form-check-label me-2 mt-1" for="q1-yes">
        Ya
      </label>
    </div>
    <div class="form-check d-flex align-items-center">
      <input class="form-check-input me-2" type="radio" name="q1" id="q1-no" value="Tidak">
      <label class="form-check-label me-2 mt-1" for="q1-no">
        Tidak
      </label>
    </div>
  </div>
  <div class="mb-3">
    <label class="form-label">Apakah suspensi dalam keadaan baik?</label>
    <div class="form-check d-flex align-items-center">
      <input class="form-check-input me-2" type="radio" name="q2" id="q2-yes" value="Ya">
      <label class="form-check-label me-2 mt-1" for="q2-yes">
        Ya
      </label>
    </div>
    <div class="form-check d-flex align-items-center">
      <input class="form-check-input me-2" type="radio" name="q2" id="q2-no" value="Tidak">
      <label class="form-check-label me-2 mt-1" for="q2-no">
        Tidak
      </label>
    </div>
  </div>
  <div class="mb-3">
    <label class="form-label">Apakah tali helm dalam keadaan baik?</label>
    <div class="form-check d-flex align-items-center">
      <input class="form-check-input me-2" type="radio" name="q3" id="q3-yes" value="Ya">
      <label class="form-check-label me-2 mt-1" for="q3-yes">
        Ya
      </label>
    </div>
    <div class="form-check d-flex align-items-center">
      <input class="form-check-input me-2" type="radio" name="q3" id="q3-no" value="Tidak">
      <label class="form-check-label me-2 mt-1" for="q3-no">
        Tidak
      </label>
    </div>
  </div>
  <div class="mb-3">
    <label class="form-label">Apakah safety helmet sudah tahap penetrasi terhadap benda?</label>
    <div class="form-check d-flex align-items-center">
      <input class="form-check-input me-2" type="radio" name="q4" id="q4-yes" value="Ya">
      <label class="form-check-label me-2 mt-1" for="q4-yes">
        Ya
      </label>
    </div>
    <div class="form-check d-flex align-items-center">
      <input class="form-check-input me-2" type="radio" name="q4" id="q4-no" value="Tidak">
      <label class="form-check-label me-2 mt-1" for="q4-no">
        Tidak
      </label>
    </div>
  </div>
  <div class="mb-3">
    <label class="form-label">Apakah safety helmet tahan air?</label>
    <div class="form-check d-flex align-items-center">
      <input class="form-check-input me-2" type="radio" name="q5" id="q5-yes" value="Ya">
      <label class="form-check-label me-2 mt-1" for="q5-yes">
        Ya
      </label>
    </div>
    <div class="form-check d-flex align-items-center">
      <input class="form-check-input me-2" type="radio" name="q5" id="q5-no" value="Tidak">
      <label class="form-check-label me-2 mt-1" for="q5-no">
        Tidak
      </label>
    </div>
  </div>
  <div class="mb-3">
    <label class="form-label">Apakah penggantian suspense dan ikat kepala sudah tepat?</label>
    <div class="form-check d-flex align-items-center">
      <input class="form-check-input me-2" type="radio" name="q6" id="q6-yes" value="Ya">
      <label class="form-check-label me-2 mt-1" for="q6-yes">
        Ya
      </label>
    </div>
    <div class="form-check d-flex align-items-center">
      <input class="form-check-input me-2" type="radio" name="q6" id="q6-no" value="Tidak">
      <label class="form-check-label me-2 mt-1" for="q6-no">
        Tidak
      </label>
    </div>
  </div>
  <div class="mb-3">
    <label class="form-label">Apakah safety helmet memiliki shelt yang keras?</label>
    <div class="form-check d-flex align-items-center">
      <input class="form-check-input me-2" type="radio" name="q7" id="q7-yes" value="Ya">
      <label class="form-check-label me-2 mt-1" for="q7-yes">
        Ya
      </label>
    </div>
    <div class="form-check d-flex align-items-center">
      <input class="form-check-input me-2" type="radio" name="q7" id="q7-no" value="Tidak">
      <label class="form-check-label me-2 mt-1" for="q7-no">
        Tidak
      </label>
    </div>
  </div>
  <div class="mb-3">
    <label class="form-label">Apakah Panjang tali helm dengan shelt 1 inci (2,54-3,18cm)?</label>
    <div class="form-check d-flex align-items-center">
      <input class="form-check-input me-2" type="radio" name="q8" id="q8-yes" value="Ya">
      <label class="form-check-label me-2 mt-1" for="q8-yes">
        Ya
      </label>
    </div>
    <div class="form-check d-flex align-items-center">
      <input class="form-check-input me-2" type="radio" name="q8" id="q8-no" value="Tidak">
      <label class="form-check-label me-2 mt-1" for="q8-no">
        Tidak
      </label>
    </div>
  </div>
  <div class="mb-3">
    <label class="form-label">Jika kondisi helm retak, perforasi, atau pecah jangan gunakan</label>
    <div class="form-check d-flex align-items-center">
      <input class="form-check-input me-2" type="radio" name="q9" id="q9-yes" value="Ya">
      <label class="form-check-label me-2 mt-1" for="q9-yes">
        Ya
      </label>
    </div>
    <div class="form-check d-flex align-items-center">
      <input class="form-check-input me-2" type="radio" name="q9" id="q9-no" value="Tidak">
      <label class="form-check-label me-2 mt-1" for="q9-no">
        Tidak
      </label>
    </div>
  </div>
  <div class="mb-5">
    <p class="fst-italic">Guidance: ANSI Z89.1-2009</p>
  </div>
  <div class="mb-3">
    <label for="image" class="form-label">Dokumentasi</label>
    <input type="file" name="image" class="form-control" id="image">
  </div>
  <div class="mb-3">
    <label for="notes" class="form-label">Keterangan</label>
    <textarea name="notes" id="notes" rows="5" class="form-control"></textarea>
  </div>
  <div class="mb-3">
    <label for="recommendation" class="form-label">Rekomendasi</label>
    <textarea name="recommendation" id="recommendation" rows="5" class="form-control"></textarea>
  </div>
  <input type="hidden" name="area_id" value={{ $area->slug }}>
  <input type="hidden" name="type" value={{ $type }}>
  <input type="hidden" name="ppe_name" value="{{ $typename }}">
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
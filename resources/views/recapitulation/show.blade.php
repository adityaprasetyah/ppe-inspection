<x-layout>
  <div class="container my-5">
    <div class="col-md-8">
      <h1 class="fs-5 mb-4 text-center">Detail Rekapitulasi</h1>
      <div class="overflow-auto">
        <table class="table table-striped">
          <tr>
            <td class="fw-bold w-50">ID Rekapitulasi</td>
            <td>{{ $recap->string_id }}</td>
          </tr>
          <tr>
            <td class="fw-bold w-50">Nama Pekerja</td>
            <td>{{ $recap->borrower_name }}</td>
          </tr>
          <tr>
            <td class="fw-bold w-50">Jenis APD</td>
            <td>{{ $recap->ppe_name}}</td>
          </tr>
          <tr>
            <td class="fw-bold w-50">Area</td>
            <td>{{ $area->name }}</td>
          </tr>
          <tr>
            <td class="fw-bold w-50">Tanggal Penyerahan</td>
            <td>{{ $recap->loan_date }}</td>
          </tr>
          <tr>
            <td class="fw-bold w-50">Estimasi Proyek Selesai</td>
            <td>{{ $recap->submission_date }}</td>
          </tr>
          <tr>
            <td class="fw-bold w-50">Catatan</td>
            <td>{{ $recap->notes }}</td>
          </tr>
        </table>
      </div>
      <p class="fw-bold p-2">Dokumentasi</p>
      <img src={{ asset('storage/images/recapitulations/' . $recap->image) }} alt={{ $recap->image }} class="object-fit-cover w-100 recap-img">
    </div>
  </div>
</x-layout>
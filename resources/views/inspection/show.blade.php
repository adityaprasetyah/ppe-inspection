<x-layout>
  <div class="container my-5">
    <div class="col-md-8">
      <h1 class="fs-5 mb-4 text-center">Detail Inspeksi</h1>
      <div class="overflow-auto">
        <table class="table border table-striped">
          <tr>
            <td class="fw-bold w-50">ID APD</td>
            <td>{{ $inspec->string_id }}</td>
          </tr>
          <tr>
            <td class="fw-bold w-50">Jenis APD</td>
            <td>{{ $inspec->ppe_name}}</td>
          </tr>
          <tr>
            <td class="fw-bold w-50">Area</td>
            <td>{{ $area->name }}</td>
          </tr>
          <tr>
            <td class="fw-bold w-50">Nama Inspektor</td>
            <td>{{ $inspec->inspector_name }}</td>
          </tr>
          <tr>
            <td class="fw-bold w-50">Tanggal Inspeksi</td>
            <td>{{ $inspec->inspection_date }}</td>
          </tr>
          <tr>
            <td class="fw-bold w-50">Nama Pekerja</td>
            <td>{{ $inspec->borrower_name }}</td>
          </tr>
        </table>
        <table class="table table-striped border my-5">
          @if ($inspec->ppe_name == 'Body Harness')
            @include('inspection.question-box.body-harness')
          @elseif ($inspec->ppe_name == 'Safety Helmet')
            @include('inspection.question-box.safety-helmet')
          @elseif ($inspec->ppe_name == 'Face Shield')
            @include('inspection.question-box.face-shield')
          @elseif ($inspec->ppe_name == 'Kap Las')
            @include('inspection.question-box.kap-las')
          @elseif ($inspec->ppe_name == 'Sarung Tangan Las')
            @include('inspection.question-box.sarung-tangan-las')
          @elseif ($inspec->ppe_name == 'Ear Plug')
            @include('inspection.question-box.ear-plug')
          @endif
        </table>
        <table class="table table-striped">
          <tr>
            <td class="fw-bold w-50">Catatan</td>
            <td>{{ $inspec->notes }}</td>
          </tr>
          <tr>
            <td class="fw-bold w-50">Rekomendasi</td>
              <td>{{ $inspec->recommendation }}</td>
          </tr>
        </table>
      </div>
      <p class="fw-bold p-2">Dokumentasi</p>
      <img src={{ asset('storage/images/inspection/' . $inspec->image) }} alt={{ $inspec->image }} class="object-fit-cover w-100 recap-img">
    </div>
  </div>
</x-layout>
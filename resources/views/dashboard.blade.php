<x-layout>
  <div class="container my-5">
    <h1 class="fs-2 fw-bold">Data APD</h1>
    @if(Auth::user()->email == 'admin@ksu.com')
    <div>
      <a href="{{ route('ppe.edit') }}" class="btn btn-primary my-3">Manage Data</a>
    </div>
    @endif
    <div class="row my-3">
      <div class="col-md-3">
        <table class="table w-100">
          <tr class="border">
            <th style="width: 60%;">Total APD</th>
            <td>: {{ $ppe->total }} items</td>
          </tr>
          <tr class="border">
            <th>Body Harness</th>
            <td>: {{ $ppe->body_harness }} items</td>
          </tr>
          <tr class="border">
            <th>Safety Helmet</th>
            <td>: {{ $ppe->safety_helmet }} items</td>
          </tr>
          <tr class="border">
            <th>Kap Las</th>
            <td>: {{ $ppe->kap_las }} items</td>
          </tr>
          <tr class="border">
            <th>Face Shield</th>
            <td>: {{ $ppe->face_shield }} items</td>
          </tr>
          <tr class="border">
            <th>Sarung Tangan Las</th>
            <td>: {{ $ppe->sarung_tangan_las }} items</td>
          </tr>
          <tr class="border">
            <th>Earplug</th>
            <td>: {{ $ppe->earplug }} items</td>
          </tr>
          <tr class="border">
            <th>Safety Shoes</th>
            <td>: {{ $ppe->safety_shoes }} items</td>
          </tr>
          <tr class="border">
            <th>Rompi</th>
            <td>: {{ $ppe->vest }} items</td>
          </tr>
        </table>
      </div>
      <div class="col-md-6"></div>
      <div class="col-md-3">
        <table class="table w-100">
          <tr class="border">
            <th style="width: 60%;">APD di Gudang</th>
            <td>: {{ $ppe->total_warehouse }} items</td>
          </tr>
          <tr class="border">
            <th>APD di Lapangan</th>
            <td>: {{ $ppe->total_onsite }} items</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</x-layout>
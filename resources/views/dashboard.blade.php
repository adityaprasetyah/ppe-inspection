<x-layout>
  <div class="container my-5">
    <h1 class="fs-2 fw-bold">Data APD</h1>
    @if(Auth::user()->email == 'admin@ksu.com')
    <div>
      <a href="{{ route('ppe.edit') }}" class="btn btn-primary my-3">Manage Data</a>
    </div>
    @endif
    <div class="row justify-content-between my-3">
      @if (Auth::user()->email != 'safety@ksu.com')
      <div class="col-md-3">
        <table class="table w-100">
          <tr class="border">
            <th class="fw-bold" style="width: 60%;">APD di Gudang</th>
          </tr>
          <tr class="border">
            <th>Total</th>
            <td>: {{ $ppe->warehouse_total }} items</td>
          </tr>
          <tr class="border">
            <th>Body Harness</th>
            <td>: {{ $ppe->warehouse_body_harness }} items</td>
          </tr>
          <tr class="border">
            <th>Safety Helmet</th>
            <td>: {{ $ppe->warehouse_safety_helmet }} items</td>
          </tr>
          <tr class="border">
            <th>Kap Las</th>
            <td>: {{ $ppe->warehouse_kap_las }} items</td>
          </tr>
          <tr class="border">
            <th>Face Shield</th>
            <td>: {{ $ppe->warehouse_face_shield }} items</td>
          </tr>
          <tr class="border">
            <th>Sarung Tangan Las</th>
            <td>: {{ $ppe->warehouse_sarung_tangan_las }} items</td>
          </tr>
          <tr class="border">
            <th>Earplug</th>
            <td>: {{ $ppe->warehouse_earplug }} items</td>
          </tr>
          <tr class="border">
            <th>Safety Shoes</th>
            <td>: {{ $ppe->warehouse_safety_shoes }} items</td>
          </tr>
          <tr class="border">
            <th>Rompi</th>
            <td>: {{ $ppe->warehouse_vest }} items</td>
          </tr>
        </table>
      </div>
      @endif
      <div class="col-md-6">
        <h1 class="fs-5 fw-bold text-center mb-3">Rincian Jumlah Data APD</h1>
        <div class="mb-5">
          <canvas id="myChart"></canvas>
        </div>
        @if (Auth::user()->email != 'safety@ksu.com')
        <h1 class="fs-5 fw-bold text-center mb-3">Jumlah Total Data APD</h1>
        <div class="w-50 mx-auto">
          <canvas id="myChart2"></canvas>
        </div>
        @endif
      </div>
      <div class="col-md-3">
        <table class="table w-100">
          <tr class="border">
            <th class="fw-bold" style="width: 60%;">APD di Lapangan</th>
          </tr>
          <tr class="border">
            <th>Total</th>
            <td>: {{ $ppe->onsite_total }} items</td>
          </tr>
          <tr class="border">
            <th>Body Harness</th>
            <td>: {{ $ppe->onsite_body_harness }} items</td>
          </tr>
          <tr class="border">
            <th>Safety Helmet</th>
            <td>: {{ $ppe->onsite_safety_helmet }} items</td>
          </tr>
          <tr class="border">
            <th>Kap Las</th>
            <td>: {{ $ppe->onsite_kap_las }} items</td>
          </tr>
          <tr class="border">
            <th>Face Shield</th>
            <td>: {{ $ppe->onsite_face_shield }} items</td>
          </tr>
          <tr class="border">
            <th>Sarung Tangan Las</th>
            <td>: {{ $ppe->onsite_sarung_tangan_las }} items</td>
          </tr>
          <tr class="border">
            <th>Earplug</th>
            <td>: {{ $ppe->onsite_earplug }} items</td>
          </tr>
          <tr class="border">
            <th>Safety Shoes</th>
            <td>: {{ $ppe->onsite_safety_shoes }} items</td>
          </tr>
          <tr class="border">
            <th>Rompi</th>
            <td>: {{ $ppe->onsite_vest }} items</td>
          </tr>
        </table>
      </div>
    </div>
  </div>

  <x-slot name="script">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
      const ctx = document.getElementById('myChart');
      const cty = document.getElementById('myChart2');

      const email = @json(Auth::user()->email);
      const ppe = @json($ppe);

      if (email == 'safety@ksu.com') {
        new Chart(ctx, {
          type: 'bar',
          data: {
            labels: ['Total', 'Body Harness', 'Safety Helmet', 'Kap Las', 'Face Shield', 'Sarung Tangan Las', 'Earplug', 'Safety Shoes', 'Rompi'],
            datasets: [{
              label: 'DATA APD LAPANGAN',
              data: [ppe.onsite_total, ppe.onsite_body_harness, ppe.onsite_safety_helmet, ppe.onsite_kap_las, ppe.onsite_face_shield, ppe.onsite_sarung_tangan_las, ppe.onsite_earplug, ppe.onsite_safety_shoes, ppe.onsite_vest],
              borderWidth: 1
            }]
          },
          options: {
            scales: {
              y: {
                beginAtZero: true
              }
            }
          }
        });
      } else {
        new Chart(ctx, {
          type: 'bar',
          data: {
            labels: ['Body Harness', 'Safety Helmet', 'Kap Las', 'Face Shield', 'Sarung Tangan Las', 'Earplug', 'Safety Shoes', 'Rompi'],
            datasets: [{
              label: 'DATA APD GUDANG',
              data: [ppe.warehouse_body_harness, ppe.warehouse_safety_helmet, ppe.warehouse_kap_las, ppe.warehouse_face_shield, ppe.warehouse_sarung_tangan_las, ppe.warehouse_earplug, ppe.warehouse_safety_shoes, ppe.warehouse_vest],
              borderWidth: 1
            }, {
              label: 'DATA APD LAPANGAN',
              data: [ppe.onsite_body_harness, ppe.onsite_safety_helmet, ppe.onsite_kap_las, ppe.onsite_face_shield, ppe.onsite_sarung_tangan_las, ppe.onsite_earplug, ppe.onsite_safety_shoes, ppe.onsite_vest],
              borderWidth: 1
            }]
          },
          options: {
            scales: {
              y: {
                beginAtZero: true
              }
            }
          }
        });
        new Chart(cty, {
          type: 'doughnut',
          data: {
            labels: ['DATA APD GUDANG', 'DATA APD LAPANGAN'],
            datasets: [{
              label: 'TOTAL APD', 
              data: [ppe.warehouse_total, ppe.onsite_total],
              // borderWidth: 1
            }]
          },
          options: {
            plugins: {
              legend: {
                position: 'bottom',
              }
            }
          }
        });
      }

    </script>
  </x-slot>
</x-layout>
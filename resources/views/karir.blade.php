<link rel="stylesheet" href="../css/karir.css">
<title>PT. Astra Honda Motor || karir</title>

<style>

</style>

<x-layout>
    <!-- Lowongan Pekerjaan -->
    <section class="form-pendaftaran">
      <div class="container">
          <div class="row">
              <div class="col-md-12 col-12 mt-5">
                  <div class="title text-capitalize">
                      <h2 class="fs-1 fw-bold">{{ $karir['jabatan'] }}</h2>
                      <h4 class="fs-2">penempatan : {{ $karir['lokasi'] }}</h4>
                      <h5 class="fs-2">kualifikasi</h5>
                  </div>
                  <ul class="list-group mt-4 fs-5 list">
                      <li class="list-group-item">{{ $karir['jeniskelamin'] }}</li>
                      <li class="list-group-item">{{ $karir['pendidikan'] }}</li>
                      <li class="list-group-item">{{ $karir['pengalaman'] }}</li>
                      <li class="list-group-item">{{ $karir['keahlian'] }}</li>
                      <li class="list-group-item">{{ $karir['kerjasama'] }}</li>
                      <li class="list-group-item">{{ $karir['vaksin'] }}</li>
                  </ul>
                  <div class="daftar text-center text-capitalize mt-5">
                    <a href="{{ $karir['link'] }}" class="fs-5 fw-bold text-decoration-none py-3 px-3 bg-danger text-light rounded">daftar sekarang</a>
                  </div>
              </div>
          </div>
      </div>
    </section>
    <!-- End Lowongan Pekerjaan -->
</x-layout>
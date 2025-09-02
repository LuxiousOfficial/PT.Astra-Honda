<link rel="stylesheet" href="/css/products.css">
<title>PT. Astra Honda Motor || Karir</title>

<x-layout>
    <!-- Matic -->
     <section class="home-matic">
        <div class="container">
          <div class="row">
            <div class="col">
              <h2 class="text-center text-uppercase mt-5 fs-1 fw-bold">Lowongan <span class="text-danger">Pekerjaan</span></h2>
            </div>
          </div>
          <div class="row">
            <form class="d-flex mt-5" role="search">
              <input class="form-control" type="search" id="search" name="search" placeholder="Cari lowongan berdasarkan jabatan" aria-label="Search" autocomplete="off">
              <button class="btn btn-outline-success bg-danger fw-bold text-light border-white fs-4" type="submit">Search</button>
            </form>
          </div>
          <div class="row mt-5">
            @foreach ($karirs as $karir)
            <div class="col-xxl-4 col-xl-4 col-md-4 col-sm-6 col-6 my-3">
                <div class="card text-center shadow">
                  <div class="card-body" style="background-color: whitesmoke; border-radius: 1rem;">
                    <h2 class="card-title fs-2 fw-bold">{{ $karir['jabatan'] }}</h2>
                    <h5 class="card-title fs-5 mt-3">{{  $karir['jeniskelamin'] }}</h5>
                    <h5 class="card-title fs-5 mt-2">{{ $karir['pendidikan'] }}</h5>
                    <h5 class="card-title fs-5 mt-2">{{ $karir['pengalaman'] }}</h5>
                    <a href="/karirs/{{ $karir['slug'] }}" class="btn btn-danger d-flex justify-content-center fw-bold fs-6 mt-3">selengkapnya</a>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
     </section>
    <!-- End Matic -->
</x-layout>

<script src="js/matics.js"></script>
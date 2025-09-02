<link rel="stylesheet" href="/css/dealer.css">
<title>PT. Astra Honda Motor || Dealer</title>

<x-layout>
  <section class="home-matic">
    <div class="container">
      <div class="row">
        <form class="d-flex my-5" role="search">
          <input class="form-control" type="search" id="search" name="search" placeholder="Cari Dealer berdasarkan nama ataupun alamat" aria-label="Search" autocomplete="off">
          <button class="btn btn-outline-success bg-danger fw-bold text-light border-white fs-4" type="submit">Search</button>
        </form>
      </div>
      <div class="row mb-3">
        @foreach ($dealers as $dealer)
        <div class="col-xxl-4 col-xl-4 col-md-4 col-sm-6 col-6 my-3">
            <div class="card text-center shadow">
              <div class="card-body" style="background-color: whitesmoke; border-radius: 1rem;">
                <h2 class="card-title fs-3 fw-bold">{{ $dealer['nama'] }}</h2>
                <h5 class="card-title fs-5 my-3">{{  $dealer['alamat'] }}</h5>
                <h5 class="card-title fs-5">{{ $dealer['telepon'] }}</h5>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>

 {{ $dealers->links() }}

    <section class="home-dealer">
      <div class="container">
        <div class="row mt-4">
          <div class="col-xxl-4 col-xl-4 col-md-4 col-sm-6 col-6 text-center text-capitalize my-3">
            <div class="card">
              <img src="img/dealer1.webp" class="card-img-top">
              <div class="card-body">
                <h4>dealer honda bigWing</h4>
                <p>Dealer penjualan sepeda motor Honda dengan premium service yang melayani: Penjualan Honda Big Bike Honda premium model (Matic, Sport dan Cub)</p>
                <a href="#" class="d-flex justify-content-center text-decoration-none text-light bg-danger fs-6 fw-bold">selengkapnya</a>
              </div>
            </div>
          </div>
          <div class="col-xxl-4 col-xl-4 col-md-4 col-sm-6 col-6 text-center text-capitalize my-3">
            <div class="card">
              <img src="img/dealer2.webp" class="card-img-top">
              <div class="card-body">
                <h4>dealer honda bigWing</h4>
                <p>Dealer penjualan sepeda motor Honda dengan premium service yang melayani: Penjualan Honda Big Bike Honda premium model (Matic, Sport dan Cub)</p>
                <a href="#" class="d-flex justify-content-center text-decoration-none text-light bg-danger fs-6 fw-bold">selengkapnya</a>
              </div>
            </div>
          </div>
          <div class="col-xxl-4 col-xl-4 col-md-4 col-sm-6 col-6 text-center text-capitalize my-3">
            <div class="card">
              <img src="img/dealer3.webp" class="card-img-top">
              <div class="card-body">
                <h4>dealer honda bigWing</h4>
                <p>Dealer penjualan sepeda motor Honda dengan premium service yang melayani: Penjualan Honda Big Bike Honda premium model (Matic, Sport dan Cub)</p>
                <a href="#" class="d-flex justify-content-center text-decoration-none text-light bg-danger fs-6 fw-bold">selengkapnya</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</x-layout>
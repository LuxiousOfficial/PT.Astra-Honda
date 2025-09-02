<title>PT. Astra Honda Motor || Simulasi Kredit</title>
<link rel="stylesheet" href="/css/karyawan.css">

<x-layout>

  @if (session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif  
    <section class="container mt-3">
        <div>
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-md-12 col-12">
                    <form action="/dashboardhrdastrahonda/dealer" method="post">
                      @csrf
                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label fw-bold" for="id">ID Dealer</label>
                            <input type="text" id="id" name="id" class="form-control form-control-lg @error('id')is-invalid @enderror" placeholder="Ketik id..." required value="{{ old('id') }}"/>
                            @error('id')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label fw-bold" for="nama">Nama Dealer</label>
                            <input type="text" id="nama" name="nama" class="form-control form-control-lg @error('nama')is-invalid @enderror" placeholder="Ketik nama dealer..." required value="{{ old('nama') }}"/>
                            @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                          <label class="form-label fw-bold" for="alamat">Alamat Dealer</label>
                          <input type="text" id="alamat" name="alamat" class="form-control form-control-lg @error('alamat')is-invalid @enderror" placeholder="Ketik Alamat dealer..." required value="{{ old('alamat') }}"/>
                          @error('alamat')
                          <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                          <label class="form-label fw-bold" for="telepon">Telepon Dealer</label>
                          <input type="number" id="telepon" name="telepon" class="form-control form-control-lg @error('telepon')is-invalid @enderror" placeholder="Ketik telepon dealer..." required value="{{ old('telepon') }}"/>
                          @error('telepon')
                          <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                          <button  type="submit" name="daftar" data-mdb-button-init data-mdb-ripple-init class="btn btn-danger btn-lg w-100" style="padding-left: 1.5rem; padding-right: 1.5rem;">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</x-layout>
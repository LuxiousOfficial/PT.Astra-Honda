<title>PT. Astra Honda Motor || Lowongan Kerja</title>
<link rel="stylesheet" href="/css/karyawan.css">

<x-layout>
    <section class="container">
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
          <div class="container mt-3">
              <div class="row">
                  <div class="col-xxl-12 col-xl-12 col-md-12 col-12">
                      <form action="/dashboardhrdastrahonda/karir" method="post">
                        @csrf
                          <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label fw-bold" for="slug">Slug</label>
                            <input type="text" id="slug" name="slug" class="form-control form-control-lg @error('slug')is-invalid @enderror" placeholder="Ketik slug..." required value="{{ old('slug') }}"/>
                            @error('slug')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>

                          <div data-mdb-input-init class="form-outline mb-4">
                              <label class="form-label fw-bold" for="jabatan">Jabatan</label>
                              <input type="text" id="jabatan" name="jabatan" class="form-control form-control-lg @error('jabatan')is-invalid @enderror" placeholder="Ketik jabatan..." required value="{{ old('jabatan') }}"/>
                              @error('jabatan')
                              <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                          </div>

                          <div data-mdb-input-init class="form-outline mb-4">
                              <label class="form-label fw-bold" for="jeniskelamin">Jenis Kelamin</label>
                              <input type="text" id="jeniskelamin" name="jeniskelamin" class="form-control form-control-lg @error('jeniskelamin')is-invalid @enderror" placeholder="Ketik jenis kelamin..." required value="{{ old('jeniskelamin') }}"/>
                              @error('jeniskelamin')
                              <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                          </div>
  
                          <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label fw-bold" for="pendidikan">Pendidikan</label>
                            <input type="pendidikan" id="pendidikan" name="pendidikan" class="form-control form-control-lg @error('pendidikan')is-invalid @enderror" placeholder="Ketik pendidikan anda..." required value="{{ old('pendidikan') }}"/>
                            @error('pendidikan')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>
  
                          <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label fw-bold" for="pengalaman">Pengalaman</label>
                            <input type="text" id="pengalaman" name="pengalaman" class="form-control form-control-lg @error('pengalaman')is-invalid @enderror" placeholder="Ketik pengalaman anda..." required value="{{ old('pengalaman') }}"/>
                            @error('pengalaman')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>
  
                          <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label fw-bold" for="keahlian">Keahlian</label>
                            <input type="text" id="keahlian" name="keahlian" class="form-control form-control-lg @error('keahlian')is-invalid @enderror" placeholder="Ketik keahlian anda..." required value="{{ old('keahlian') }}"/>
                            @error('keahlian')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>
  
                          <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label fw-bold" for="kerjasama">Kerjasama</label>
                            <input type="text" id="kerjasama" name="kerjasama" class="form-control form-control-lg @error('kerjasama')is-invalid @enderror" placeholder="Ketik kerjasama anda..." required value="{{ old('kerjasama') }}"/>
                            @error('kerjasama')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>
  
                          <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label fw-bold" for="vaksin">Vaksin</label>
                            <input type="text" id="vaksin" name="vaksin" class="form-control form-control-lg @error('vaksin')is-invalid @enderror" placeholder="Ketik vaksin anda..." required value="{{ old('vaksin') }}"/>
                            @error('vaksin')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>

                          <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label fw-bold" for="lokasi">Lokasi</label>
                            <input type="text" id="lokasi" name="lokasi" class="form-control form-control-lg @error('lokasi')is-invalid @enderror" placeholder="Ketik lokasi anda..." required value="{{ old('lokasi') }}"/>
                            @error('lokasi')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>

                          <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label fw-bold" for="link">link</label>
                            <input type="text" id="link" name="link" class="form-control form-control-lg @error('link')is-invalid @enderror" placeholder="Ketik link..." required value="{{ old('link') }}"/>
                            @error('link')
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
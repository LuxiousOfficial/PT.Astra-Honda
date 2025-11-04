<title>PT. Astra Honda Motor || Penerimaan Calon Karyawan</title>
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
                    <form method="post" action="/user/file" enctype="multipart/form-data">
                      @csrf
                      <div class="mb-3">
                        <label for="pasphoto" class="form-label fw-bold">Pas Photo <span class="text-danger fw-bold">Max : 2 MB [JPEG, JPG, PNG]</span></label>
                        <input class="form-control @error('pasphoto')is-invalid @enderror" type="file" id="pasphoto" name="pasphoto" required>
                        @error('pasphoto')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label for="cv" class="form-label fw-bold">CV <span class="text-danger fw-bold">Max : 5 MB || [PDF]</span></label>
                        <input class="form-control @error('cv')is-invalid @enderror" type="file" id="cv" name="cv" required>
                        @error('cv')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label for="ktp" class="form-label fw-bold">KTP <span class="text-danger fw-bold">Max : 3 MB || [JPEG, JPG, PNG]</span></label>
                        <input class="form-control @error('ktp')is-invalid @enderror" type="file" id="ktp" name="ktp" required>
                        @error('ktp')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label for="kk" class="form-label fw-bold">Kartu Keluarga <span class="text-danger fw-bold">Max : 3 MB || [PDF]</span></label>
                        <input class="form-control @error('kk')is-invalid @enderror" type="file" id="kk" name="kk" required>
                        @error('kk')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label for="ijazah" class="form-label fw-bold">Ijazah <span class="text-danger fw-bold">Max : 3 MB || [PDF]</span></label>
                        <input class="form-control @error('ijazah')is-invalid @enderror" type="file" id="ijazah" name="ijazah" required>
                        @error('ijazah')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label for="transkrip_nilai" class="form-label fw-bold">Trasnkrip Nilai <span class="text-danger fw-bold">Max : 3 MB || [PDF]</span></label>
                        <input class="form-control @error('transkrip_nilai')is-invalid @enderror" type="file" id="transkrip_nilai" name="transkrip_nilai" required>
                        @error('transkrip_nilai')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label for="skck" class="form-label fw-bold">SKCK <span class="text-danger fw-bold">Max : 3 MB || [PDF]</span></label>
                        <input class="form-control @error('skck')is-invalid @enderror" type="file" id="skck" name="skck" required>
                        @error('skck')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="text-center text-lg-start mt-4 pt-2">
                        <button  type="submit" name="daftar" data-mdb-button-init data-mdb-ripple-init class="btn btn-danger btn-lg w-100" style="padding-left: 1.5rem; padding-right: 1.5rem;">Save</button>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layout>
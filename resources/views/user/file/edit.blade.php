<x-layout-user>
  <section>
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-md-12 col-12">
                <form method="post" action="/user/file/{{ $file->id }}" enctype="multipart/form-data">
                    @method('put')
                    @csrf

                    <div class="mb-3">
                      <label for="pasphoto" class="form-label fw-bold">Pas Photo <span class="text-danger fw-bold">Max : 2 MB [JPEG, JPG, PNG]</span></label>
                      <input type="hidden" name="oldpasphoto" value="{{ $file->pasphoto }}">
                      <input class="form-control @error('pasphoto')is-invalid @enderror" type="file" id="pasphoto" name="pasphoto" required>
                      @error('pasphoto')
                      <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="mb-3">
                      <label for="cv" class="form-label fw-bold">CV <span class="text-danger fw-bold">Max : 5 MB || [PDF]</span></label>
                      <input type="hidden" name="oldcv" value="{{ $file->cv }}">
                      <input class="form-control @error('cv')is-invalid @enderror" type="file" id="cv" name="cv" required>
                      @error('cv')
                      <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="mb-3">
                      <label for="ktp" class="form-label fw-bold">KTP <span class="text-danger fw-bold">Max : 3 MB || [JPEG, JPG, PNG]</span></label>
                      <input type="hidden" name="oldktp" value="{{ $file->ktp }}">
                      <input class="form-control @error('ktp')is-invalid @enderror" type="file" id="ktp" name="ktp" required>
                      @error('ktp')
                      <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="mb-3">
                      <label for="kk" class="form-label fw-bold">Kartu Keluarga <span class="text-danger fw-bold">Max : 3 MB || [PDF]</span></label>
                      <input type="hidden" name="oldkk" value="{{ $file->kk }}">
                      <input class="form-control @error('kk')is-invalid @enderror" type="file" id="kk" name="kk" required>
                      @error('kk')
                      <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="mb-3">
                      <label for="ijazah" class="form-label fw-bold">Ijazah <span class="text-danger fw-bold">Max : 3 MB || [PDF]</span></label>
                      <input type="hidden" name="oldijazah" value="{{ $file->ijazah }}">
                      <input class="form-control @error('ijazah')is-invalid @enderror" type="file" id="ijazah" name="ijazah" required>
                      @error('ijazah')
                      <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="mb-3">
                      <label for="transkrip_nilai" class="form-label fw-bold">Trasnkrip Nilai <span class="text-danger fw-bold">Max : 3 MB || [PDF]</span></label>
                      <input type="hidden" name="oldtranskripnilai" value="{{ $file->transkrip_nilai }}">
                      <input class="form-control @error('transkrip_nilai')is-invalid @enderror" type="file" id="transkrip_nilai" name="transkrip_nilai" required>
                      @error('transkrip_nilai')
                      <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="mb-3">
                      <label for="skck" class="form-label fw-bold">SKCK <span class="text-danger fw-bold">Max : 3 MB || [PDF]</span></label>
                      <input type="hidden" name="oldskck" value="{{ $file->skck }}">
                      <input class="form-control @error('skck')is-invalid @enderror" type="file" id="skck" name="skck" required>
                      @error('skck')
                      <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="text-center text-lg-start mt-4 pt-2">
                      <button  type="submit" name="daftar" data-mdb-button-init data-mdb-ripple-init class="btn btn-danger btn-lg w-100" style="padding-left: 1.5rem; padding-right: 1.5rem;">Update Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
</x-layout-user>
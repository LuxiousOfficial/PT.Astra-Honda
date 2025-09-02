<x-layoutdashboardahm>
  <section>
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-md-12 col-12">
                <form method="post" action="/dashboardhrdastrahonda/pelamar/{{ $pelamar->id }}" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label fw-bold" for="jabatan_id">Jabatan</label>
                        <select class="form-select" aria-label="Default select example" id="jabatan_id" name="jabatan_id">
                          <option selected>{{ old('jabatan', $pelamar->jabatan) }}</option>
                          @foreach ($karirs as $karir)
                          <option value="{{ $karir->id }}">{{ $karir->jabatan }}</option>
                          @endforeach
                        </select>
                      </div>

                      <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label fw-bold" for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control form-control-lg @error('email')is-invalid @enderror" placeholder="Ketik alamat email anda..." required value="{{ old('email', $pelamar->email), }}"/>
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label fw-bold" for="nik">Nik</label>
                        <input type="number" id="nik" name="nik" class="form-control form-control-lg @error('nik')is-invalid @enderror" placeholder="Ketik nik anda..." required value="{{ old('nik', $pelamar->nik) }}"/>
                        @error('nik')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label fw-bold" for="namalengkap">Nama Lengkap</label>
                        <input type="text" id="namalengkap" name="namalengkap" class="form-control form-control-lg @error('namalengkap')is-invalid @enderror" placeholder="Ketik nama lengkap anda..." required value="{{ old('namalengkap', $pelamar->namalengkap) }}"/>
                        @error('namalengkap')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label fw-bold" for="tanggallahir">Tanggal Lahir</label>
                        <input type="date" id="tanggallahir" name="tanggallahir" class="form-control form-control-lg w-50 @error('tanggallahir')is-invalid @enderror" placeholder="Ketik tanggal lahir anda..." required value="{{ old('tanggallahir', $pelamar->tanggallahir) }}"/>
                        @error('tanggallahir')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label fw-bold" for="tempatlahir">Tempat Lahir</label>
                        <input type="text" id="tempatlahir" name="tempatlahir" class="form-control form-control-lg @error('tempatlahir')is-invalid @enderror" placeholder="Ketik tempat Lahir anda..." required value="{{ old('tempatlahir', $pelamar->tempatlahir) }}"/>
                        @error('tempatlahir')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label fw-bold" for="jeniskelamin">Jenis Kelamin</label>
                        <select class="form-select" aria-label="Default select example" id="jeniskelamin" name="jeniskelamin">
                          <option selected>{{ $pelamar->jeniskelamin }}</option>
                          <option value="Laki-laki">Laki-laki</option>
                          <option value="Perempuan">Perempuan</option>
                        </select>
                      </div>

                      <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label fw-bold" for="alamat">Alamat</label>
                        <input type="text" id="alamat" name="alamat" class="form-control form-control-lg @error('alamat')is-invalid @enderror" placeholder="Ketik Alamat anda..." required value="{{ old('alamat', $pelamar->alamat) }}"/>
                        @error('alamat')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label fw-bold" for="agama">Agama</label>
                        <select class="form-select" aria-label="Default select example" id="agama" name="agama">
                          <option selected>{{ $pelamar->agama }}</option>
                          <option value="Islam">Islam</option>
                          <option value="Kristen">Kristen</option>
                          <option value="Khatolik">Khatolik</option>
                          <option value="Budha">Budha</option>
                          <option value="Hindu">Hindu</option>
                        </select>
                      </div>

                      <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label fw-bold" for="nohp">Nomor Hp</label>
                        <input type="number" id="nohp" name="nohp" class="form-control form-control-lg @error('nohp')is-invalid @enderror" placeholder="Ketik tempat Lahir anda..." required value="{{ old('nohp', $pelamar->nohp) }}"/>
                        @error('nohp')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label for="pasphoto" class="form-label fw-bold">Upload Pas Photo <span class="text-danger fw-bold">Max : 2 MB [JPEG, JPG, PNG]</span></label>
                        <input type="hidden" name="oldpasphoto" value="{{ $pelamar->pasphoto }}">
                        <input class="form-control @error('pasphoto')is-invalid @enderror" type="file" id="pasphoto" name="pasphoto" required>
                        @error('pasphoto')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label for="cv" class="form-label fw-bold">Upload CV <span class="text-danger fw-bold">Max : 5 MB || [PDF]</span></label>
                        <input type="hidden" name="oldcv" value="{{ $pelamar->cv }}">
                        <input class="form-control @error('cv')is-invalid @enderror" type="file" id="cv" name="cv" required>
                        @error('cv')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label for="ijazah" class="form-label fw-bold">Upload Ijazah <span class="text-danger fw-bold">Max : 3 MB || [PDF]</span></label>
                        <input type="hidden" name="oldijazah" value="{{ $pelamar->ijazah }}">
                        <input class="form-control @error('ijazah')is-invalid @enderror" type="file" id="ijazah" name="ijazah" required>
                        @error('ijazah')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label for="transkripnilai" class="form-label fw-bold">Upload Trasnkrip Nilai <span class="text-danger fw-bold">Max : 3 MB || [PDF]</span></label>
                        <input type="hidden" name="oldtranskripnilai" value="{{ $pelamar->transkripnilai }}">
                        <input class="form-control @error('transkripnilai')is-invalid @enderror" type="file" id="transkripnilai" name="transkripnilai" required>
                        @error('transkripnilai')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label for="ktp" class="form-label fw-bold">Upload KTP <span class="text-danger fw-bold">Max : 3 MB || [JPEG, JPG, PNG]</span></label>
                        <input type="hidden" name="oldktp" value="{{ $pelamar->ktp }}">
                        <input class="form-control @error('ktp')is-invalid @enderror" type="file" id="ktp" name="ktp" required>
                        @error('ktp')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label for="kk" class="form-label fw-bold">Upload Kartu Keluarga <span class="text-danger fw-bold">Max : 3 MB || [PDF]</span></label>
                        <input type="hidden" name="oldkk" value="{{ $pelamar->kk }}">
                        <input class="form-control @error('kk')is-invalid @enderror" type="file" id="kk" name="kk" required>
                        @error('kk')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label for="skck" class="form-label fw-bold">Upload SKCK <span class="text-danger fw-bold">Max : 3 MB || [PDF]</span></label>
                        <input type="hidden" name="oldskck" value="{{ $pelamar->skck }}">
                        <input class="form-control @error('skck')is-invalid @enderror" type="file" id="skck" name="skck" required>
                        @error('skck')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="text-center text-lg-start mt-4 pt-2">
                        <button  type="submit" name="daftar" data-mdb-button-init data-mdb-ripple-init class="btn btn-danger btn-lg w-100" style="padding-left: 1.5rem; padding-right: 1.5rem;">Ubah Data</button>
                      </div>
                </form>
            </div>
        </div>
    </div>
</section>
</x-layoutdashboardahm>
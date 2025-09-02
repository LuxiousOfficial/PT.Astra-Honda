<title>PT. Astra Honda Motor || Penerimaan Calon Karyawan</title>
<link rel="stylesheet" href="/css/karyawan.css">

<x-layout>
  @if (session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
    <section class="container">
        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-md-12 col-12">
                    <form method="post" action="/astra/pelamar" enctype="multipart/form-data">
                      @csrf
                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label fw-bold" for="jabatan_id">Jabatan</label>
                            <select class="form-select" aria-label="Default select example" id="jabatan_id" name="jabatan_id">
                              @foreach ($karirs as $karir)
                              <option value="{{ $karir->id }}">{{ $karir->jabatan }}</option>
                              @endforeach
                            </select>
                          </div>

                          <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label fw-bold" for="email">Email</label>
                            <input type="email" id="email" name="email" class="form-control form-control-lg @error('email')is-invalid @enderror" placeholder="Ketik alamat email anda..." required value="{{ old('email') }}"/>
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>

                          <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label fw-bold" for="nik">Nik</label>
                            <input type="number" id="nik" name="nik" class="form-control form-control-lg @error('nik')is-invalid @enderror" placeholder="Ketik nik anda..." required value="{{ old('nik') }}"/>
                            @error('nik')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>

                          <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label fw-bold" for="namalengkap">Nama Lengkap</label>
                            <input type="text" id="namalengkap" name="namalengkap" class="form-control form-control-lg @error('namalengkap')is-invalid @enderror" placeholder="Ketik nama lengkap anda..." required value="{{ old('namalengkap') }}"/>
                            @error('namalengkap')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>

                          <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label fw-bold" for="tanggallahir">Tanggal Lahir</label>
                            <input type="date" id="tanggallahir" name="tanggallahir" class="form-control form-control-lg w-50 @error('tanggallahir')is-invalid @enderror" placeholder="Ketik tanggal lahir anda..." required value="{{ old('tanggallahir') }}"/>
                            @error('tanggallahir')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>

                          <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label fw-bold" for="tempatlahir">Tempat Lahir</label>
                            <input type="text" id="tempatlahir" name="tempatlahir" class="form-control form-control-lg @error('tempatlahir')is-invalid @enderror" placeholder="Ketik tempat Lahir anda..." required value="{{ old('tempatlahir') }}"/>
                            @error('tempatlahir')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>

                          <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label fw-bold" for="jeniskelamin">Jenis Kelamin</label>
                            <select class="form-select" aria-label="Default select example" id="jeniskelamin" name="jeniskelamin">
                              <option selected>Silahkan Pilih</option>
                              <option value="Laki-laki">Laki-laki</option>
                              <option value="Perempuan">Perempuan</option>
                            </select>
                          </div>

                          <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label fw-bold" for="alamat">Alamat</label>
                            <input type="text" id="alamat" name="alamat" class="form-control form-control-lg @error('alamat')is-invalid @enderror" placeholder="Ketik Alamat anda..." required value="{{ old('alamat') }}"/>
                            @error('alamat')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>

                          <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label fw-bold" for="agama">Agama</label>
                            <select class="form-select" aria-label="Default select example" id="agama" name="agama">
                              <option selected>Silahkan Pilih</option>
                              <option value="Islam">Islam</option>
                              <option value="Kristen">Kristen</option>
                              <option value="Khatolik">Khatolik</option>
                              <option value="Budha">Budha</option>
                              <option value="Hindu">Hindu</option>
                            </select>
                          </div>

                          <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label fw-bold" for="nohp">Nomor Hp</label>
                            <input type="number" min="0" id="nohp" name="nohp" class="form-control form-control-lg @error('nohp')is-invalid @enderror" placeholder="Ketik tempat Lahir anda..." required value="{{ old('nohp') }}"/>
                            @error('nohp')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>

                          <div class="mb-3">
                            <label for="pasphoto" class="form-label fw-bold">Upload Pas Photo <span class="text-danger fw-bold">Max : 2 MB [JPEG, JPG, PNG]</span></label>
                            <input class="form-control @error('pasphoto')is-invalid @enderror" type="file" id="pasphoto" name="pasphoto" required>
                            @error('pasphoto')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>

                          <div class="mb-3">
                            <label for="cv" class="form-label fw-bold">Upload CV <span class="text-danger fw-bold">Max : 5 MB || [PDF]</span></label>
                            <input class="form-control @error('cv')is-invalid @enderror" type="file" id="cv" name="cv" required>
                            @error('cv')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>

                          <div class="mb-3">
                            <label for="ijazah" class="form-label fw-bold">Upload Ijazah <span class="text-danger fw-bold">Max : 3 MB || [PDF]</span></label>
                            <input class="form-control @error('ijazah')is-invalid @enderror" type="file" id="ijazah" name="ijazah" required>
                            @error('ijazah')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>

                          <div class="mb-3">
                            <label for="transkripnilai" class="form-label fw-bold">Upload Trasnkrip Nilai <span class="text-danger fw-bold">Max : 3 MB || [PDF]</span></label>
                            <input class="form-control @error('transkripnilai')is-invalid @enderror" type="file" id="transkripnilai" name="transkripnilai" required>
                            @error('transkripnilai')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>

                          <div class="mb-3">
                            <label for="ktp" class="form-label fw-bold">Upload KTP <span class="text-danger fw-bold">Max : 3 MB || [JPEG, JPG, PNG]</span></label>
                            <input class="form-control @error('ktp')is-invalid @enderror" type="file" id="ktp" name="ktp" required>
                            @error('ktp')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>

                          <div class="mb-3">
                            <label for="kk" class="form-label fw-bold">Upload Kartu Keluarga <span class="text-danger fw-bold">Max : 3 MB || [PDF]</span></label>
                            <input class="form-control @error('kk')is-invalid @enderror" type="file" id="kk" name="kk" required>
                            @error('kk')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>

                          <div class="mb-3">
                            <label for="skck" class="form-label fw-bold">Upload SKCK <span class="text-danger fw-bold">Max : 3 MB || [PDF]</span></label>
                            <input class="form-control @error('skck')is-invalid @enderror" type="file" id="skck" name="skck" required>
                            @error('skck')
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
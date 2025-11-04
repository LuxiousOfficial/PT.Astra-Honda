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
                    <form method="post" action="/user/education">
                      @csrf
                        <div data-mdb-input-init class="form-outline mb-4">
                          <label class="form-label fw-bold" for="university">Universitas</label>
                          <input type="text" id="university" name="university" autofocus="true" class="form-control form-control-lg @error('university')is-invalid @enderror" placeholder="Ketik universitas anda..." required value="{{ old('university') }}"/>
                          @error('university')
                          <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>

                          <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label fw-bold" for="faculty">Fakultas</label>
                            <input type="text" id="faculty" name="faculty" class="form-control form-control-lg @error('faculty')is-invalid @enderror" placeholder="Ketik fakultas anda..." required value="{{ old('faculty') }}"/>
                            @error('faculty')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>

                          <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label fw-bold" for="institution">Institusi</label>
                            <select class="form-select" aria-label="Default select example" id="institution" name="institution">
                              <option selected>Silahkan Pilih</option>
                              <option value="Negeri">Negeri</option>
                              <option value="Swasta">Swasta</option>
                              <option value="Luar Negeri">Luar Negeri</option>
                            </select>
                          </div>

                          <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label fw-bold" for="major">Jurusan</label>
                            <select class="form-select" aria-label="Default select example" id="major" name="major">
                              <option selected>Silahkan Pilih</option>
                              <option value="Administrasi Bisnis">Administrasi Bisnis</option>
                              <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                              <option value="Ekonomi">Ekonomi</option>
                              <option value="Fisika">Fisika</option>
                              <option value="Farmasi">Farmasi</option>
                              <option value="Geologi">Geologi</option>
                              <option value="Ilmu Komputer">Ilmu Komputer</option>
                              <option value="Ilmu Hukum">Ilmu Hukum</option>
                              <option value="Matematika">Matematika</option>
                              <option value="Manajemen">Manajemen</option>
                              <option value="Psikologi">Psikologi</option>
                              <option value="Sistem Informasi">Sistem Informasi</option>
                              <option value="Sastra Inggris">Sastra Inggris</option>
                              <option value="Teknik Informatika">Teknik Informatika</option>
                              <option value="Teknik Elektro">Teknik Elektro</option>
                              <option value="Teknik Sipil">Teknik Sipil</option>
                              <option value="Teknik Sipil">Teknik Mesin</option>
                            </select>
                          </div>

                          <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label fw-bold" for="entry_year">Tahun Masuk</label>
                            <input type="date" id="entry_year" name="entry_year" class="form-control form-control-lg w-50 @error('entry_year')is-invalid @enderror" placeholder="Ketik tahun masuk anda..." required value="{{ old('entry_year') }}"/>
                            @error('entry_year')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>

                          <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label fw-bold" for="graduate">Tahun Lulus</label>
                            <input type="date" id="graduate" name="graduate" class="form-control form-control-lg w-50 @error('graduate')is-invalid @enderror" placeholder="Ketik tahun lulus anda..." required value="{{ old('graduate') }}"/>
                            @error('graduate')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>

                          <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label fw-bold" for="ipk">IPK</label>
                            <input type="text" id="ipk" name="ipk" class="form-control form-control-lg @error('ipk')is-invalid @enderror" placeholder="Ketik IPK anda..." required value="{{ old('ipk') }}"/>
                            @error('ipk')
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
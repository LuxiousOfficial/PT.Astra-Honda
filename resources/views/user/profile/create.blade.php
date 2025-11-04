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
                    <form method="post" action="/user/profile">
                      @csrf
                        <div data-mdb-input-init class="form-outline mb-4">
                          <label class="form-label fw-bold" for="name">Nama Lengkap</label>
                          <input type="text" id="name" name="name" autofocus="true" class="form-control form-control-lg @error('name')is-invalid @enderror" placeholder="Ketik nama lengkap anda..." required value="{{ old('name') }}"/>
                          @error('name')
                          <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
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
                            <label class="form-label fw-bold" for="gender">Jenis Kelamin</label>
                            <select class="form-select" aria-label="Default select example" id="gender" name="gender">
                              <option selected>Silahkan Pilih</option>
                              <option value="Laki-laki">Laki-laki</option>
                              <option value="Perempuan">Perempuan</option>
                            </select>
                          </div>

                          <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label fw-bold" for="place_of_birth">Tempat Lahir</label>
                            <input type="text" id="place_of_birth" name="place_of_birth" class="form-control form-control-lg @error('place_of_birth')is-invalid @enderror" placeholder="Ketik tempat Lahir anda..." required value="{{ old('place_of_birth') }}"/>
                            @error('place_of_birth')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>

                          <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label fw-bold" for="date_of_birth">Tanggal Lahir</label>
                            <input type="date" id="date_of_birth" name="date_of_birth" class="form-control form-control-lg w-50 @error('date_of_birth')is-invalid @enderror" placeholder="Ketik tanggal lahir anda..." required value="{{ old('date_of_birth') }}"/>
                            @error('date_of_birth')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>

                          <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label fw-bold" for="address">Alamat</label>
                            <input type="text" id="address" name="address" class="form-control form-control-lg @error('address')is-invalid @enderror" placeholder="Ketik Alamat anda..." required value="{{ old('address') }}"/>
                            @error('address')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>

                          <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label fw-bold" for="phone_number">Nomor Hp</label>
                            <input type="number" id="phone_number" name="phone_number" class="form-control form-control-lg @error('phone_number')is-invalid @enderror" placeholder="Ketik Nomor Handphone anda..." required value="{{ old('phone_number') }}"/>
                            @error('phone_number')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>

                          <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label fw-bold" for="religion">Agama</label>
                            <select class="form-select" aria-label="Default select example" id="religion" name="religion">
                              <option selected>Silahkan Pilih</option>
                              <option value="Islam">Islam</option>
                              <option value="Kristen">Kristen</option>
                              <option value="Khatolik">Khatolik</option>
                              <option value="Budha">Budha</option>
                              <option value="Hindu">Hindu</option>
                            </select>
                          </div>

                          <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label fw-bold" for="status">Status</label>
                            <select class="form-select" aria-label="Default select example" id="status" name="status">
                              <option selected>Silahkan Pilih</option>
                              <option value="Menikah">Menikah</option>
                              <option value="Belum Menikah">Belum Menikah</option>
                            </select>
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
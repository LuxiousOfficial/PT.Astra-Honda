<title>PT. Astra Honda Motor || Boking Service</title>
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
                    <form action="/astra/service" method="post">
                      @csrf
                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label fw-bold" for="nama">Nama Lengkap</label>
                            <input type="text" id="nama" name="nama" class="form-control form-control-lg @error('nama')is-invalid @enderror" placeholder="Ketik nama lengkap anda..." required value="{{ old('nama') }}"/>
                            @error('nama')
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
                          <label class="form-label fw-bold" for="nohp">Nomor Handphone</label>
                          <input type="number" min="0" id="nohp" name="nohp" class="form-control form-control-lg @error('nohp')is-invalid @enderror" placeholder="Ketik nomor handphone anda..." required value="{{ old('nohp') }}"/>
                          @error('nohp')
                          <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                          <label class="form-label fw-bold" for="alamat">Alamat Lengkap</label>
                          <input type="text" id="alamat" name="alamat" class="form-control form-control-lg @error('alamat')is-invalid @enderror" placeholder="Ketik Alamat anda..." required value="{{ old('alamat') }}"/>
                          @error('alamat')
                          <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label fw-bold" for="provinsi">Provinsi</label>
                            <select class="form-select" aria-label="Default select example" id="provinsi" name="provinsi">
                              <option selected>Silahkan Pilih</option>
                              <option value="Aceh">Aceh</option>
                              <option value="Bali">Bali</option>
                              <option value="Banten">Banten</option>
                              <option value="Bengkulu">Bengkulu</option>
                              <option value="Daerah Khusus Ibukota Jakarta">Daerah Khusus Ibukota Jakarta</option>
                              <option value="DIY">DIY</option>
                              <option value="Gorontalo">Gorontalo</option>
                              <option value="Jambi">Jambi</option>
                              <option value="Jawa Barat">Jawa Barat</option>
                              <option value="Jawa Tengah">Jawa Tengah</option>
                              <option value="Jawa Timur">Jawa Timur</option>
                              <option value="Kalimantan Barat">Kalimantan Barat</option>
                              <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                              <option value="Kalimantan Timur">Kalimantan Timur</option>
                              <option value="Kalimantan Utara">Kalimantan Utara</option>
                              <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
                              <option value="Kepulauan Riau">Kepulauan Riau</option>
                              <option value="Lampung">Lampung</option>
                              <option value="Maluku">Maluku</option>
                              <option value="Maluku Utara">Maluku Utara</option>
                              <option value="NTB">NTB</option>
                              <option value="NTT">NTT</option>
                              <option value="Papua">Papua</option>
                              <option value="Papua Barat">Papua Barat</option>
                              <option value="Riau">Riau</option>
                              <option value="Sulawesi Barat">Sulawesi Barat</option>
                              <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                              <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                              <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                              <option value="Sulawesi Utara">Sulawesi Utara</option>
                              <option value="Sumatera Barat">Sumatera Barat</option>
                              <option value="Sumatera Selatan">Sumatera Selatan</option>
                              <option value="Sumatera Utara">Sumatera Utara</option>
                            </select>
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                          <label class="form-label fw-bold" for="kota">Kota</label>
                          <input type="text" id="kota" name="kota" class="form-control form-control-lg @error('kota')is-invalid @enderror" placeholder="Ketik kota anda..." required value="{{ old('kota') }}"/>
                          @error('kota')
                          <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label fw-bold" for="varianmotor">Varian Motor</label>
                            <select class="form-select" aria-label="Default select example" id="varianmotor" name="varianmotor">
                              <option selected>Silahkan Pilih</option>
                              <option value="Adv">Adv</option>
                              <option value="Beat">Beat</option>
                              <option value="Beat Street">Beat Street</option>
                              <option value="CBR 150r">CBR 150r</option>
                              <option value="CBR 250rr">CBR 250rr</option>
                              <option value="Cbx 150">Cbx 150</option>
                              <option value="CRF 150L">CRF 150L</option>
                              <option value="CRF 250L">CRF 250L</option>
                              <option value="CRF 250 Rally">CRF 250 Rally</option>
                              <option value="CT 125">CT 125</option>
                              <option value="CUV">CUV</option>
                              <option value="EM1">EM1</option>
                              <option value="Forza">Forza</option>
                              <option value="Genio">Genio</option>
                              <option value="GTR 150">GTR 150</option>
                              <option value="ICON">ICON</option>
                              <option value="Monkey">Monkey</option>
                              <option value="Pcx 160">Pcx 160</option>
                              <option value="Revo">Revo</option>
                              <option value="Scoopy">Scoopy</option>
                              <option value="Sonic 150">Sonic 150</option>
                              <option value="ST125 Dax">ST125 Dax</option>
                              <option value="Street Fire">Street Fire</option>
                              <option value="Stylo 160">Stylo 160</option>
                              <option value="Supercub 125">Supercub 125</option>
                              <option value="Suprax 125">Suprax 125</option>
                              <option value="Vario 125">Vario 125</option>
                              <option value="Vario 160">Vario 160</option>
                              <option value="Verza">Verza</option>
                            </select>
                          </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                          <label class="form-label fw-bold" for="tahunpembuatan">Tahun Pembuatan</label>
                          <select class="form-select" aria-label="Default select example" id="tahunpembuatan" name="tahunpembuatan">
                          <option selected>Silahkan Pilih</option>
                          <option value="2025">2025</option>
                          <option value="2024">2024</option>
                          <option value="2023">2023</option>
                          <option value="2022">2022</option>
                          <option value="2021">2021</option>
                          <option value="2020">2020</option>
                          <option value="2019">2019</option>
                          <option value="2018">2018</option>
                          <option value="2017">2017</option>
                          <option value="2016">2016</option>
                          <option value="2015">2015</option>
                          <option value="Dibawah 2015">Dibawah 2015</option>
                          </select>
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                          <label class="form-label fw-bold" for="jenisservice">Jenis Service</label>
                          <select class="form-select" aria-label="Default select example" id="jenisservice" name="jenisservice">
                          <option selected>Silahkan Pilih</option>
                          <option value="KPB (Kupon Perawatan Berkala)">KPB (Kupon Perawatan Berkala)</option>
                          <option value="Service Berat">Service Berat</option>
                          <option value="Service Rutin">Service Rutin</option>
                          </select>
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label fw-bold" for="jadwal">Jadwal</label>
                            <input type="date" id="jadwal" name="jadwal" class="form-control form-control-lg w-50 @error('jadwal')is-invalid @enderror" placeholder="Pilih jadwal anda..." required value="{{ old('jadwal') }}"/>
                            @error('jadwal')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                          <label class="form-label fw-bold" for="jam">Jam</label>
                          <select class="form-select" aria-label="Default select example" id="jam" name="jam">
                            <option selected>Silahkan Pilih</option>
                            <option value="08.00 Wib">08.00 Wib</option>
                            <option value="09.00 Wib">09.00 Wib</option>
                            <option value="10.00 Wib">10.00 Wib</option>
                            <option value="11.00 Wib">11.00 Wib</option>
                            <option value="12.00 Wib">12.00 Wib</option>
                            <option value="13.00 Wib">13.00 Wib</option>
                            <option value="14.00 Wib">14.00 Wib</option>
                            <option value="15.00 Wib">15.00 Wib</option>
                            <option value="16.00 Wib">16.00 Wib</option>
                          </select>
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
<x-layout>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-md-12 col-12">
                    <form action="/astra/kredit/{{ $kredit->id }}" method="post">
                        @method('put')
                      @csrf
                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label fw-bold" for="nama">Nama Lengkap</label>
                            <input type="text" id="nama" name="nama" class="form-control form-control-lg @error('nama')is-invalid @enderror" placeholder="Ketik nama lengkap anda..." required value="{{ old('nama', $kredit->nama) }}"/>
                            @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                          <label class="form-label fw-bold" for="email">Email</label>
                          <input type="email" id="email" name="email" class="form-control form-control-lg @error('email')is-invalid @enderror" placeholder="Ketik alamat email anda..." required value="{{ old('email', $kredit->email) }}"/>
                          @error('email')
                          <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                          <label class="form-label fw-bold" for="nohp">Nomor Handphone</label>
                          <input type="text" id="nohp" name="nohp" class="form-control form-control-lg @error('nohp')is-invalid @enderror" placeholder="Ketik tempat Lahir anda..." required value="{{ old('nohp', $kredit->nohp) }}"/>
                          @error('nohp')
                          <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                          <label class="form-label fw-bold" for="alamat">Alamat Lengkap</label>
                          <input type="text" id="alamat" name="alamat" class="form-control form-control-lg @error('alamat')is-invalid @enderror" placeholder="Ketik Alamat anda..." required value="{{ old('alamat', $kredit->alamat) }}"/>
                          @error('alamat')
                          <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label fw-bold" for="provinsi">Provinsi</label>
                            <select class="form-select" aria-label="Default select example" id="provinsi" name="provinsi">
                                <option selected>{{ $kredit->provinsi }}</option>
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
                          <input type="text" id="kota" name="kota" class="form-control form-control-lg @error('kota')is-invalid @enderror" placeholder="Ketik kota anda..." required value="{{ old('kota', $kredit->kota) }}"/>
                          @error('kota')
                          <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                          <label class="form-label fw-bold" for="dp">Down Payment</label>
                          <select class="form-select" aria-label="Default select example" id="dp" name="dp">
                            <option selected>{{ $kredit->dp }}</option>
                            <option value="Rp 1 Juta - Rp 2.5 Juta">Rp 1 Juta - Rp 2.5 Juta</option>
                            <option value="Rp 2.6 Juta - Rp 3.5 Juta">Rp 2.6 Juta - Rp 3.5 Juta</option>
                            <option value="Rp 3.6 Juta - Rp 5 Juta">Rp 3.6uta - Rp 5 Juta</option>
                            <option value="Diatas Rp 5 Juta">Diatas Rp 5 Juta</option>
                          </select>
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                          <label class="form-label fw-bold" for="jumlahtenor">Jumlah Tenor</label>
                          <select class="form-select" aria-label="Default select example" id="jumlahtenor" name="jumlahtenor">
                            <option selected>{{ $kredit->jumlahtenor }}</option>
                            <option value="12 Bulan">12 Bulan</option>
                            <option value="24 Bulan">24 Bulan</option>
                            <option value="36 Bulan">36 Bulan</option>
                            <option value="48 Bulan">48 Bulan</option>
                            <option value="60 Bulan">60 Bulan</option>
                          </select>
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                          <label class="form-label fw-bold" for="kategorimotor">Kategori Motor</label>
                          <select class="form-select" aria-label="Default select example" id="kategorimotor" name="kategorimotor">
                            <option selected>{{ $kredit->kategorimotor }}</option>
                            <option value="Matic">Matic</option>
                            <option value="Sport">Sport</option>
                            <option value="Cub">Cub</option>
                            <option value="EV">EV</option>
                            <option value="Big Bike">Big Bike</option>
                          </select>
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                          <label class="form-label fw-bold" for="varianmotor">Varian Motor</label>
                          <select class="form-select" aria-label="Default select example" id="varianmotor" name="varianmotor">
                            <option selected>{{ $kredit->varianmotor }}</option>
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
                          <label class="form-label fw-bold" for="rencanapembelian">Rencana Pembelian</label>
                          <select class="form-select" aria-label="Default select example" id="rencanapembelian" name="rencanapembelian">
                            <option selected>{{ $kredit->rencanapembelian }}</option>
                            <option value="1-2 Minggu">1-2 Minggu</option>
                            <option value="3-4 Minggu">3-4 Minggu</option>
                            <option value="Diatas 1 Bulan">Diatas 1 Bulan</option>
                          </select>
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                          <label class="form-label fw-bold" for="pesan">Pesan</label>
                          <input type="text" id="pesan" name="pesan" class="form-control form-control-lg @error('pesan')is-invalid @enderror" placeholder="Ketik pesan anda..." required value="{{ old('pesan', $kredit->pesan) }}"/>
                          @error('pesan')
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
</x-layout>
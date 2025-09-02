<x-layoutdashboardahm>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-md-12 col-12">
                    <form action="/dashboardhrdastrahonda/dealer/{{ $dealer->id }}" method="post">
                      @method('put')
                      @csrf
                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label fw-bold" for="id">ID Dealer</label>
                            <input type="text" id="id" name="id" class="form-control form-control-lg @error('id')is-invalid @enderror" placeholder="Ketik id dealer..." required value="{{ old('id', $dealer->id) }}"/>
                            @error('id')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label fw-bold" for="nama">Nama Dealer</label>
                            <input type="text" id="nama" name="nama" class="form-control form-control-lg @error('nama')is-invalid @enderror" placeholder="Ketik nama dealer..." required value="{{ old('nama', $dealer->nama) }}"/>
                            @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                          <label class="form-label fw-bold" for="alamat">Alamat Dealer</label>
                          <input type="text" id="alamat" name="alamat" class="form-control form-control-lg @error('alamat')is-invalid @enderror" placeholder="Ketik alamat dealer..." required value="{{ old('alamat', $dealer->alamat) }}"/>
                          @error('alamat')
                          <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                          <label class="form-label fw-bold" for="telepon">Telepon Dealer</label>
                          <input type="text" id="telepon" name="telepon" class="form-control form-control-lg @error('telepon')is-invalid @enderror" placeholder="Ketik telepon dealer..." required value="{{ old('telepon', $dealer->telepon) }}"/>
                          @error('telepon')
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
<x-layoutdashboardahm>
  <section>
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-md-12 col-12">
                <form method="post" action="/dashboardhrdastrahonda/position/{{ $position->id }}">
                    @method('put')
                    @csrf

                    <div data-mdb-input-init class="form-outline mb-4">
                      <label class="form-label fw-bold" for="karir_id">Posisi Yang di Lamar</label>
                      <select class="form-select" aria-label="Default select example" id="karir_id" name="karir_id">
                        <option selected>{{ old('karir_id', $position->karir->jabatan) }}</option>
                        @foreach ($karirs as $karir)
                        <option value="{{ $karir->id }}">{{ $karir->jabatan }}</option>
                        @endforeach
                      </select>
                    </div>

                      <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label fw-bold" for="salary">Ekspetasi Gaji</label>
                        <input type="number" id="salary" name="salary" autofocus="true" class="form-control form-control-lg @error('salary')is-invalid @enderror" placeholder="Ketik gaji yang anda inginkan dalam bentuk angka..." required value="{{ old('salary', $position->salary) }}"/>
                        @error('salary')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                          <label class="form-label fw-bold" for="join">Waktu untuk bergabung</label>
                          <input type="date" id="join" name="join" class="form-control form-control-lg w-50 @error('join')is-invalid @enderror" placeholder="Ketik tahun masuk anda..." required value="{{ old('join', $position->join) }}"/>
                          @error('join')
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
</x-layoutdashboardahm>
<x-layout-user>
  <section>
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-md-12 col-12">
                <form method="post" action="/user/experience/{{ $experience->id }}">
                    @method('put')
                    @csrf

                    <div data-mdb-input-init class="form-outline mb-4">
                      <label class="form-label fw-bold" for="company">Perusahaan</label>
                      <input type="text" id="company" name="company" autofocus="true" class="form-control form-control-lg @error('company')is-invalid @enderror" placeholder="Ketik nama perusahaan anda..." required value="{{ old('company', $experience->company) }}"/>
                      @error('company')
                      <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                    
                    <div data-mdb-input-init class="form-outline mb-4">
                      <label class="form-label fw-bold" for="position">Posisi</label>
                      <input type="text" id="position" name="position" class="form-control form-control-lg @error('position')is-invalid @enderror" placeholder="Ketik posisi anda..." required value="{{ old('position', $experience->position) }}"/>
                      @error('position')
                      <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>

                    <div data-mdb-input-init class="form-outline mb-4">
                      <label class="form-label fw-bold" for="entry_year">Tahun Masuk</label>
                      <input type="date" id="entry_year" name="entry_year" class="form-control form-control-lg w-50 @error('entry_year')is-invalid @enderror" placeholder="Ketik tahun masuk anda..." required value="{{ old('entry_year', $experience->entry_year) }}"/>
                      @error('entry_year')
                      <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>

                    <div data-mdb-input-init class="form-outline mb-4">
                      <label class="form-label fw-bold" for="year_stopped">Tahun Resain</label>
                      <input type="date" id="year_stopped" name="year_stopped" class="form-control form-control-lg w-50 @error('year_stopped')is-invalid @enderror" placeholder="Ketik tahun resain anda..." required value="{{ old('year_stopped', $experience->year_stopped) }}"/>
                      @error('year_stopped')
                      <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>

                    <div data-mdb-input-init class="form-outline mb-4">
                      <label class="form-label fw-bold" for="salary">Gaji Saat Ini</label>
                      <input type="text" id="salary" name="salary" class="form-control form-control-lg @error('salary')is-invalid @enderror" placeholder="Ketik gaji yang anda terima saat ini..." required value="{{ old('salary', $experience->salary) }}"/>
                      @error('salary')
                      <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>

                    <div data-mdb-input-init class="form-outline mb-4">
                      <label class="form-label fw-bold" for="industry">Industri</label>
                      <select class="form-select" aria-label="Default select example" id="industry" name="industry">
                        <option selected>{{ old('industry', $experience->industry) }}</option>
                        <option value="Administrasi">Administrasi</option>
                        <option value="Automotive">Automotive</option>
                        <option value="Banking">Banking</option>
                        <option value="Chemical">Chemical</option>
                        <option value="Civic Engineering">Civic Engineering</option>
                        <option value="Design">Design</option>
                        <option value="Entertaiment">Entertaiment</option>
                        <option value="Graphic Design">Graphic Design</option>
                        <option value="Hospitality">Hospitality</option>
                        <option value="Information Technology And Services">Information Technology And Services</option>
                        <option value="Logistic">Logistic</option>
                        <option value="Mechanical Engineering">Mechanical Engineering</option>
                        <option value="Oil and Energy">Oil and Energy</option>
                        <option value="Packaging">Packaging</option>
                        <option value="Program Development">Program Development</option>
                        <option value="Retail">Retail</option>
                        <option value="Telecomunication">Telecomunication</option>
                      </select>
                    </div>

                    <div data-mdb-input-init class="form-outline mb-4">
                      <label class="form-label fw-bold" for="facility">Fasilitas</label>
                      <input type="text" id="facility" name="facility" class="form-control form-control-lg @error('facility')is-invalid @enderror" placeholder="Ketik Fasilitas anda..." required value="{{ old('facility', $experience->facility) }}"/>
                      @error('facility')
                      <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="mb-3">
                      <label class="form-label" for="reason_to_stop">Alasan Resain</label>
                      <textarea class="form-control @error('reason_to_stop')is-invalid @enderror" id="reason_to_stop" name="reason_to_stop" rows="3" required value="{{ old('reason_to_stop', $experience->reason_to_stop) }}">{{ old('reason_to_stop', $experience->reason_to_stop) }}</textarea>
                      @error('reason_to_stop')
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
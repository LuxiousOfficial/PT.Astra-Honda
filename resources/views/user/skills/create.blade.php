<title>PT. Astra Honda Motor || Penerimaan Calon Karyawan</title>
<link rel="stylesheet" href="/css/karyawan.css">

<x-layout>
  @if (session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
    <section class="container dashboard-honda">
        <div>
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-md-12 col-12">
                    <form method="post" action="/user/skills">
                      @csrf
                        <div data-mdb-input-init class="form-outline mb-4">
                          <label class="form-label fw-bold" for="first_skill">Skill Pertama</label>
                          <input type="text" id="first_skill" name="first_skill" autofocus="true" class="form-control form-control-lg @error('first_skill')is-invalid @enderror" placeholder="Ketik Skill Pertama anda..." required value="{{ old('first_skill') }}"/>
                          @error('first_skill')
                          <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                          <label class="form-label fw-bold" for="first_rate">Rating Skill Pertama</label>
                          <select class="form-select" aria-label="Default select example" id="first_rate" name="first_rate">
                            <option selected>Silahkan Pilih</option>
                            <option value="Beginner">Beginner</option>
                            <option value="Medium">Medium</option>
                            <option value="Expert">Expert</option>
                          </select>
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                          <label class="form-label fw-bold" for="second_skill">Skill Kedua</label>
                          <input type="text" id="second_skill" name="second_skill" autofocus="true" class="form-control form-control-lg @error('second_skill')is-invalid @enderror" placeholder="Ketik Skill Kedua anda..." required value="{{ old('second_skill') }}"/>
                          @error('second_skill')
                          <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                          <label class="form-label fw-bold" for="second_rate">Rating Skill Kedua</label>
                          <select class="form-select" aria-label="Default select example" id="second_rate" name="second_rate">
                            <option selected>Silahkan Pilih</option>
                            <option value="Beginner">Beginner</option>
                            <option value="Medium">Medium</option>
                            <option value="Expert">Expert</option>
                          </select>
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                          <label class="form-label fw-bold" for="third_skill">Skill Ketiga</label>
                          <input type="text" id="third_skill" name="third_skill" autofocus="true" class="form-control form-control-lg @error('third_skill')is-invalid @enderror" placeholder="Ketik Skill Ketiga anda..." required value="{{ old('third_skill') }}"/>
                          @error('third_skill')
                          <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                          <label class="form-label fw-bold" for="third_rate">Rating Skill Ketiga</label>
                          <select class="form-select" aria-label="Default select example" id="third_rate" name="third_rate">
                            <option selected>Silahkan Pilih</option>
                            <option value="Beginner">Beginner</option>
                            <option value="Medium">Medium</option>
                            <option value="Expert">Expert</option>
                          </select>
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                          <label class="form-label fw-bold" for="fourth_skill">Skill Keempat</label>
                          <input type="text" id="fourth_skill" name="fourth_skill" autofocus="true" class="form-control form-control-lg @error('fourth_skill')is-invalid @enderror" placeholder="Ketik Skill Keempat anda..." required value="{{ old('fourth_skill') }}"/>
                          @error('fourth_skill')
                          <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                          <label class="form-label fw-bold" for="fourth_rate">Rating Skill Keempat</label>
                          <select class="form-select" aria-label="Default select example" id="fourth_rate" name="fourth_rate">
                            <option selected>Silahkan Pilih</option>
                            <option value="Beginner">Beginner</option>
                            <option value="Medium">Medium</option>
                            <option value="Expert">Expert</option>
                          </select>
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                          <label class="form-label fw-bold" for="fifth_skill">Skill Kelima</label>
                          <input type="text" id="fifth_skill" name="fifth_skill" autofocus="true" class="form-control form-control-lg @error('fifth_skill')is-invalid @enderror" placeholder="Ketik Skill Kelima anda..." required value="{{ old('fifth_skill') }}"/>
                          @error('fifth_skill')
                          <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                          <label class="form-label fw-bold" for="fifth_rate">Rating Skill Kelima</label>
                          <select class="form-select" aria-label="Default select example" id="fifth_rate" name="fifth_rate">
                            <option selected>Silahkan Pilih</option>
                            <option value="Beginner">Beginner</option>
                            <option value="Medium">Medium</option>
                            <option value="Expert">Expert</option>
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
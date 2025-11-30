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
                    <form method="post" action="/dashboardhrdastrahonda/position">
                      @csrf

                      <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label fw-bold" for="office">Posisi Yang di Lamar</label>
                        <select class="form-select" aria-label="Default select example" id="office" name="office">
                          @foreach ($karirs as $karir)
                          <option value="{{ $karir->jabatan }}">{{ $karir->jabatan }}</option>
                          @endforeach
                        </select>
                      </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                          <label class="form-label fw-bold" for="salary">Ekspetasi Gaji</label>
                          <input type="number" id="salary" name="salary" autofocus="true" class="form-control form-control-lg @error('salary')is-invalid @enderror" placeholder="Ketik gaji yang anda inginkan dalam bentuk angka..." required value="{{ old('salary') }}"/>
                          @error('salary')
                          <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>

                          <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label fw-bold" for="join">Waktu untuk bergabung</label>
                            <input type="date" id="join" name="join" class="form-control form-control-lg w-50 @error('join')is-invalid @enderror" placeholder="Ketik tahun masuk anda..." required value="{{ old('join') }}"/>
                            @error('join')
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
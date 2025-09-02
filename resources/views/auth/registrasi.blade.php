<link rel="stylesheet" href="css/registrasi.css">
<title>PT. Astra Honda Motor || Registrasi</title>
<x-form>
  <section class="form-registrasi">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="img/logo honda.svg" class="img-fluid" alt="Sample image" style="width: 28rem;">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <form action="/registrasi" method="post">
            @csrf
            <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
              <h2 class="text-capitalize text-danger mb-3 astra">PT. astra honda motor</h2>
            </div>

            <!-- Input Nama -->
            <div data-mdb-input-init class="form-outline mb-3">
              <label class="form-label fw-bold" for="name">Nama</label>
              <input type="text" id="name" name="name" class="form-control form-control-lg @error('name')is-invalid @enderror" placeholder="Ketik nama anda..." required value="{{ old('name') }}" autofocus/>
              @error('name')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <!-- End Input Nama -->
  
            <!-- Email input -->
            <div data-mdb-input-init class="form-outline mb-4">
              <label class="form-label fw-bold" for="email">Email</label>
              <input type="email" id="email" name="email" class="form-control form-control-lg @error('email')is-invalid @enderror" placeholder="Ketik alamat email anda..." required value="{{ old('email') }}"/>
              @error('email')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <!-- End Email input -->
            
            <!-- Password input -->
            <div data-mdb-input-init class="form-outline mb-3">
              <label class="form-label fw-bold" for="password">Password</label>
              <input type="password" id="password" name="password" class="form-control form-control-lg @error('password')is-invalid @enderror" placeholder="Ketik password anda..." required/>
              @error('password')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <!-- End Password input -->
  
            <div class="text-center text-lg-start mt-4 pt-2 fs-5">
              <button  type="submit" name="register" data-mdb-button-init data-mdb-ripple-init class="btn btn-danger btn-lg w-100" style="padding-left: 1.5rem; padding-right: 1.5rem;">Register</button>
              <p class="d-block text-center small fw-bold mt-2 pt-1 mb-0 text-capitalize">sudah punya akun? <a href="/login" class="link-danger">login sekarang</a></p>
            </div>
  
          </form>
        </div>
      </div>
    </div>
    <div
      class="text-center justify-content-center py-2 px-2 px-xl-5 bg-danger">
      <!-- Copyright -->
      <div class="text-white text-capitalize fw-bold fs-6">
       <p> &copy; Copyright 2025 PT. astra honda motor All rights reserved <br> by rommy ardiansyah</p>
      </div>
      <!-- Copyright -->
    </div>
  </section>
</x-form>
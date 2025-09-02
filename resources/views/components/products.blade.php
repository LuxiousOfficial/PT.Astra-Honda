<div class="container">
    <div class="row">
      <h2 class="fs-1 fw-bold text-center text-capitalize mb-5">pilih motor <span class="text-danger">favorite anda</span></h2>
    </div>
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-xxl-5 col-xl-5 col-md-5 col-8">
            <div class="list-group list-group-horizontal text-capitalize text-center fw-bold fs-4" id="list-tab" role="tablist">
              <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">matic</a>
              <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">sport</a>
              <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages">cub</a>
              <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings">EV</a>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="tab-content text-capitalize" id="nav-tabContent">
            {{ $slot }}
        </div>
    </div>
    <div class="row">
      <div class="col text-center mt-5 text-capitalize">
        <a href="/products" class="fs-5 fw-bold text-decoration-none p-3 bg-danger text-light rounded shadow">see more</a>
      </div>
    </div>
  </div>
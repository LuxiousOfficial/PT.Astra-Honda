<div class="row1">
  <div class="list">
    <div class="col-4">
      <div class="list-group list-group-horizontal text-capitalize fw-bold" id="list-tab" role="tablist">
        <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">mesin</a>
        <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">rangka</a>
        <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages">dimensi</a>
        <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings">kapasitas</a>
        <a class="list-group-item list-group-item-action" id="list-kelistrikan-list" data-bs-toggle="list" href="#list-kelistrikan" role="tab" aria-controls="list-kelistrikan">kelistrikan</a>
      </div>
    </div>
    <div class="col-12 mt-3">
      <div class="tab-content text-capitalize bg-light" id="nav-tabContent">
        {{ $slot }}
      </div>
    </div>
  </div>
</div>
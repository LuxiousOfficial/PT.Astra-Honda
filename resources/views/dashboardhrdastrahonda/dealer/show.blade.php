<x-layoutdashboardahm>
    <section class="form-pendaftaran">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12 col-12 mt-5">
                    <div class="title text-capitalize">
                        <h2 class="fs-1 fw-bold mb-4">{{ $dealer['nama'] }}</h2>
                    </div>
                    <div class="table-responsive col-xxl-12 col-xl-12 col-md-12 col-sm-12 col-12 small">
                        <table class="table table-sm text-center fs-5">
                          <thead class="fs-4">
                            <tr class="table table-info">
                              <th scope="col">Info</th>
                              <th scope="col">Keterangan</th>
                            </tr>
                          </thead>
                          <tbody>
                          <tr>
                            <td>Id Dealer</td>
                            <td>{{ $dealer->id }}</td>
                          </tr>
                          <tr>
                            <td>Alamat Dealer</td>
                            <td>{{ $dealer->alamat }}</td>
                          </tr>
                          <tr>
                            <td>Nomor Telepon Dealer</td>
                            <td>{{ $dealer->telepon }}</td>
                          </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="daftar text-center text-capitalize mt-5">
                      <a href="/dashboardhrdastrahonda/dealer" class="fs-5 fw-bold text-decoration-none py-3 px-3 bg-danger text-light rounded">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layoutdashboardahm>
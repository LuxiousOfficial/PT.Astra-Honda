<x-layoutdashboardahm>
    <section class="form-pendaftaran">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12 col-12 mt-5">
                    <div class="title text-capitalize">
                        <h2 class="fs-1 fw-bold mb-4">{{ $user['nama'] }}</h2>
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
                            <td>Email</td>
                            <td>{{ $user->email }}</td>
                          </tr>
                          <tr>
                            <td>Password</td>
                            <td>{{ $user->password }}</td>
                          </tr>
                          <tr>
                            <td>Admin</td>
                            <td>{{ $user->is_admin }}</td>
                          </tr>
                          <tr>
                            <td>Developer</td>
                            <td>{{ $user->is_developer }}</td>
                          </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="daftar text-center text-capitalize mt-5">
                      <a href="/dashboardhrdastrahonda/user" class="fs-5 fw-bold text-decoration-none py-3 px-3 bg-danger text-light rounded">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layoutdashboardahm>
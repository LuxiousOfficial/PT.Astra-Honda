<x-layout-user>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="fs-3 fw-bold text-danger text-capitalize">Data Experience</h1>
    </div>
      <section class="form-pendaftaran bg-white rounded-3 p-4">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12 col-12">
                  <div class="title text-capitalize">
                      <h2 class="fs-1 fw-bold mb-4">{{ $experience->position }}</h2>
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
                            <td>Company</td>
                            <td>{{ $experience->company }}</td>
                          </tr>
                          <tr>
                            <td>Entry Year</td>
                            <td>{{ $experience->entry_year }}</td>
                          </tr>
                          <tr>
                            <td>Year Stopped</td>
                            <td>{{ $experience->year_stopped }}</td>
                          </tr>
                          <tr>
                            <td>Salary</td>
                            <td>Rp {{ $experience->salary }}</td>
                          </tr>
                          <tr>
                            <td>Industry</td>
                            <td>{{ $experience->industry }}</td>
                          </tr>
                          <tr>
                            <td>Facility</td>
                            <td>{{ $experience->facility }}</td>
                          </tr>
                          <tr>
                            <td>Reason To Stop</td>
                            <td>{{ $experience->reason_to_stop }}</td>
                          </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="daftar text-center text-capitalize mt-5">
                      <a href="/user/experience" class="fs-5 fw-bold text-decoration-none py-3 px-3 bg-danger text-light rounded">Back</a>
                    </div>
                </div>
            </div>
        </div>
      </section>
</x-layout-user>
<x-layoutdashboardahm>
    <section class="form-pendaftaran bg-white rounded-3 p-4 mt-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12 col-12">
                    <div class="title text-capitalize">
                        <h2 class="fs-1 fw-bold mb-4">{{ $karir->jabatan }}</h2>
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
                            <td style="color: black"><span class="fw-bold">Jabatan</span></td>
                            <td style="color: black">{{ $karir->jabatan }}</td>
                          </tr>
                          <tr>
                            <td style="color: black"><span class="fw-bold">Jenis Kelamin</span></td>
                            <td style="color: black">{{ $karir->jeniskelamin }}</td>
                          </tr>
                          <tr>
                            <td style="color: black"><span class="fw-bold">Pendidikan</span></td>
                            <td style="color: black">{{ $karir->pendidikan }}</td>
                          </tr>
                          <tr>
                            <td style="color: black"><span class="fw-bold">Pengalaman</span></td>
                            <td style="color: black">{{ $karir->pengalaman }}</td>
                          </tr>
                          <tr>
                            <td style="color: black"><span class="fw-bold">Keahlian</span></td>
                            <td style="color: black">{{ $karir->keahlian }}</td>
                          </tr>
                          <tr>
                            <td style="color: black"><span class="fw-bold">Kerjasama</span></td>
                            <td style="color: black">{{ $karir->kerjasama }}</td>
                          </tr>
                          <tr>
                            <td style="color: black"><span class="fw-bold">Vaksin</span></td>
                            <td style="color: black">{{ $karir->vaksin }}</td>
                          </tr>
                          <tr>
                            <td style="color: black"><span class="fw-bold">Lokasi</span></td>
                            <td style="color: black">{{ $karir->lokasi }}</td>
                          </tr>
                          <tr>
                            <td style="color: black"><span class="fw-bold">Link</span></td>
                            <td style="color: black">{{ $karir->link }}</td>
                          </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="daftar text-center text-capitalize mt-5">
                      <a href="/dashboardhrdastrahonda/karir" class="fs-5 fw-bold text-decoration-none py-3 px-3 bg-danger text-light rounded">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layoutdashboardahm>
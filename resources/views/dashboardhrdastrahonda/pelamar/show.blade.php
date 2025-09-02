<x-layoutdashboardahm>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="fs-3 fw-bold text-danger text-capitalize">Biodata Karyawan</h1>
    </div>
      <section class="form-pendaftaran">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12 col-12">
                  <div class="title text-capitalize">
                      <h2 class="fs-1 fw-bold mb-4">{{ $pelamar->namalengkap }}</h2>
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
                            <td>Jabatan</td>
                            <td>{{ $pelamar->jabatan->jabatan }}</td>
                          </tr>
                          <tr>
                            <td>Email</td>
                            <td>{{ $pelamar->email }}</td>
                          </tr>
                          <tr>
                            <td>Nik</td>
                            <td>{{ $pelamar->nik }}</td>
                          </tr>
                          <tr>
                            <td>Tanggal Lahir</td>
                            <td>{{ $pelamar->tanggallahir }}</td>
                          </tr>
                          <tr>
                            <td>Tempat Lahir</td>
                            <td>{{ $pelamar->tempatlahir }}</td>
                          </tr>
                          <tr>
                            <td>Jenis Kelamin</td>
                            <td>{{ $pelamar->jeniskelamin }}</td>
                          </tr>
                          <tr>
                            <td>Alamat</td>
                            <td>{{ $pelamar->alamat }}</td>
                          </tr>
                          <tr>
                            <td>Agama</td>
                            <td>{{ $pelamar->agama }}</td>
                          </tr>
                          <tr>
                            <td>No Hp</td>
                            <td>{{ $pelamar->nohp }}</td>
                          </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="daftar text-center text-capitalize mt-5">
                      <a href="/dashboardhrdastrahonda/pelamar" class="fs-5 fw-bold text-decoration-none py-3 px-3 bg-danger text-light rounded">Back</a>
                    </div>
                </div>
            </div>
        </div>
      </section>
</x-layoutdashboardahm>
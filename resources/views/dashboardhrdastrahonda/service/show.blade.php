<x-layoutdashboardahm>
    <section class="form-pendaftaran bg-white rounded-3 p-4 mt-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12 col-12">
                    <div class="title text-capitalize">
                        <h2 class="fs-1 fw-bold mb-4">{{ $service['nama'] }}</h2>
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
                            <td style="color: black"><span class="fw-bold">Email</span></td>
                            <td style="color: black">{{ $service->email }}</td>
                          </tr>
                          <tr>
                            <td style="color: black"><span class="fw-bold">No HP</span></td>
                            <td style="color: black">{{ $service->nohp }}</td>
                          </tr>
                          <tr>
                            <td style="color: black"><span class="fw-bold">Alamat</span></td>
                            <td style="color: black">{{ $service->alamat }}</td>
                          </tr>
                          <tr>
                            <td style="color: black"><span class="fw-bold">Provinsi</span></td>
                            <td style="color: black">{{ $service->provinsi }}</td>
                          </tr>
                          <tr>
                            <td style="color: black"><span class="fw-bold">Kota</span></td>
                            <td style="color: black">{{ $service->kota }}</td>
                          </tr>
                          <tr>
                            <td style="color: black"><span class="fw-bold">Down Payment</span></td>
                            <td style="color: black">{{ $service->kategorimotor }}</td>
                          </tr>
                          <tr>
                            <td style="color: black"><span class="fw-bold">Jumlah Tenor</span></td>
                            <td style="color: black">{{ $service->varianmotor }}</td>
                          </tr>
                          <tr>
                            <td style="color: black"><span class="fw-bold">Kategori Motor</span></td>
                            <td style="color: black">{{ $service->tahunpembuatan }}</td>
                          </tr>
                          <tr>
                            <td style="color: black"><span class="fw-bold">Varian Motor</span></td>
                            <td style="color: black">{{ $service->jenisservice }}</td>
                          </tr>
                          <tr>
                            <td style="color: black"><span class="fw-bold">Rencana Pembelian</span></td>
                            <td style="color: black">{{ $service->jadwal }}</td>
                          </tr>
                          <tr>
                            <td style="color: black"><span class="fw-bold">Pesan</span></td>
                            <td style="color: black">{{ $service->jam }}</td>
                          </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="daftar text-center text-capitalize mt-5">
                      <a href="/dashboardhrdastrahonda/service" class="fs-5 fw-bold text-decoration-none py-3 px-3 bg-danger text-light rounded">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layoutdashboardahm>
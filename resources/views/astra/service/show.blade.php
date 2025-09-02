<x-layout>
    <section class="form-pendaftaran">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12 col-12 mt-5">
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
                            <td>Email</td>
                            <td>{{ $service->email }}</td>
                          </tr>
                          <tr>
                            <td>No HP</td>
                            <td>{{ $service->nohp }}</td>
                          </tr>
                          <tr>
                            <td>Alamat</td>
                            <td>{{ $service->alamat }}</td>
                          </tr>
                          <tr>
                            <td>Provinsi</td>
                            <td>{{ $service->provinsi }}</td>
                          </tr>
                          <tr>
                            <td>Kota</td>
                            <td>{{ $service->kota }}</td>
                          </tr>
                          <tr>
                            <td>Down Payment</td>
                            <td>{{ $service->kategorimotor }}</td>
                          </tr>
                          <tr>
                            <td>Jumlah Tenor</td>
                            <td>{{ $service->varianmotor }}</td>
                          </tr>
                          <tr>
                            <td>Kategori Motor</td>
                            <td>{{ $service->tahunpembuatan }}</td>
                          </tr>
                          <tr>
                            <td>Varian Motor</td>
                            <td>{{ $service->jenisservice }}</td>
                          </tr>
                          <tr>
                            <td>Rencana Pembelian</td>
                            <td>{{ $service->jadwal }}</td>
                          </tr>
                          <tr>
                            <td>Pesan</td>
                            <td>{{ $service->jam }}</td>
                          </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="daftar text-center text-capitalize mt-5">
                      <a href="/astra/service" class="fs-5 fw-bold text-decoration-none py-3 px-3 bg-danger text-light rounded">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
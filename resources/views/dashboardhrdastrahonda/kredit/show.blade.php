<x-layoutdashboardahm>
    <section class="form-pendaftaran">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12 col-12 mt-5">
                    <div class="title text-capitalize">
                        <h2 class="fs-1 fw-bold mb-4">{{ $kredit->nama }}</h2>
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
                            <td>{{ $kredit->email }}</td>
                          </tr>
                          <tr>
                            <td>No HP</td>
                            <td>{{ $kredit->nohp }}</td>
                          </tr>
                          <tr>
                            <td>Alamat</td>
                            <td>{{ $kredit->alamat }}</td>
                          </tr>
                          <tr>
                            <td>Provinsi</td>
                            <td>{{ $kredit->provinsi }}</td>
                          </tr>
                          <tr>
                            <td>Kota</td>
                            <td>{{ $kredit->kota }}</td>
                          </tr>
                          <tr>
                            <td>Down Payment</td>
                            <td>{{ $kredit->dp }}</td>
                          </tr>
                          <tr>
                            <td>Jumlah Tenor</td>
                            <td>{{ $kredit->jumlahtenor }}</td>
                          </tr>
                          <tr>
                            <td>Kategori Motor</td>
                            <td>{{ $kredit->kategorimotor }}</td>
                          </tr>
                          <tr>
                            <td>Varian Motor</td>
                            <td>{{ $kredit->varianmotor }}</td>
                          </tr>
                          <tr>
                            <td>Rencana Pembelian</td>
                            <td>{{ $kredit->rencanapembelian }}</td>
                          </tr>
                          <tr>
                            <td>Pesan</td>
                            <td>{{ $kredit->pesan }}</td>
                          </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="daftar text-center text-capitalize mt-5">
                      <a href="/dashboardhrdastrahonda/kredit" class="fs-5 fw-bold text-decoration-none py-3 px-3 bg-danger text-light rounded">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layoutdashboardahm>
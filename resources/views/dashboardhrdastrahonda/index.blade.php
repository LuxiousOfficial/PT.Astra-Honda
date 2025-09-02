<x-layoutdashboardahm>
    <section>
        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-xxl-4 col-xl-4 col-md-4 col-sm-6 col-6 my-2">
                    <div class="card sport shadow" style="background-color: rgb(67, 241, 67); height: 7rem">
                        <div class="card-body text-center" style="color: white">
                          <h4 class="card-title fs-4">Creadits</h4>
                          <h4 class="card-title fs-4">{{ $creadits }}</h4>
                        </div>
                      </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-md-4 col-sm-6 col-6 my-2">
                    <div class="card sport shadow" style="background-color: rgb(250, 83, 83); height: 7rem">
                        <div class="card-body text-center" style="color: white">
                          <h4 class="card-title fs-4">Services</h4>
                          <h4 class="card-title fs-4">{{ $services }}</h4>
                        </div>
                      </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-md-4 col-sm-6 col-6 my-2">
                    <div class="card sport shadow" style="background-color: orange; height: 7rem">
                        <div class="card-body text-center" style="color: white">
                          <h4 class="card-title fs-4">Dealer</h4>
                          <h4 class="card-title fs-4">{{ $dealers }}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-md-4 col-sm-6 col-6 my-2">
                  <div class="card sport shadow" style="background-color: rgb(27, 204, 204); height: 7rem">
                      <div class="card-body text-center" style="color: white">
                        <h4 class="card-title fs-4">Careers</h4>
                        <h4 class="card-title fs-4">{{ $careers }}</h4>
                      </div>
                  </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-md-4 col-sm-6 col-6 my-2">
                  <div class="card sport shadow" style="background-color: rgb(252, 99, 252); height: 7rem">
                      <div class="card-body text-center" style="color: white">
                        <h4 class="card-title fs-4">Candidates</h4>
                        <h4 class="card-title fs-4">{{ $candidates }}</h4>
                      </div>
                  </div>
                </div>
                @can('developer')
                <div class="col-xxl-4 col-xl-4 col-md-4 col-sm-6 col-6 my-2">
                    <div class="card sport shadow" style="background-color: rgb(219, 119, 48); height: 7rem">
                        <div class="card-body text-center" style="color: white">
                          <h4 class="card-title fs-4">Users</h4>
                          <h4 class="card-title fs-4">{{ $users }}</h4>
                        </div>
                    </div>
                </div>
                @endcan
            </div>
        </div>
    </section>

    <section class="bg-white rounded-3 p-4 mt-3">
        <div class="table-responsive col-xxl-12 col-xl-12 col-md-12 col-12 small">
          <table class="table table-sm">
            <thead>
              <tr class="table table-danger text-center text-black fw-bold">
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">No HP</th>
                <th scope="col">Alamat</th>
                <th scope="col">Provinsi</th>
                <th scope="col">Kota</th>
                <th scope="col">DP</th>
                <th scope="col">Jumlah Tenor</th>
                <th scope="col">Varian Motor</th>
                <th scope="col">Rencana Pembelian</th>
                <th scope="col">Pesan</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($kredits as $kredit)
            <tr class="text-center text-black-100 fw-bold">
              <td>{{ $loop->iteration }}</td>
              <td>{{ $kredit->nama }}</td>
              <td>{{ $kredit->email }}</td>
              <td>{{ $kredit->nohp }}</td>
              <td>{{ $kredit->alamat }}</td>
              <td>{{ $kredit->provinsi }}</td>
              <td>{{ $kredit->kota }}</td>
              <td>{{ $kredit->dp }}</td>
              <td>{{ $kredit->jumlahtenor }}</td>
              <td>{{ $kredit->varianmotor }}</td>
              <td>{{ $kredit->rencanapembelian }}</td>
              <td>{{ $kredit->pesan }}</td>
            </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </section>
</x-layoutdashboardahm>
<x-layoutdashboardahm>
    @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
     @endif
     @if (session()->has('update'))
      <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        {{ session('update') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
     @endif
     <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="fs-3 fw-bold text-danger text-capitalize">Data Booking Service</h1>
    </div>

    <section class="bg-white rounded-3 p-4">
        <div class="row">
          <div class="col-md-8 col-12">
            <a href="/dashboardhrdastrahonda/service/create" class="btn btn-danger mb-3 fw-bold">Tambah Customer</a>
          </div>
        </div>

        <div class="row">
          <div class="col-xxl-8 col-xl-8 col-md-8 col-12">
            <form class="d-flex my-3" role="search">
              <input style="height: 3rem" class="form-control bg-gray-100" type="search" id="search" name="search" placeholder="Cari Data Customer" aria-label="Search" autocomplete="off">
              <button style="height: 3rem" class="btn btn-outline-success bg-danger fw-bold text-white border-0 fs-5" type="submit">Search</button>
            </form>
          </div>
        </div>
    
        <div class="table-responsive col-xxl-12 col-xl-12 col-md-12 col-12 small">
          <table class="table table-sm">
            <thead>
              <tr class="table table-danger text-center text-black fw-bold">
                <th scope="col">No</th>
                <th scope="col">Action</th>
                <th scope="col">Terdaftar</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">No HP</th>
                <th scope="col">Alamat</th>
                <th scope="col">Provinsi</th>
                <th scope="col">Kota</th>
                <th scope="col">Varian Motor</th>
                <th scope="col">Tahun Pembuatan</th>
                <th scope="col">Jenis Service</th>
                <th scope="col">Jadwal</th>
                <th scope="col">Jam</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($services as $service)
            <tr class="text-center text-black fw-bold">
              <td>{{ $loop->iteration }}</td>
              <td class="d-flex">
                <a href="/dashboardhrdastrahonda/service/{{ $service->id }}" class="btn bg-info px-3 fw-bold border-0 text-white">Details</a>
                <a href="/dashboardhrdastrahonda/service/{{ $service->id }}/edit" class="btn bg-warning px-3 fw-bold border-0 mx-2 text-white">Edit</a>
                <form action="/dashboardhrdastrahonda/service/{{ $service->id }}" method="post">
                  @method('delete')
                  @csrf
                  <button class="btn bg-danger px-3 fw-bold border-0 text-white" onclick="return confirm('Apa kamu yakin mau menghapus data ini?')">Delete</button>
                </form>
              </td>
              <td style="color: black;">{{$service->created_at->format("j-m-Y H:i:s")}}</td>
              <td style="color: black;">{{ $service->nama }}</td>
              <td style="color: black;">{{ $service->email }}</td>
              <td style="color: black;">{{ $service->nohp }}</td>
              <td style="color: black;">{{ $service->alamat }}</td>
              <td style="color: black;">{{ $service->provinsi }}</td>
              <td style="color: black;">{{ $service->kota }}</td>
              <td style="color: black;">{{ $service->varianmotor }}</td>
              <td style="color: black;">{{ $service->tahunpembuatan }}</td>
              <td style="color: black;">{{ $service->jenisservice }}</td>
              <td style="color: black;">{{ $service->jadwal }}</td>
              <td style="color: black;">{{ $service->jam }}</td>
            </tr>
            @endforeach
            </tbody>
          </table>
        </div>
        {{ $services->links() }}
    </section>
  </div>
</x-layoutdashboardahm>
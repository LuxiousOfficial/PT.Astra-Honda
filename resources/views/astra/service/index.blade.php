<x-layout>
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
    <a href="/astra/service/create" class="btn btn-danger mb-3 fw-bold">Tambah Customer</a>

    <div class="table-responsive col-xxl-12 col-xl-12 col-md-12 col-12 small">
      <table class="table table-sm">
        <thead>
          <tr class="table table-danger">
            <th scope="col">No</th>
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
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($services as $service)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $service->nama }}</td>
          <td>{{ $service->email }}</td>
          <td>{{ $service->nohp }}</td>
          <td>{{ $service->alamat }}</td>
          <td>{{ $service->provinsi }}</td>
          <td>{{ $service->kota }}</td>
          <td>{{ $service->varianmotor }}</td>
          <td>{{ $service->tahunpembuatan }}</td>
          <td>{{ $service->jenisservice }}</td>
          <td>{{ $service->jadwal }}</td>
          <td>{{ $service->jam }}</td>
          <td class="d-flex">
            <a href="/astra/service/{{ $service->id }}" class="btn bg-info px-3 fw-bold border-0">Details</a>
            <a href="/astra/service/{{ $service->id }}/edit" class="btn bg-warning px-3 fw-bold border-0 mx-2">Edit</a>
            <form action="/astra/service/{{ $service->id }}" method="post">
              @method('delete')
              @csrf
              <button class="btn bg-danger px-3 fw-bold border-0" onclick="return confirm('Apa kamu yakin mau menghapus data ini?')">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
        </tbody>
      </table>
    </div>
  </div>
</x-layout>
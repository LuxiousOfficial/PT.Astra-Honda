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
    <h1 class="fs-3 fw-bold text-danger text-capitalize">Data Calon Karyawan</h1>
  </div>
    <a href="/astra/pelamar/create" class="btn btn-danger mb-3 fw-bold">Tambah Karyawan</a>
    <div class="table-responsive col-xxl-12 col-xl-12 col-md-12 col-12 small">
        <table class="table table-sm">
          <thead>
            <tr class="table table-danger">
              <th scope="col">No</th>
              <th scope="col">Jabatan</th>
              <th scope="col">Email</th>
              <th scope="col">Nik</th>
              <th scope="col">Nama Lengkap</th>
              <th scope="col">Tanggal Lahir</th>
              <th scope="col">Tempat Lahir</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">Alamat</th>
              <th scope="col">Agama</th>
              <th scope="col">No HP</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($pelamars as $pelamar)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $pelamar->jabatan }}</td>
                <td>{{ $pelamar->email }}</td>
                <td>{{ $pelamar->nik }}</td>
                <td>{{ $pelamar->namalengkap }}</td>
                <td>{{ $pelamar->tanggallahir }}</td>
                <td>{{ $pelamar->tempatlahir }}</td>
                <td>{{ $pelamar->jeniskelamin }}</td>
                <td>{{ $pelamar->alamat }}</td>
                <td>{{ $pelamar->agama }}</td>
                <td>{{ $pelamar->nohp }}</td>
                <td class="d-flex">
                  <a href="/astra/pelamar/{{ $pelamar->id }}" class="btn btn-info px-3 fw-bold border-0">Details</a>
                  <a href="/astra/pelamar/{{ $pelamar->id }}/edit" class="btn btn-warning px-3 fw-bold border-0 mx-2">Edit</a>
                  <form method="post" action="/astra/pelamar/{{ $pelamar->id }}">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger px-3 fw-bold border-0" onclick="return confirm('Apa kamu yakin mau menghapus data ini?')">Delete</button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
</x-layout>
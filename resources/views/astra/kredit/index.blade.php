<x-layout>
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="fs-3 fw-bold text-danger text-capitalize">Data Simulasi Kredit</h1>
</div>
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
<a href="/astra/kredit/create" class="btn btn-danger fw-bold mb-3">Tambah Customer</a>
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
          <th scope="col">DP</th>
          <th scope="col">Jumlah Tenor</th>
          <th scope="col">Varian Motor</th>
          <th scope="col">Rencana Pembelian</th>
          <th scope="col">Pesan</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($kredits as $kredit)
      <tr>
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
        <td class="d-flex">
          <a href="/astra/kredit/{{ $kredit->id }}" class="btn bg-info px-3 fw-bold border-0">Details</a>
          <a href="/astra/kredit/{{ $kredit->id }}/edit" class="btn bg-warning px-3 fw-bold border-0 mx-2">Edit</a>
          <form action="/astra/kredit/{{ $kredit->id }}" method="post">
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
<x-layout-user>
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
      <h1 class="fs-3 fw-bold text-danger text-capitalize">Data File</h1>
    </div>

    <section class="bg-white rounded-3 p-4">
      <div class="row">
        <div class="col-md-8 col-12">
          <a href="/user/file/create" class="btn btn-danger mb-3 fw-bold">Add File</a>
        </div>
      </div>
      @can('developer')
      <div class="table-responsive col-xxl-12 col-xl-12 col-md-12 col-12 small">
        <table class="table table-sm">
          <thead>
            <tr class="table table-danger text-black fw-bold text-center">
              <th scope="col">No</th>
              <th scope="col">Action</th>
              <th scope="col">Created_At</th>
              <th scope="col">Pasphoto</th>
              <th scope="col">CV</th>
              <th scope="col">KTP</th>
              <th scope="col">KK</th>
              <th scope="col">Ijazah</th>
              <th scope="col">Transkrip Nilai</th>
              <th scope="col">Skck</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($files as $file)
            <tr class="text-center text-black fw-bold">
                <td>{{ $loop->iteration }}</td>
                <td class="d-flex">
                  <a href="/user/file/{{ $file->id }}" class="btn btn-info px-3 fw-bold border-0">Details</a>
                  <a href="/user/file/{{ $file->id }}/edit" class="btn btn-warning px-3 fw-bold border-0 mx-2">Edit</a>
                  @can('developer')
                  <form method="post" action="/user/file/{{ $file->id }}">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger px-3 fw-bold border-0" onclick="return confirm('Apa kamu yakin mau menghapus data ini?')">Delete</button>
                  </form>
                  @endcan
                </td>
                <td style="color: black;">{{$file->created_at->format("j-m-Y H:i:s")}}</td>
                <td style="color: black;">{{ $file->pasphoto }}</td>
                <td style="color: black;">{{ $file->cv }}</td>
                <td style="color: black;">{{ $file->ktp }}</td>
                <td style="color: black;">{{ $file->kk }}</td>
                <td style="color: black;">{{ $file->ijazah }}</td>
                <td style="color: black;">{{ $file->transkrip_nilai }}</td>
                <td style="color: black;">{{ $file->skck }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
      @endcan
    </section>
</x-layout-user>
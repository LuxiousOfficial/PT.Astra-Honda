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
      <h1 class="fs-3 fw-bold text-danger text-capitalize">Data Position</h1>
    </div>

    <section class="bg-white rounded-3 p-4">
      <div class="row">
        <div class="col-md-8 col-12">
          <a href="/dashboardhrdastrahonda/position/create" class="btn btn-danger mb-3 fw-bold">Tambah Position</a>
        </div>
      </div>

      <div class="row">
        <div class="col-xxl-8 col-xl-8 col-md-8 col-12">
          <form class="d-flex my-3" role="search">
            <input style="height: 3rem" class="form-control bg-gray-100" type="search" id="search" name="search" placeholder="Cari Data Candidates" aria-label="Search" autocomplete="off">
            <button style="height: 3rem" class="btn btn-outline-success bg-danger fw-bold text-white border-0 fs-5" type="submit">Search</button>
          </form>
        </div>
      </div>

      <div class="table-responsive col-xxl-12 col-xl-12 col-md-12 col-12 small">
          <table class="table table-sm">
            <thead>
              <tr class="table table-danger text-black fw-bold text-center">
                <th scope="col">No</th>
                <th scope="col">Action</th>
                <th scope="col">Created At</th>
                <th scope="col">Email</th>
                <th scope="col">ID</th>
                <th scope="col">Position</th>
                <th scope="col">Salary</th>
                <th scope="col">Join</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($positions as $position)
              <tr class="text-center text-black fw-bold">
                  <td>{{ $loop->iteration }}</td>
                  <td class="d-flex justify-content-center">
                    <a href="/dashboardhrdastrahonda/position/{{ $position->id }}" class="btn btn-info px-3 fw-bold border-0">Details</a>
                    <a href="/dashboardhrdastrahonda/position/{{ $position->id }}/edit" class="btn btn-warning px-3 fw-bold border-0 mx-2">Edit</a>
                    <form method="post" action="/dashboardhrdastrahonda/position/{{ $position->id }}">
                      @method('delete')
                      @csrf
                      <button class="btn btn-danger px-3 fw-bold border-0" onclick="return confirm('Apa kamu yakin mau menghapus data ini?')">Delete</button>
                    </form>
                  </td>
                  <td style="color: black;">{{$position->created_at->format("j-m-Y H:i:s")}}</td>
                  <td style="color: black;">{{ $position->user->email }}</td>
                  <td style="color: black;">{{ $position->id }}</td>
                  <td style="color: black;">{{ $position->office }}</td>
                  <td style="color: black;">{{ $position->salary }}</td>
                  <td style="color: black;">{{ $position->join }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      {{ $positions->links() }}
    </section>
</x-layoutdashboardahm>
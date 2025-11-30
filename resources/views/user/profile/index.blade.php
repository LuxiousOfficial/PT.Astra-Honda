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
      <h1 class="fs-3 fw-bold text-danger text-capitalize">Data Profile</h1>
    </div>

    <section class="bg-white rounded-3 p-4">
      <div class="row">
        <div class="col-md-8 col-12">
          <a href="/user/profile/create" class="btn btn-danger mb-3 fw-bold">Add Profile</a>
        </div>
      </div>

      <div class="table-responsive col-xxl-12 col-xl-12 col-md-12 col-12 small">
          <table class="table table-sm">
            <thead>
              <tr class="table table-danger text-black fw-bold text-center">
                <th scope="col">No</th>
                <th scope="col">Action</th>
                <th scope="col">Created At</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Nik</th>
                <th scope="col">Gender</th>
                <th scope="col">Place Of Birth</th>
                <th scope="col">Date Of Birth</th>
                <th scope="col">Address</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Religion</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($profiles as $profile)
              <tr class="text-center text-black fw-bold">
                  <td>{{ $loop->iteration }}</td>
                  <td class="d-flex">
                    <a href="/user/profile/{{ $profile->id }}" class="btn btn-info px-3 fw-bold border-0">Details</a>
                    <a href="/user/profile/{{ $profile->id }}/edit" class="btn btn-warning px-3 fw-bold border-0 mx-2">Edit</a>
                    @can('developer')
                    <form method="post" action="/user/profile/{{ $profile->id }}">
                      @method('delete')
                      @csrf
                      <button class="btn btn-danger px-3 fw-bold border-0" onclick="return confirm('Apa kamu yakin mau menghapus data ini?')">Delete</button>
                    </form>
                    @endcan
                  </td>
                  <td style="color: black;">{{$profile->created_at->format("j-m-Y H:i:s")}}</td>
                  <td style="color: black;">{{ $profile->name }}</td>
                  <td style="color: black;">{{ $profile->email }}</td>
                  <td style="color: black;">{{ $profile->nik }}</td>
                  <td style="color: black;">{{ $profile->gender }}</td>
                  <td style="color: black;">{{ $profile->place_of_birth }}</td>
                  <td style="color: black;">{{ $profile->date_of_birth }}</td>
                  <td style="color: black;">{{ $profile->address }}</td>
                  <td style="color: black;">{{ $profile->phone_number }}</td>
                  <td style="color: black;">{{ $profile->religion }}</td>
                  <td style="color: black;">{{ $profile->status }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </section>
</x-layout-user>
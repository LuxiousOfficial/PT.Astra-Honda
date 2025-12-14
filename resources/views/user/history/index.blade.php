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
      <h1 class="fs-3 fw-bold text-danger text-capitalize">History</h1>
    </div>

    <section class="bg-white rounded-3 p-4">

      <div class="table-responsive col-xxl-12 col-xl-12 col-md-12 col-12 small">
          <table class="table table-sm">
            <thead>
              <tr class="table table-danger text-black fw-bold text-center">
                <th scope="col">No</th>
                <th scope="col">Date Of Application</th>
                <th scope="col">Administration Selection</th>
                <th scope="col">HR Interview</th>
                <th scope="col">User Interview</th>
                <th scope="col">Hiring</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($positions as $position)
              <h2 class="text-center fs-3 mb-3">{{ $position->office }}</h2>
              <tr class="text-center text-black fw-bold">
                  <td>{{ $loop->iteration }}</td>
                  <td style="color: black;">{{$position->created_at->format("j-m-Y H:i:s")}}</td>
                  <td style="color: black;">{{ $position->administration ? $position->administration : 'On Process' }}</td>
                  <td style="color: black;">{{ $position->hr ? $position->hr : 'On Process' }}</td>
                  <td style="color: black;">{{ $position->users ? $position->users : 'On Process' }}</td>
                  <td style="color: black;">{{ $position->hiring ? $position->hiring : 'On Process' }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </section>
</x-layout-user>
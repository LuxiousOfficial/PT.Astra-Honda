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
      <h1 class="fs-3 fw-bold text-danger text-capitalize">Data Skills</h1>
    </div>

    <section class="bg-white rounded-3 p-4">
      <div class="row">
        <div class="col-md-8 col-12">
          <a href="/user/skills/create" class="btn btn-danger mb-3 fw-bold">Add Skill</a>
        </div>
      </div>

      <div class="table-responsive col-xxl-12 col-xl-12 col-md-12 col-12 small">
          <table class="table table-sm">
            <thead>
              <tr class="table table-danger text-black fw-bold text-center">
                <th scope="col">No</th>
                <th scope="col">Action</th>
                <th scope="col">Created At</th>
                <th scope="col">First Skill</th>
                <th scope="col">First Rate Skill</th>
                <th scope="col">Second Skill</th>
                <th scope="col">Second Rate Skill</th>
                <th scope="col">Third Skill</th>
                <th scope="col">Third Rate Skill</th>
                <th scope="col">Forth Skill</th>
                <th scope="col">Forth Rate Skill</th>
                <th scope="col">Fifth Skill</th>
                <th scope="col">Fifth Rate Skill</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($skills as $skill)
              <tr class="text-center text-black fw-bold">
                  <td>{{ $loop->iteration }}</td>
                  <td class="d-flex">
                    <a href="/user/skills/{{ $skill->id }}" class="btn btn-info px-3 fw-bold border-0">Details</a>
                    <a href="/user/skills/{{ $skill->id }}/edit" class="btn btn-warning px-3 fw-bold border-0 mx-2">Edit</a>
                    <form method="post" action="/user/skills/{{ $skill->id }}">
                      @method('delete')
                      @csrf
                      <button class="btn btn-danger px-3 fw-bold border-0" onclick="return confirm('Apa kamu yakin mau menghapus data ini?')">Delete</button>
                    </form>
                  </td>
                  <td style="color: black;">{{$skill->created_at->format("j-m-Y H:i:s")}}</td>
                  <td style="color: black;">{{ $skill->first_skill }}</td>
                  <td style="color: black;">{{ $skill->first_rate }}</td>
                  <td style="color: black;">{{ $skill->second_skill }}</td>
                  <td style="color: black;">{{ $skill->second_rate }}</td>
                  <td style="color: black;">{{ $skill->third_skill }}</td>
                  <td style="color: black;">{{ $skill->third_rate }}</td>
                  <td style="color: black;">{{ $skill->fourth_skill }}</td>
                  <td style="color: black;">{{ $skill->fourth_rate }}</td>
                  <td style="color: black;">{{ $skill->fifth_skill }}</td>
                  <td style="color: black;">{{ $skill->fifth_rate }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </section>
</x-layout-user>
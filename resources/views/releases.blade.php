<link rel="stylesheet" href="css/releases.css">
<title>PT. Astra Honda Motor || Press Release</title>

<x-layout>
     <section class="home-pressrelease">
       <div class="container">

        <form class="d-flex mt-5" role="search">
          <input class="form-control" type="search" id="search" name="search" placeholder="Cari artikel" aria-label="Search" autocomplete="off">
          <button class="btn btn-outline-success bg-danger fw-bold text-light border-white fs-4" type="submit">Search</button>
        </form>

         <div class="row mt-4">
           @foreach ($releases as $release)
          <div class="col-xxl-4 col-xl-4 col-md-4 col-sm-6 col-6 text-capitalize my-3">
            <div class="card shadow">
              <img src="{{ $release['image'] }}" class="card-img-top rounded-3">
              <div class="card-body text-capitalize text-center" style="background-color: whitesmoke; border-radius: 1rem;">
                <h6 class="text-center text-secondary">
                  <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-calendar2-event mx-1" viewBox="0 0 16 16">
                    <path d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z"/>
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1z"/>
                    <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5z"/>
                  </svg>                  
                  {{ $release->created_at->format("j-m-Y H:i:s") }}
                </h6>
                <h4 class="card-title text-center fs-5 fw-bold my-3">{{ Str::limit($release['title'], 50) }}</h4>
                <p class="text-center fs-6">{{ Str::limit($release['information'], 120) }}</p>
                <a href="/releases/{{ $release['slug'] }}" class="btn btn-danger d-flex justify-content-center fw-bold fs-6">selengkapnya</a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    
    {{ $releases->links() }}

</x-layout>

<script src="js/releases.js"></script>
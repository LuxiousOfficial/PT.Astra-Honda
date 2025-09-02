<link rel="stylesheet" href="../css/release.css">
<title>{{ $release['title'] }}</title>

<x-layout>
    <section class="home-release">
        <div class="container">
            <div class="row my-4">
                <div class="col-md-6 my-4 d-flex justify-content-around align-items-center">
                    <h4 class="fw-bold fs-2">{{ $release['title'] }}</h4>
                </div>
                <div class="col-md-6 col-6">
                    <img src="../{{ $release['image'] }}">
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-md-12 col-12">
                    <h6 class="text-secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-calendar2-event mx-1" viewBox="0 0 16 16">
                            <path d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z"/>
                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1z"/>
                            <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5z"/>
                          </svg>  
                        {{ $release->created_at->format("j-m-Y H:i:s") }}
                    </h6>
                    <p class="mt-3">{{ $release['information'] }}</p>
                </div>
            </div>
        </div>
    </section>
</x-layout>

<script src="js/release.js"></script>
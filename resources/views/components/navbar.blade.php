<!-- Navigasi -->
<nav class="navbar navbar-expand-lg navbar-dark bg-danger fs-4 sticky-top" style="font-family: calibri">
    <div class="container-fluid">
      <div class="search">
        <form action="/search" method="GET" class="d-flex mt-2" role="search">
          <input class="form-control me-2" type="search" id="search" name="search" placeholder="Cari sesuatu di sini..." aria-label="Search" autocomplete="off" style="width: 20rem">
          <button class="btn btn-outline-white bg-white fw-bold text-danger fs-5 border-3" type="submit">Search</button>
        </form>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse mx-5" id="navbarNavDropdown">
        <ul class="navbar-nav text-capitalize ms-auto mx-1" style="font-weight: bold;">
          <li class="nav-item">
            <x-nav-links href="/" :active="request()->is('/')">Home</x-nav-links>
          </li>
          <li class="nav-item">
            <x-nav-links href="/products" :active="request()->is('products*')">Products</x-nav-links>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              info
            </a>
            <ul class="dropdown-menu fs-5" aria-labelledby="navbarDropdownMenuLink">
              <li><x-links href="/promo" :active="request()->is('promo')">Promo</x-links></li>
              <li><x-links href="/astra/kredit/create" :active="request()->is('astra/kredit*')">Credit Simulation</x-links></li>
              <li><x-links href="/astra/service/create" :active="request()->is('astra/service*')">Booking Service</x-links></li>
            </ul>
          </li>
          <li class="nav-item">
            <x-nav-links href="/dealer" :active="request()->is('dealer')">Dealer</x-nav-links>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              after sales
            </a>
            <ul class="dropdown-menu fs-5" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item border-bottom" href="#">service</a></li>
              <li><a class="dropdown-item border-bottom" href="#">honda genuine</a></li>
              <li><a class="dropdown-item border-bottom" href="#">ban HGP</a></li>
              <li><a class="dropdown-item border-bottom" href="#">AHM OIL</a></li>
              <li><a class="dropdown-item border-bottom" href="#">honda accessories</a></li>
              <li><a class="dropdown-item" href="#">honda apparel</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              corporate
            </a>
            <ul class="dropdown-menu fs-5" aria-labelledby="navbarDropdownMenuLink">
              <li><x-links href="/corporate" :active="request()->is('corporate')">About Us</x-links></li>
              <li><x-links href="https://www.astra-honda.com/corporate-social-responsibility" :active="request()->is('https://www.astra-honda.com/corporate-social-responsibility')">sustainability</x-links></li>
              <li><x-links href="/karirs" :active="request()->is('karirs')">Carrers</x-links></li>
            </ul>
          </li>
          @auth
          <li class="nav-item">
            <form action="/logout" method="post">
              @csrf
              <button type="submit" class="nav-link">Logout</button>
            </form>
          </li>
          @else
          
          @endauth
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navigasi -->  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galery UMKM Depok</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/adminlte.css') }}" rel="stylesheet">
</head>
<header id="header" class="header fixed-top">

<div class="branding d-flex align-items-cente">

  <div class="container position-relative d-flex align-items-center justify-content-between">
    <a href="#" class="logo d-flex align-items-center me-auto me-xl-0">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <!-- <img src="assets/img/logo.png" alt=""> -->
      <h1 class="sitename">Galery UMKM</h1>
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="#hero" class="active">Home<br></a></li>
        <li> <a
                href="{{ route('login') }}"
                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                 Log in
                </a>
            </li>
</ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>
  </div>

</div>

</header>
<main class="main">
<!-- Hero Section -->
<section id="hero" class="hero section dark-background">

<img src="{{ asset('assets/img/umkm depok.png') }}" alt="" data-aos="fade-in">
</section><!-- /Hero Section -->
<!-- About Section -->

<!-- Menu Section -->
<section id="menu" class="menu section">
  <!-- Section Title -->
  <div class="text-center" data-aos="fade-up" >
  <H1>Data UMKM</H1>
</div><!-- End Section Title -->

  <div class="container section-title" data-aos="fade-up">
  </div><!-- End Section Title -->
  <div class="container isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
    <div class="row" data-aos="fade-up" data-aos-delay="100">
    </div>
    <div class="row row-cols-lg-2 isotope-container" data-aos="fade-up" data-aos-delay="200">
    @foreach ( $umkms as $umkm )
    <div class="">
      <div
        class="d-flex flex-column px-3 py-4 rounded text-white justify-content-center m-3" >
      <div class="d-flex gap-3 align-items-center" style="gap: 10px;">
          <div style="background-image:url('{{$umkm->foto}}'); background-size: cover; background-position: center;width: 200px;height: 200px;" class="rounded"></div>
            <div>
              <p class="mb-0">
                Nama Toko :
                <span class="text-warning fw-semibold">{{ $umkm->nama }}</span>
              </p>
              <p class="mb-0">
                Alamat :
                <span class="text-warning fw-semibold">{{ $umkm->alamat }}</span>
              </p>
              <p class="mb-0"> Pemilik : <span class="text-warning fw-semibold">{{ $umkm->pemilik }}</span>
              </p>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</section>
<section id="events" class="events section">
  <img class="slider-bg" src="assets/img/events-bg.jpg" alt="" data-aos="fade-in">
  <div class="container">
  </div>
</section>
</main>
<footer id="footer" class="footer">

<div class="container footer-top">
  <div class="row gy-4">
  </div>
</div>
<div class="container copyright text-center mt-4">
  <p>© <span>Copyright</span> <strong class="px-1 sitename">Direktori UMKM</strong> <span>All Rights Reserved</span></p>
  <div class="credits">
    Designed by <a href="#">kelompok 6</a>
  </div>
</div>

</footer>
</html>

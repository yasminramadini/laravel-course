@extends('users.layout')

@section('title', 'Home')

@section('content')
<!-- header -->
<header class="container">
  <div class="row py-5">
    <div class="col-md-6">
      <h1 class="fw-bold mb-4">Raih Karir Impianmu Di Mulai Dari Sini</h1>
      <p>Bingung kerja setelah lulus? Jangan khawatir! Yuk ikuti kursus unggulan Jarago dan raih pekerjaan yang kamu mau dengan real project. Temukan banyak kursus mulai dari coding, graphic design, data science, hingga cyber seurity.</p>
      <div class="input-group mt-4">
        <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
        <input type="search" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
      </div>
    </div>
    <div class="col-md-6">
      <img src="{{ asset('img/hero.png') }}" alt="" width="80%" class="mx-auto ms-md-auto">
    </div>
  </div>
</header>
<!-- end header -->

<!-- features -->
<section class="container py-5">
  <h3 class="fw-bold text-center">Kenapa Memilih Jarago</h3>
  <div class="row mt-4 g-4">
    <div class="col-md-4 d-flex gap-3">
      <img src="{{ asset('img/icons/icon.png') }}" alt="" width="60px" height="60px">
      <div>
        <h5>Full Online</h5>
        <p>Akses materi seumur hidup dimanapun dan kapanpun.</p>
      </div>
    </div>
    <div class="col-md-4 d-flex gap-3">
      <img src="{{ asset('img/icons/icon-2.png') }}" alt="" width="60px" height="60px">
      <div>
        <h5>Dapatkan Koneksi</h5>
        <p>Dapatkan koneksi ke 100+ hiring partner Jarago.</p>
      </div>
    </div>
    <div class="col-md-4 d-flex gap-3">
      <img src="{{ asset('img/icons/icon-2.png') }}" alt="" width="60px" height="60px">
      <div>
        <h5>Pelajari Soft-skill Dan Hard-skill</h5>
        <p>Kamu akan belajar hard-skill dan soft-skill seperti kolaborasi, komunikasi, critical thinking, dll.</p>
      </div>
    </div>
  </div>
</section>
<!-- end features -->

<!-- roadmap -->
<section class="container py-5">
  <h3 class="fw-bold text-center">Pilih Bidang Yang Kamu Mau</h3>
  <div class="row g-4 mt-4">
    <div class="col-md-4 d-flex gap-4">
      <img src="{{ asset('img/icons/backend.png') }}" alt="" width="50px" height="50px">
      <div>
        <h5>Backend Developer</h5>
        <p>20 Kursus</p>
      </div>
    </div>
    <div class="col-md-4 d-flex gap-4">
      <img src="{{ asset('img/icons/frontend.png') }}" alt="" width="50px" height="50px">
      <div>
        <h5>Frontend Developer</h5>
        <p>20 Kursus</p>
      </div>
    </div>
    <div class="col-md-4 d-flex gap-4">
      <img src="{{ asset('img/icons/devops.png') }}" alt="" width="50px" height="50px">
      <div>
        <h5>DevOps Engineer</h5>
        <p>20 Kursus</p>
      </div>
    </div>
    <div class="col-md-4 d-flex gap-4">
      <img src="{{ asset('img/icons/marketing.png') }}" alt="" width="50px" height="50px">
      <div>
        <h5>Digital Marketing</h5>
        <p>20 Kursus</p>
      </div>
    </div>
    <div class="col-md-4 d-flex gap-4">
      <img src="{{ asset('img/icons/ml.png') }}" alt="" width="50px" height="50px">
      <div>
        <h5>Machine Learning</h5>
        <p>20 Kursus</p>
      </div>
    </div>
    <div class="col-md-4 d-flex gap-4">
      <img src="{{ asset('img/icons/uiux.png') }}" alt="" width="50px" height="50px">
      <div>
        <h5>UI UX Design</h5>
        <p>20 Kursus</p>
      </div>
    </div>
  </div>
</section>
<!-- end roadmap -->
@endsection
@extends('master.master_home')
@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">We offer modern solutions for growing your business</h1>
                <h2 data-aos="fade-up" data-aos-delay="400">We are team of talented designers making websites with Bootstrap</h2>
                <div data-aos="fade-up" data-aos-delay="600">
                    <div class="text-center text-lg-start">
                        <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>Get Started</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="theme/home/assets/img/hero-img.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<section>
    <div class="container-fluid">
        <div class="row justify-content-center d-flex flex-wrap">
            @foreach($pocong as $p)
            <div class="col-lg-4 d-flex justify-content-center">
                <div class="card shadow" style="width: 18rem;">
                  <div class="card-body">
                    <h5 class="card-title fw-bold">{{ $p->service_name }}</h5>
                    <h6>Subscribe</h6>
                    <p class="card-text">{{ $p->description }}</p>
                    <button class="btn btn-primary me-2"><a href="#" class="card-link text-white">Tambah</a></button>
                    <button class="btn btn-danger"><a href="#" class="card-link text-white">Hapus</a></button>
                  </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

        <div class="container" data-aos="fade-up">
            <div class="row gx-0">
                <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="content">
                        <h3>Who We Are</h3>
                        <h2>Expedita voluptas omnis cupiditate totam eveniet nobis sint iste. Dolores est repellat corrupti reprehenderit.</h2>
                        <p>
                            Quisquam vel ut sint cum eos hic dolores aperiam. Sed deserunt et. Inventore et et dolor consequatur itaque ut voluptate sed et. Magnam nam ipsum tenetur suscipit voluptatum nam et est corrupti.
                        </p>
                        <div class="text-center text-lg-start">
                            <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Read More</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                    <img src="theme/home/assets/img/about.jpg" class="img-fluid" alt="" style="width: 50rem">
                </div>
            </div>
        </div>

    </section><!-- End About Section -->
</main><!-- End #main -->
@endsection
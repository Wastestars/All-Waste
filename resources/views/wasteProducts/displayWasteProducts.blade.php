<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>All Waste</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{url('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{url('assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{url('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/main.css') }}">

</head>
<body>
@include('common.header')
<main id="main">


    <section id="portfolio" class="portfolio sections-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Type of waste products</h2>
            </div>

            <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

                <div>
                    <ul class="portfolio-flters">
                        <li data-filter="*" class="filter-active">Waste Products</li>
                        <li data-filter="*">Papers and Plastics </li>
                        <li data-filter="*">Electronics and batteries</li>
                        <li data-filter="*">Organic waste</li>
                        <li data-filter="*">Tore Clothes</li>
                    </ul><!-- End Portfolio Filters -->
                </div>

                <div class="row gy-4 portfolio-container">
                    @foreach($wastes as $waste)
                    <div class="col-xl-4 col-md-6 portfolio-item *">
                        <div class="portfolio-wrap">
                            <a href="{{ URL::asset("/storage/app/public/wasteProducts/$waste->wasteImage")}}" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ URL::asset("/storage/app/public/wasteProducts/$waste->wasteImage")}}" class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html" title="More Details">{{$waste->wasteName}}</a></h4>
                                <p>{{$waste->wasteDescription}}</p>

                                    <form action="{{url('/payments')}}" method="POST">
                                        @csrf
                                        <button>
                                    Paypal Payment
                                        </button>
                                    </form>

                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->
                    @endforeach
                </div><!-- End Portfolio Container -->


            </div>

        </div>
    </section><!-- End Portfolio Section -->



</main><!-- End #main -->


<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="{{url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('assets/vendor/aos/aos.js')}}"></script>
<script src="{{url('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{url('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
<script src="{{url('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{url('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{url('assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{url('assets/js/main.js')}}"></script>

</body>

</html>

<head>
    @include('common/header')
</head>
<body>

<div class="recyclableFrm" style="height:80vh;">
    <form action="/schedulePickup" method="POST" enctype="multipart/form-data" class="form">
    @csrf
        <h1 class="title">Schedule Garbage Pickup</h1>

        <br>
        <div class="inputContainer">
            <input type="text" name="pickupLocation" class="input" placeholder="Enter the location" required>
            <label for="" class="label">Location</label><br><br>
        </div>
        <br>

        <div class="inputContainer">
            <input type="datetime-local" name="pickupDateTime" class="input" placeholder="Enter the dateTime" required>
            <label for="" class="label">Date and Time</label>
        </div>
        <br>

        <div class="button">
            <input type="submit" name="pickup" class="btn" value="Submit" style = "background-color: #008374; color: #fff">
        </div>
    </form>
</div>


<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-info">
                <a href="index.html" class="logo d-flex align-items-center">
                    <span>All Waste</span>
                </a>
                <div class="social-links d-flex mt-4">
                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Waste Type</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-6 footer-links">
                <h4>Our Services</h4>
                <ul>
                    <li><a href="#">Waste Collection</a></li>
                    <li><a href="#">Recyling</a></li>
                    <li><a href="#">Inceneration</a></li>

                </ul>
            </div>


        </div>
    </div>


</footer><!-- End Footer -->
<!-- End Footer -->

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>


</body>
</html>



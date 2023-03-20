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
        <input type="text" name="user" value="{{auth()->user()}}" hidden>
        <div class="button">
            <input type="submit" name="pickup" class="btn" value="Submit" style = "background-color: #008374; color: #fff">
        </div>
    </form>
</div>

@include('common/footer')

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



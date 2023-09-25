<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BIZZONE GROUP | ГЛАВНАЯ СТРАНИЦА</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{ asset('user/assets/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('user/assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/assets/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('user/assets/css/style.css') }}" rel="stylesheet">

</head>

<body>

<!-- Navbar Start -->
@include('user.partials.navbar')
<!-- Navbar End -->

<!-- Main Content Start -->
@yield('content')
<!-- Main Content End -->

<!-- Footer Start -->
@include('user.partials.footer')
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('user/assets/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('user/assets/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('user/assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('user/assets/lib/isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('user/assets/lib/lightbox/js/lightbox.min.js') }}"></script>

<!-- Contact Javascript File -->
<script src="{{ asset('user/assets/mail/jqBootstrapValidation.min.js') }}"></script>
<script src="{{ asset('user/assets/mail/contact.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ asset('user/assets/js/main.js') }}"></script>
@include('sweetalert::alert')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>

</html>

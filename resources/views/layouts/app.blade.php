<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Titrex</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  {{-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> --}}

  <!-- Google Fonts -->
  <link href="{{ asset('assets/css/googlefonts.css') }}" rel="stylesheet">
  {{-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> --}}

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Presento - v3.1.0
  * Template URL: https://bootstrapmade.com/presento-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    @include('layouts.head')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <div class="row">
        <div class="col-xl-6">
          <h1>For better design and functionalities of your needs</h1>
          <h2>We take your requirements as our business objectives</h2>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->
  
  <main id="main">
    @yield('content')
  </main>
  
    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
          <div class="container">
            <div class="row">
    
              <div class="col-lg-3 col-md-6 footer-contact">
                <h3>Titrex Technology</h3>
                <p>
                  Iyunga <br>
                  Mbeya, Tanzania<br><br>
                  <strong>Phone:</strong> +255 762-602-371<br>
                  <strong>Email:</strong> albertoyohana95@gmail.com<br>
                </p>
              </div>
    
              <div class="col-lg-2 col-md-6 footer-links">
                <h4>Software Services</h4>
                <ul>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Web & Mobile Development</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                  
                </ul>
              </div>
    
              <div class="col-lg-3 col-md-6 footer-links">
                <h4>ICT Services</h4>
                <ul>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">CCTV Security System</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Data & Voice Installation</a></li>
                </ul>
              </div>
    
              <div class="col-lg-4 col-md-6 footer-newsletter">
                <h4>Subscribe</h4>
                <form action="#" method="post">
                  <div class="form-group">
                    <input class="form-control" type="email" name="email"><input type="submit" value="Subscribe">
                  </div>
                </form>
              </div>
    
            </div>
          </div>
        </div>
    
        {{-- <div class="container d-md-flex py-4">
    
          <div class="me-md-auto text-center text-md-start">
            <div class="copyright">
              &copy; Copyright <strong><span>Titrex Technology</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
              <!-- All the links in the footer should remain intact. -->
              <!-- You can delete the links only if you purchased the pro version. -->
              <!-- Licensing information: https://bootstrapmade.com/license/ -->
              <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/presento-bootstrap-corporate-template/ -->
              Designed by <a href="https://titrex.co.tz/">Titrex Technology</a>
            </div>
          </div>
          <div class="social-links text-center text-md-end pt-3 pt-md-0">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          </div>
        </div> --}}
      </footer><!-- End Footer -->
    
      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    
      <!-- Vendor JS Files -->
      <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
      <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
      <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
      <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
      <script src="{{ asset('assets/vendor/purecounter/purecounter.js') }}"></script>
      <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    
      <!-- Template Main JS File -->
      <script src="{{ asset('assets/js/main.js') }}"></script>
    
    </body>
    
    </html>

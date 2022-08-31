<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ $title }}</title>

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/favicon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Styles -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp - v2.1.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  
  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="#">SILAT<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav class="nav-menu d-none d-lg-block">
            <!-- 
            <ul>
              <li class="active"><a href="index.html">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#services">Services</a></li>
              <li><a href="#portfolio">Portfolio</a></li>
              <li><a href="#team">Team</a></li>
              <li class="drop-down"><a href="">Drop Down</a>
                <ul>
                  <li><a href="#">Drop Down 1</a></li>
                  <li class="drop-down"><a href="#">Deep Drop Down</a>
                    <ul>
                      <li><a href="#">Deep Drop Down 1</a></li>
                      <li><a href="#">Deep Drop Down 2</a></li>
                      <li><a href="#">Deep Drop Down 3</a></li>
                      <li><a href="#">Deep Drop Down 4</a></li>
                      <li><a href="#">Deep Drop Down 5</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Drop Down 2</a></li>
                  <li><a href="#">Drop Down 3</a></li>
                  <li><a href="#">Drop Down 4</a></li>
                </ul>
              </li>
              <li><a href="#contact">Contact</a></li>

            </ul>
            -->
        </nav>
        <!-- .nav-menu -->

        @if (Auth::check()) 
            <h5>
                <div class="btn-group">
                    <button type="button" class="btn btn-secondary"><a href="#"><i class="icofont-user-alt-2"></i>  <?php echo Session()->get('silat_nama'); ?> </a></button>
                    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="{{ route('logout') }}"><i class="icofont-logout"></i> Keluar</a>
                    </div>
                </div>
            </h5> 
        @else
            <a href="#" class="get-started-btn scrollto" data-toggle="modal" data-target="#modalLogin">Masuk</a>
        @endif 
    </div>
  </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center justify-content-center">
        <div class="container" data-aos="fade-up">

          <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
            <div class="col-xl-8 col-lg-8">
                <img src="assets/img/LOGO DPMPTSP SIAP LUMPAT2.png" class="img-fluid" width="130">
                <h1>DPMPTSP <br>Kab. Bandung Barat<span>.</span></h1>
                <h2>Sistem Layanan Administrasi Terpadu </h2>
            </div>
          </div>

          <div class="row mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
            <div class="col-xl-2 col-md-4 col-6">
              <div class="icon-box">
                <i class="icofont-envelope-open"></i>
                <h3><a href="./surat/">Surat</a></h3>
              </div>
            </div>
            <div class="col-xl-2 col-md-4 col-6 ">
              <div class="icon-box">
                <i class="icofont-users-alt-2"></i>
                <h3><a href="./kepum/">Kepegawaian</a></h3>
              </div>
            </div>
            <div class="col-xl-2 col-md-4 col-6 mt-4 mt-md-0">
              <div class="icon-box">
                <i class="icofont-money"></i>
                <h3><a href="./keuangan/">Keuangan</a></h3>
              </div>
            </div>
            <div class="col-xl-2 col-md-4 col-6 mt-4 mt-xl-0">
              <div class="icon-box">
                <i class="icofont-briefcase"></i>
                <h3><a href="./simaset/">Asset</a></h3>
              </div>
            </div>
            <div class="col-xl-2 col-md-4 col-6 mt-4 mt-xl-0">
              <div class="icon-box">
                <i class="icofont-bullhorn"></i>
                <h3><a href="./pengaduan/">Pengaduan</a></h3>
              </div>
            </div>
            
          </div>
          <div class="row mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
            <div class="col-xl-2 col-md-4 col-6 mt-4 mt-xl-0">
              <div class="icon-box">
                <i class="icofont-server"></i>
                <h3><a href="./arsip-digital/">Arsip Digital</a></h3>
              </div>
            </div>
            <div class="col-xl-2 col-md-4 col-6 mt-4 mt-xl-0">
              <div class="icon-box">
                <i class="icofont-chart-pie-alt"></i>
                <h3><a href="./bank-data/">Bank Data</a></h3>
              </div>
            </div>
            <!--
            <div class="col-xl-2 col-md-4 col-6 mt-4 mt-xl-0">
              <div class="icon-box">
                <i class="icofont-industries-4"></i>
                <h3><a href="./sim-pm/">Data PM</a></h3>
              </div>
            </div>
            -->
          </div>

        </div>
    </section><!-- End Hero -->

    <main id="main">

    <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Team</h2>
                    <p>Seksi Pengolahan Data Dan Sistem Informasi</p>
                </div>

                <div class="row">

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="assets/img/team/team-1.png" class="img-fluid" alt="" width="100%" height="200">
                                <div class="social">
                                    <a href=""><i class="icofont-twitter"></i></a>
                                    <a href=""><i class="icofont-facebook"></i></a>
                                    <a href=""><i class="icofont-instagram"></i></a>
                                    <a href=""><i class="icofont-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Meiky Budiyono, S. Kom</h4>
                                <span>Kepala Seksi Pengolahan Data Dan Sistem Informasi Penanaman Modal</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="200">
                            <div class="member-img">
                                <img src="assets/img/team/team-2.png" class="img-fluid" alt="" width="100%" height="200">
                                <div class="social">
                                    <a href="https://twitter.com/sopyan_paradise"><i class="icofont-twitter"></i></a>
                                    <a href="https://www.facebook.com/sopyan.paradise"><i class="icofont-facebook"></i></a>
                                    <a href="https://www.instagram.com/sopyan.paradise/?hl=id"><i class="icofont-instagram"></i></a>
                                    <a href="https://id.linkedin.com/in/sopyan-paradise-25287363/en"><i class="icofont-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Sopyan, S.Kom</h4>
                                <span>Pranata Komputer Ahli Pertama</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="300">
                            <div class="member-img">
                                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="icofont-twitter"></i></a>
                                    <a href=""><i class="icofont-facebook"></i></a>
                                    <a href=""><i class="icofont-instagram"></i></a>
                                    <a href=""><i class="icofont-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>R. Fajar Gufaran, S.Kom</h4>
                                <span>Pengelola SIM Penanaman Modal Dan Perizinan Terpadu</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="400">
                            <div class="member-img">
                            <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="icofont-twitter"></i></a>
                                    <a href=""><i class="icofont-facebook"></i></a>
                                    <a href=""><i class="icofont-instagram"></i></a>
                                    <a href=""><i class="icofont-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Insan Arief Majid, S.Sn</h4>
                                <span>Pengolah Data</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Team Section -->
        
        <!-- ======= Login Section ======= -->
        <section id="Login" class="contact">
            <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLogin" aria-hidden="true" data-backdrop="false">
                <div class="modal-dialog modal-full-height modal-right modal-notify modal-info" role="document">
                    <div class="modal-content  text-center">
                        <form action="{{ route('login') }}" method="post" accept-charset="utf-8">
                        @csrf   
                        <!-- csrf = <input type="hidden" name="_token" value="QQtzCXZYXGeWiPHoK4MJ62rtfSlex9gPqQganbv2"> -->
                            <!--Body-->
                            <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true" class="white-text">×</span>
                                </button>
                                <h4>Login</h4>
                                <h5 class="logo">Gunakan Akun <a href="#">SILAT</a> Anda</h5> 
                                
                                <div class="row h-100">
                                    <div class="col-lg-6 my-auto">
                                        <div class="text-center">
                                            <div class="form-group bmd-form-group">
                                                <div class="input-group">
                                                  <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="icofont-user-alt-2"></i>
                                                    </div>
                                                  </div>
                                                  <input type="text" class="form-control" placeholder="Username..." name="login_username" required>
                                                </div>
                                            </div>

                                            <div class="form-group bmd-form-group">
                                                <div class="input-group">
                                                  <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="icofont-ui-password"></i>
                                                    </div>
                                                  </div>
                                                  <input type="password" class="form-control" placeholder="Password..." name="login_password" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <img src="assets/img/Icon-Shield-Blue-01.png" alt="" class="img-fluid"> 
                                        <p style="font-size:80%;">Satu akun untuk seluruh pekerjaan anda.</p>
                                    </div>
                                </div>
                            </div>

                            <!--Footer-->
                            <div class="modal-footer justify-content-center">
                                <button type="submit" class="btn btn-info btn-round">
                                    <i class="icofont-finger-print"></i> Masuk
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>   
        </section>
        
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>SILAT</span></strong>. © 2019, by DPMPTSP Kab. Bandung Barat.
                <br> @SopyanParadise
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
                <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
                Laravel <a href="#">v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</a>
            </div>
        </div>
    </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
    $(document).ready(function() {
        toastr.options = {
          "debug": false,
          "positionClass": "toast-top-full-width",
          "onclick": null,
          "fadeIn": 300,
          "fadeOut": 1000,
          "timeOut": 5000,
          "extendedTimeOut": 1000
        }
        @if ($message = Session::get('warning'))
        // Notifikasi
        toastr.warning('<?php echo $message ?>');
        @endif

        @if ($message = Session::get('sukses'))
        // Notifikasi
        toastr.success('<?php echo $message ?>');
        @endif
    });
  </script>

</body>

</html>
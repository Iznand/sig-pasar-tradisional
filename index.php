<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SIG-PASAR-TRADISIONAL-SOPPENG</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo1.png" rel="icon">
  <link href="assets/img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style2.css" rel="stylesheet">

  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <!-- =======================================================
  * Template Name: Bethany - v2.2.0
  * Template URL: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
      <div class="header-container d-flex align-items-center">
        <div class="logo mr-auto">
          <h1 class="text-light"><a href="index.php"><span>SIG</span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li class="active"><a href="#header">Home</a></li>
            <li><a href="#about">Tentang Kami</a></li>
            <li><a href="#services">Peta</a></li>
            <li><a href="#portfolio">Data Pasar</a></li>
            <!-- <li><a href="#team">Team</a></li> -->
            <li><a href="#contact">Kontak Kami</a></li>
            <!-- <li class="drop-down"><a href="detail/detailsekolah.php">Login</a>
              <ul>
                <li><a href="#">Login</a></li> -->
                <!-- <li class="drop-down"><a href="#">Drop Down 2</a>
                  <ul>
                    <li><a href="#">Deep Drop Down 1</a></li>
                    <li><a href="#">Deep Drop Down 2</a></li>
                    <li><a href="#">Deep Drop Down 3</a></li>
                    <li><a href="#">Deep Drop Down 4</a></li>
                    <li><a href="#">Deep Drop Down 5</a></li>
                  </ul>
                </li> -->
                <!-- <li><a href="#">Register</a></li> -->
<!--                 <li><a href="#">Drop Down 4</a></li>
                <li><a href="#">Drop Down 5</a></li> -->
              <!-- </ul> -->
            </li>

            <li class="get-started"><a href="#about">Mulai</a></li>
          </ul>
        </nav><!-- .nav-menu -->
      </div><!-- End Header Container -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
      <h1>Sistem Informasi Geografis</h1>
      <h1>PASAR TRADISIONAL</h1>
      <h2>Di Soppeng</h2>
      <a href="#about" class="btn-get-started scrollto">Mulai</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container">

        <div class="row">

          <div class="col-md-12 col-lg-3 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="100">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="" style="opacity: 0;">
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <h2>PASAR TRADISIONAL</h2>
            <h3>Sistem informasi ini merupakan aplikasi pemetaan geografis pasar tradisional di Watansoppeng. Aplikasi ini memuat informasi dan lokasi dari pasar tradisional di Watansoppeng.</h3>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left" data-aos-delay="200">
            <p>
              Dalam aplikasi pemetaan geografis pasar tradisional ini memuat informasi dan lokasi dari pasar tradisional di Watansoppeng. Pemetaan diambil dari data lokasi Google Maps dan data dari website masing" pasar. Aplikasi ini memuat sejumlah informasi mengenai :
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Pasar Tradisional</li>
              <!-- <li><i class="ri-check-double-line"></i> Sekolah Menengah Kejuruan Negeri</li> -->
            </ul>
            <p class="font-italic">
              Informasi dapat berubah sewaktu-waktu
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

<!-- ======= Counts Section ======= -->
<section id="counts" class="counts">
  <div class="container">
    <div class="row counters justify-content-center">

      <!-- Kolom kosong untuk keseimbangan kiri -->
      <div class="col-lg-3 col-6 text-center" style="opacity: 0;">
        <span data-toggle="counter-up">232</span>
        <p>Clients</p>
      </div>

      <?php
      // Mengambil data dari countsma.php
      include_once "countsma.php"; 
      $obj = json_decode($data, true);  // Dekode data JSON dan diubah ke array

      // Memastikan data pasar tradisional ada dan bukan 0
      if (isset($obj['sma']) && $obj['sma'] > 0) {
        $sman = $obj['sma'];
      } else {
        $sman = "Data tidak ditemukan"; // Jika data tidak tersedia
      }
      ?>

      <!-- Kolom Pasar Tradisional di tengah -->
      <div class="col-lg-3 col-6 text-center">
        <span data-toggle="counter-up"><?php echo $sman; ?></span>
        <p>Pasar Tradisional</p>
      </div>

      <!-- Kolom kosong untuk keseimbangan kanan -->
      <div class="col-lg-3 col-6 text-center" style="opacity: 0;">
        <span data-toggle="counter-up">15</span>
        <p>Hard Workers</p>
      </div>

    </div>
  </div>
</section>
<!-- End Counts Section -->




    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="text-center" data-aos="zoom-in">
          <h3>SIG</h3>
          <p> Detail pasar tradisional di Watansoppeng</p>
          <a class="cta-btn" href="#portfolio">Lihat Detail</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">
          <div class="text-center" data-aos="zoom-in">
            <h3 style="font-weight: bold; text-transform: uppercase;">Peta</h3>
          </div>
        <div class="panel-body" style="align-content: center;">
          <div id="map" style="width:100%;height:480px;"></div>
            <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyDc234G5jqvDGc39odGCNXmFfoWywYongc"></script>

            <script type="text/javascript">
                function initialize() {
                  
                  var mapOptions = {   
                      zoom: 12.5,
                      center: new google.maps.LatLng(-4.379074638922105, 119.94492243234782), 
                      disableDefaultUI: false
                  };

                  var mapElement = document.getElementById('map');

                  var map = new google.maps.Map(mapElement, mapOptions);

                  setMarkers(map, officeLocations);

              }

              var officeLocations = [
              <?php
              $data = file_get_contents('http://localhost/SIG-PASAR-TRADISIONAL-SOPPENG/ambildata.php');
                              $no=1;
                              if(json_decode($data,true)){
                                $obj = json_decode($data);
                                foreach($obj->results as $item){
              ?>
              [<?php echo $item->id_instansi ?>,'<?php echo $item->nama_instansi ?>','<?php echo $item->alamat ?>', <?php echo $item->longitude ?>, <?php echo $item->latitude ?>],
              <?php 
              }
              } 
              ?>    
              ];

              function setMarkers(map, locations)
              {
                  var globalPin = 'img/marker.png';

                  for (var i = 0; i < locations.length; i++) {
                     
                      var office = locations[i];
                      var myLatLng = new google.maps.LatLng(office[4], office[3]);
                      var infowindow = new google.maps.InfoWindow({content: contentString});
                       
                      var contentString = 
                          '<div id="content">'+
                          '<div id="siteNotice">'+
                          '</div>'+
                          '<h5 id="firstHeading" class="firstHeading">'+ office[1] + '</h5>'+
                          '<div id="bodyContent">'+ 
                          '<a href=detail.php?id='+office[0]+'>Info Detail</a>'+
                          '</div>'+
                          '</div>';

                      var marker = new google.maps.Marker({
                          position: myLatLng,
                          map: map,
                          title: office[1],
                          icon:'img/marker.png'
                      });

                      google.maps.event.addListener(marker, 'click', getInfoCallback(map, contentString));
                  }
              }

              function getInfoCallback(map, content) {
                  var infowindow = new google.maps.InfoWindow({content: content});
                  return function() {
                          infowindow.setContent(content); 
                          infowindow.open(map, this);
                      };
              }

              initialize();
              </script>

          </div>

      </div>
    </section><!-- End Services Section -->

        <!-- ======= Contact Section ======= -->
    <section id="portfolio" class="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-3" data-aos="fade-right">
            <div class="section-title">
              <h2>Data PASAR TRADISIONAL</h2>
              <p>Halaman ini memuat informasi Pasar Tradisional di Watansoppeng. </p>
            </div>
          </div>

          <div class="col-lg-9" data-aos="fade-up" data-aos-delay="100">

            <div class="col-md-12">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
              <h2 class="panel-title"><strong> - <?php echo 'Informasi instansi' ?> - </strong></h2>
            </div>
            <div class="panel-body">
              <table class="table table-bordered table-striped table-admin">
              <thead>
                <tr>
                  <th width="5%">No.</th>
                  <th width="30%">Nama Pasar</th>
                  <!-- <th width="10%">NPSN</th> -->
                  <th width="30%">Alamat</th>
                  <th width="20%">Website</th>
                  <th width="20%">Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php
                $data = file_get_contents('http://localhost/SIG-PASAR-TRADISIONAL-SOPPENG/ambildata.php');
                $no=1;
                if(json_decode($data,true)){
                  $obj = json_decode($data);
                  foreach($obj->results as $item){
              ?>
              <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $item->nama_instansi; ?></td>
                <!-- <td><?php echo $item->NPSN; ?></td> -->
                <td><?php echo $item->alamat; ?></td>
                <td><a href="https://<?php echo $item->website; ?>" target="_blank"><?php echo $item->website; ?></a></td>
                <td class="ctr">
                  <div class="btn-group">
                    <a href="detail.php?id=<?php echo $item->id_instansi; ?>" rel="tooltip" data-original-title="Lihat File" data-placement="top" class="btn btn-primary">
                    <i class="fa fa-map-marker"> </i> Detail dan Lokasi</a>&nbsp;
                  </div>
                </td>
              </tr>
              <?php $no++; }}

              else{
                echo "data tidak ada.";
                } ?>
              
              </tbody>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <div class="section-title">
              <h2>Kontak Kami</h2>
              <p>Halaman ini memuat informasi pengembang serta masukan kritik dan saran dari pengguna apabila ditemukan masalah. </p>
            </div>
          </div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">

            <!-- <iframe style="border:0; width: 100%; height: 270px;" id="map-canvas"></iframe> -->
            <div class="info mt-4">
              <i class="icofont-google-map"></i>
              <h4>Lokasi:</h4>
              <p>Kabupaten Soppeng, Sulawesi Selatan
              </p>
            </div>
            <div class="row">
              <div class="col-lg-6 mt-4">
                <div class="info">
                  <i class="icofont-envelope"></i>
                  <h4>Email:</h4>
                  <p>iznandkhabib.26@gmail.com</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="info w-100 mt-4">
                  <i class="icofont-phone"></i>
                  <h4>Telepon:</h4>
                  <p>+62 89521377096</p>
                </div>
              </div>
            </div>

            <form action="forms/contact.php" method="post" role="form" class="php-email-form mt-4">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nama anda" data-rule="minlen:4" data-msg="Masukkan sedikitnya 4 karakter" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email anda" data-rule="email" data-msg="Masukkan email yang valid" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjek" data-rule="minlen:4" data-msg="Masukkan setidaknya 8 karakter" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Masukkan pesan untuk kami" placeholder="Pesan"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Memuat</div>
                <div class="error-message"></div>
                <div class="sent-message">Pesan anda telah terkirim. Terimakasih!</div>
              </div>
              <div class="text-center"><button type="submit">Kirim pesan</button></div>
            </form>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>SIG</h3>
            <p>
              Jl. Kesatria <br>
              Kl. Botto<br>
              Indonesia <br><br>
              <strong>Phone:</strong> +62 89521377096<br>
              <strong>Email:</strong> iznandkhabib.26@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Link bantuan</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Maps</a></li>
              <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li> -->
              <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li> -->
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Data</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">PASAR TRADISIONAL</a></li>
              <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">SMK Negeri</a></li> -->
              <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li> -->
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Ikuti info terbaru</h4>
            <p>Subscribe email</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>SIG PASAR TRADISIONAL WATANSOPPENG</span></strong>.
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/ -->
          <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap-hover-dropdown.js"></script>
  <script src="js/script.js"></script>
  <script src="js/jquery.dataTables.min.js"></script>
  <script src="js/datatable-bootstrap.js"></script>

</body>

</html>

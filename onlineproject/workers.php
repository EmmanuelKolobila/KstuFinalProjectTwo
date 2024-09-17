<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/about.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>About</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="stylesheet" type="text/css" href="css/home.css">


  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/home.css">

    <!-- Template Main CSS File -->
  <link href="assets/css/aboutstyle.css" rel="stylesheet">
</head>
<body>
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid">

      <div class="row justify-content-center align-items-center">
        <div class="col-xl-11 d-flex align-items-center justify-content-between">
          <h1 class="logo" style="width: 5px!important;"><a href="index.php">KsTU</a></h1>
           <a href="index.php" class="logo"><img src="assets/img/logo.png" alt="" style="width: 50px;height: 70px;border-radius: 10px;"></a> 

          <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
              <li><a class="nav-link scrollto" href="about.php">About</a></li>
              <li><a class="nav-link scrollto" href="service.php">Services</a></li>
              <li><a class="nav-link scrollto " href="Workers.php">Workers</a></li>
              <!-- <li><a class="nav-link scrollto" href="#team">Team</a></li> -->
              <li><a class="nav-link  " href="comment.php">Comment</a></li>
              <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a> -->
               <!--  <ul>
                  <li><a href="#">Drop Down 1</a></li>
                  <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
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
                </ul> -->
              <!-- </li> -->
              <li><a class="nav-link scrollto" href="contact.php">Contact</a></li>
            </ul>
             <i class="bi bi-list mobile-nav-toggle">
            
            </i>
          </nav><!-- .navbar -->
        </div>
      </div>

    </div>
  </header>
  <div id="abouthead" class="container-fliud p-5">
    <div id="aboutheadchildren">
      <!-- <div id="logo_n_name">
        <div id="logo"><img src="assets/images/logo.png" id="logoimg"> </div>
        <div id="name" class="">
          <div id="kstu" class="mt-2">KUMASI TECHNICAL UNIVERSITY</div>
          <div id="direct">I.C.T DIRECTORATE</div>
        </div>
      </div>
      <div id="home"><a href="index.php" style="text-decoration: unset!important; color: unset;">Home</a></div>
      <div id="vclass" style="margin-left: 2%;"><a href="vclass.php" style="text-decoration: none; color: unset; ">Vclass</a></div>
      <div id="wifi" style="margin-left: 2%;"><a href="wifi.php" style="text-decoration: none; color: unset; ">KsTU Wifi</a></div>
      <div id="comment" style="margin-top: 10px;"><a href="comment.php" style="text-decoration: none; color: unset; ">Comment</a></div>
       <div></div>  -->
    </div>
  </div>
  <div id="directhome" class="container-fliud p-5 text-center">
    <div id="_home" class="pt-2">WORKERS</div>
    <div id="_about" class="pb-3">KsTU I.C.T DIRECTORATE WORKERS</div>
  </div>
<!-- =====section===== -->
<section id="portfolio" class="section-bg">
      <div class="container" >

        <header class="section-header">
          <h3 class="section-title">Our Staff Workers</h3>
        </header>

        <div class="row"  data-aos-delay="100">
      <div class=" col-lg-12">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All STAFF</li>
            <li data-filter=".filter-app">MAIN STAFF</li>
            <li data-filter=".filter-card">CONTRACT STAFF</li>
            <li data-filter=".filter-web">NATIONAL SEERVICE</li>
            <li data-filter=".filter-attach">ATTACHMENT</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container"  data-aos-delay="200">

      <!-- MAIN STAFF -->

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <figure>
              <img src="images/app3.jpg" class="img-fluid" alt="">
              <a href="images/app3.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Mr. Lartey Yaw Ntiri</a></h4>
              <p>DIRECTOR</p>
            </div>
          </div>
        </div>
         <!-- MAIN STAFF -->
        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/portfolio/app2.jpg" class="img-fluid" alt="">
              <a href="assets/img/portfolio/app2.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="App 2"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Mrs. Valentina Adu</a></h4>
              <p>Junior Assistant ICT Officer</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/portfolio/web3.jpg" class="img-fluid" alt="">
              <a href="assets/img/portfolio/web3.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Web 3"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">KKK</a></h4>
              <p>Web</p>
            </div>
          </div>
        </div>


        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/portfolio/card2.jpg" class="img-fluid" alt="">
              <a href="assets/img/portfolio/card2.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Card 2"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Obed Yaw Frimpong Agyeman</a></h4>
              <p>Contact Staff</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/portfolio/web2.jpg" class="img-fluid" alt="">
              <a href="assets/img/portfolio/web2.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Web 2"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Web 2</a></h4>
              <p>Web</p>
            </div>
          </div>
        </div>
         <!-- MAIN STAFF -->
        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/portfolio/app3.jpg" class="img-fluid" alt="">
              <a href="assets/img/portfolio/app3.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="App 3"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Mrs. Mercy Vincentia Adu</a></h4>
              <p>Junior Assistant ICT Officer</p>
            </div>
          </div>
        </div>
           <!-- MAIN STAFF -->
        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/portfolio/app3.jpg" class="img-fluid" alt="">
              <a href="assets/img/portfolio/app3.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="App 3"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Mr. Samuel Adoko</a></h4>
              <p>Principal Technician</p>
            </div>
          </div>
        </div>
         <!-- MAIN STAFF -->
        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/portfolio/app3.jpg" class="img-fluid" alt="">
              <a href="assets/img/portfolio/app3.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="App 3"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Mr. Francis Nana Akwasi Poku</a></h4>
              <p>Principal Technician</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/portfolio/card3.jpg" class="img-fluid" alt="">
              <a href="assets/img/portfolio/card3.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Card 3"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Emmanuel Baiden-Fletcher</a></h4>
              <p>Contract Staff</p>
            </div>
          </div>
        </div>
         <!-- MAIN STAFF -->
        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/portfolio/app3.jpg" class="img-fluid" alt="">
              <a href="assets/img/portfolio/app3.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="App 3"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Mr. Samuel Ohene Amoabeng</a></h4>
              <p>Principal Technician</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/portfolio/card1.jpg" class="img-fluid" alt="">
              <a href="assets/img/portfolio/card1.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Card 1"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Enock Adu Gyamfi</a></h4>
              <p>Contract Staff</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/portfolio/card3.jpg" class="img-fluid" alt="">
              <a href="assets/img/portfolio/card3.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Card 3"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Callistus Domesovi Cobb</a></h4>
              <p>Contract Staff</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/portfolio/card3.jpg" class="img-fluid" alt="">
              <a href="assets/img/portfolio/card3.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Card 3"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Obed Abbew Vordzorgbe</a></h4>
              <p>Contract Staff</p>
            </div>
          </div>
        </div>
         <!-- MAIN STAFF -->

         <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/portfolio/app3.jpg" class="img-fluid" alt="">
              <a href="assets/img/portfolio/app3.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="App 3"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Mr. William Wireko Brobbey</a></h4>
              <p>Sonior ICT Technician</p>
            </div>
          </div>
        </div>

        <!-- MAIN STAFF -->

         <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/portfolio/app3.jpg" class="img-fluid" alt="">
              <a href="assets/img/portfolio/app3.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="App 3"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Albert Dwamena-Opoku</a></h4>
              <p>Sonior ICT Technician</p>
            </div>
          </div>
        </div>

        <!-- MAIN STAFF -->

         <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/portfolio/app3.jpg" class="img-fluid" alt="">
              <a href="assets/img/portfolio/app3.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="App 3"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Mr. Samuel Atimbiri</a></h4>
              <p>Sonior ICT Technician</p>
            </div>
          </div>
        </div>

        <!-- MAIN STAFF -->

         <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/portfolio/app3.jpg" class="img-fluid" alt="">
              <a href="assets/img/portfolio/app3.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="App 3"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Mr. William Bonsu</a></h4>
              <p>Sonior ICT Technician</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/portfolio/web1.jpg" class="img-fluid" alt="">
              <a href="assets/img/portfolio/web1.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Web 1"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Web 1</a></h4>
              <p>Web</p>
            </div>
          </div>
        </div>
        <!-- ======attachment======== -->
        <div class="col-lg-4 col-md-6 portfolio-item filter-attach">
          <div class="portfolio-wrap">
            <figure>
              <img src="images/emma.jpg" class="img-fluid" alt="">
              <a href="images/emma.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Web 1"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">KOLOBILA EMMANUEL</a></h4>
              <p>ATTACHMENT</p>
            </div>
          </div>
        </div>


        <div class="col-lg-4 col-md-6 portfolio-item filter-attach">
          <div class="portfolio-wrap">
            <figure>
              <img src="images/dany.jpg" class="img-fluid" alt="">
              <a href="images/dany.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Web 1"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">ADJIE DANIEL</a></h4>
              <p>ATTACHMENT</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-attach">
          <div class="portfolio-wrap">
            <figure>
              <img src="images/henry.jpg" class="img-fluid" alt="">
              <a href="images/henry.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Web 1"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">BENIAKO FRIMPONG HENRY</a></h4>
              <p>ATTACHMENT</p>
            </div>
          </div>
        </div>

        <!-- MAIN STAFF -->

         <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/portfolio/app3.jpg" class="img-fluid" alt="">
              <a href="assets/img/portfolio/app3.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="App 3"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Mr. Victor Degazor</a></h4>
              <p>Assistant Registrar</p>
            </div>
          </div>
        </div>


        <div class="col-lg-4 col-md-6 portfolio-item filter-attach">
          <div class="portfolio-wrap">
            <figure>
              <img src="images/ivy.jpg" class="img-fluid" alt="">
              <a href="images/ivy.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Web 1"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">NUAMAH IVY</a></h4>
              <p>ATTACHMENT</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-attach">
          <div class="portfolio-wrap">
            <figure>
              <img src="images/joan.jpg" class="img-fluid" alt="">
              <a href="images/joan.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Web 1"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">MADEM JUAN</a></h4>
              <p>ATTACHMENT</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-attach">
          <div class="portfolio-wrap">
            <figure>
              <img src="images/red.jpg" class="img-fluid" alt="">
              <a href="images/red.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Web 1"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">COFFIE HELLENA</a></h4>
              <p>ATTACHMENT</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/portfolio/card3.jpg" class="img-fluid" alt="">
              <a href="assets/img/portfolio/card3.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Card 3"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">David Nyantakyi</a></h4>
              <p>Contract Staff</p>
            </div>
          </div>
        </div>

      </div>
      </div>
    </section>
    <?php include 'footer.php' ?>


  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>
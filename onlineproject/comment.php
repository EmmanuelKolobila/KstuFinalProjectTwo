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
  <link rel="stylesheet" type="text/css" href="css/comment.css">

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
    <div id="coverpage" style="margin-bottom: 50px;">

        <div id="head"  class="t-5 p-5">
            <!-- <div id="diff">
                <a href="index.php">
                    <div id="direction">
                        <div id="thesame"><img src="images/lft.png" id="arrowsimg"></div>
                        <div id="same">BACK</div>
                    </div>
                </a>
                <div id="therest">
                    <div id="schloolname" style="color: white;"> <b style="color: #ffff;">KUMUSI TECHNICAL UNIVERSITY HELP DESK</div>
                    <div id="sub">PLEASE THIS FORM HELPS US TO IMPROVE THE SYSTEM</div>
                </div>
            </div> -->
        </div>
        <div id="allcon">
        <div id="sider"></div>
        <div id="formid">
                
            <div id="correct">FILL WITH THE RIGHT CRIDENTIALS FOR FURTHER HELP</div>
                <form action="" method="post" id="formdiv">
                    <div>
                        <input class="form-control " type="text" name="name" id="vim" placeholder="Full name">
                    </div>
                    <div>
                        <input class="form-control" type="text" name="program" id="vim" placeholder="Program">
                    </div>
                    <div>
                        <!-- <input type="number" name="level" id="vim" placeholder="Level"> -->
                        <select class="form-control" id="vim" class="gen" name="level">
                            <option>YOUR LEVEL</option>
                            <option>100</option>
                            <option>200</option>
                            <option>300</option>
                            <option>400</option>
                        </select>
                    </div>
                    <div>
                        <input class="form-control" type="text" name="studentnumber" id="vim" placeholder="Index Number">
                    </div>
                    <div>
                        <select class="form-control" id="vim" class="gen" name="help">
                            <option >WHAT DID WE HELP YOU TO SOLVE </option>
                            <option>PORTAL PROBLEM</option>
                            <option>WIFI PROBLEM</option>
                            <option>SCHOOL FEES</option>
                            <option>VIRTUAL CLESS PROBLEM</option>
                            <option>Others</option>
                        </select> 
                    </div>

                    <div>
                        <select class="form-control" id="vim" class="gen" name="was_the_problem_solved">
                            <option>DID YOU ENJOY OUR HELP</option>
                            <option>YES</option>
                            <option>NO</option>
                        </select>
                    </div>
                    


                    
                   
                    <div>
                        <button onclick="window.alert('Form Submitted')" type="submit" id="submit" name="save">SUBMIT</button>
                    </div>

                    
            </form>
        </div>
        <div id="sider"></div>
    </div>
    </div>
    <?php include 'footer.php'?>
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
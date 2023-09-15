
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>ROYAL HEAL</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon" />
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet" />


<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top bg-black">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="index.php">Royal Heal</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="Aboutus.php">About</a></li>
          <li>
            <a class="nav-link scrollto active" href="blog.php">Blogs</a>
          </li>
          <li class="dropdown">
            <a href="#"><span>Mental Diseases</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Depression</a></li>
              <li><a href="Anxiety.html">Anxiety Disorder</a></li>
              <li><a href="#">Schizophrenia</a></li>
              <li><a href="#">Eating Disorder</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="contactus/contact-view.php">Contact Us</a></li>
          <li>
            <a class="getstarted scrollto" href="Online-Quiz/index.php">Get Started</a>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->
  <!-- ======= Blogs Section Starts ======= -->

   <h2 class="text-center text-danger text-uppercase" style="margin-top: 135px;">BLOGS</h2>
 <?php
        $connection = mysqli_connect("localhost", "root", "", "exam");
        $query = "SELECT * FROM blog_title  LIMIT 0,6";
        $query_run = mysqli_query($connection, $query);
        while ($row=mysqli_fetch_array($query_run)) {

    $blog_id = $row['blog_id'];

    $blog_title = $row['blog_title'];

    $blog_descrip = $row['blog_descrip'];

    $blog_image = $row['blog_image'];

    $status = $row['status'];

    if ($status<1) {
      
    echo "
    <section id='blogs' class='news pt-10'>
      <div class='container mt-md-4'>
        <ul class='row d-lg-flex list-unstyled image-block justify-content-center px-lg-0 mx-lg-0'>
          <li class='col-lg-4 col-md-4 image-block full-width p-3'>
            <div class='image-block-inner'>
              <a class='mh-100' href='#'>
                <img src='assets/img/Blogs/$blog_image' alt='LunarXP Wins Space Innovator of the Year Award'
                  class='img-responsive w-100'></a>
             
              <span class='hp-posts-cat'>

               $blog_title 

               </span>
              
              <h4 class='mt-3'><a href='socialanxietyblog.php'>

              $blog_descrip

              </a></h4>
              <!--  <p></p> -->
              <a href='socialanxietyblog.php' class='read-more'>Read more ></a>
            </div><!-- .image-block-inner -->
          </li><!-- ending of li -->
        

        </ul>
      </div>
    </section>"
       ;
    }

        ?>
  

    <!-- ======= Blog Ssection Ends ======= -->
    <?php
    }
    ?>

    <?php
    include("footer.php")
    ?>
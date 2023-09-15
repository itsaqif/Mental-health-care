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
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="Aboutus.php">About</a></li>
          <li>
            <a class="nav-link scrollto" href="blog.php">Blogs</a>
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
<!-- ======= Why Us Section ======= -->
<section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch order-2 order-lg-1">
            <div class="content">
              <h3>
                Why Choose Us
                <strong>may resolve your risk of mental illness</strong>
              </h3>
              <p>
                Our Mental Health Website provides professional expertise, comprehensive resources, accessibility,
                confidentiality, and compassionate support. We are committed to helping you improve your mental health
                and well-being.
              </p>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span>
                    Professional Expertise
                    ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                      Our team of mental health professionals includes licensed therapists, counselors, and
                      psychologists who have years of experience working with individuals who struggle with mental
                      health issues. They are committed to providing you with personalized and evidence-based care.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span>
                    Comprehensive Resources? <i class="bx bx-chevron-down icon-show"></i><i
                      class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      We offer a wide range of resources that cater to different mental health needs. These resources
                      include self-help tools, online therapy, support groups, and educational resources. Whether you
                      are dealing with anxiety, depression, or trauma, we have resources that can help.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span>
                    Compassionate Support? <i class="bx bx-chevron-down icon-show"></i><i
                      class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Our team is committed to providing compassionate support that is tailored to your unique needs. We
                      understand that seeking help for mental health issues can be difficult, and we strive to create a
                      safe and non-judgmental environment for you to receive the support you need.
                    </p>
                  </div>
                </li>
              </ul>
            </div>
          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
            style="background-image: url('assets/img/why-us.png')" data-aos="zoom-in" data-aos-delay="150">
            &nbsp;
          </div>
        </div>
      </div>
    </section>
    <!-- End Why Us Section -->

    <?php
    include("footer.php")
    ?>
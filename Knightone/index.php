<?php include("db.php")


  ?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Nexora</title>


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">


  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Sofia&display=swap" rel="stylesheet">


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <link href="assets/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/swiper/swiper-bundle.min.css" rel="stylesheet">

  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <script>
    function showSection(sectionId) {
      const sections = document.querySelectorAll('.menu-section');

      // Hide all sections
      sections.forEach(section => {
        section.classList.add('d-none');
      });

      // Show the selected section
      document.getElementById(sectionId).classList.remove('d-none');
    }
  </script>
  <script>
    function initMap() {
      const map = new google.maps.Map(document.getElementById("map"), {
        center: { lat: 12.999275, lng: 80.270745 },
        zoom: 15,
      });
    }
    window.initMap = initMap;
  </script>





  <nav class="navbar navbar-expand-lg fixed-top py-2 shadow-sm">
    <div class="container-fluid">
      <a class="navbar-brand mx-3" href="#">
        <h1 class="sitename" style="color: #1acc8d;">Nexora</h1>
      </a>
      <button class="navbar-toggler" id="toggle" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar" style="background-color: #1acc8d ;">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-center flex-grow-1 pe-3 gap-4 " id="navlink">
            <li class="nav-item"><a class="nav-link fw-bold  " href="#sec1" style="color: #1acc8d;">Home</a></li>
            <li class="nav-item"><a class="nav-link fw-bold  " href="#about" style="color: #1acc8d;">About</a></li>


            <li class="nav-item"><a class="nav-link fw-bold  " href="#chef" style="color: #1acc8d;">Team</a></li>
            <li class="nav-item"><a class="nav-link fw-bold  " href="#chef" style="color: #1acc8d;">Testimonial</a></li>

           
            <li class="nav-item"><a class="nav-link fw-bold " href="#contact" style="color: #1acc8d;">Contact</a></li>
          </ul>

          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a href="#table1" class="btn text-light rounded-5 px-3 py-1 mx-3" id="btn2">Book a Consultation</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

<section id="sec1" class="hero-section position-relative d-flex align-items-center justify-content-center text-light"
         style="background: url('assets/img/hero-bg.jpg') center center / cover no-repeat; height: 100vh;">
  
  <div class="overlay position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0, 0, 0, 0.5); z-index:1;"></div>

  <div id="homeCarousel" class="carousel slide carousel-fade position-relative z-2 w-100 mt-5" data-bs-ride="carousel" data-bs-interval="5000">
    <div class="carousel-inner">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="container d-flex align-items-center justify-content-center flex-column text-center h-100">
          <h1 class="fw-bold display-5">Welcome to Nexora—</h1>
          <p class="fs-5 mt-3">Your gateway to innovative digital solutions. We help businesses transform ideas into powerful online experiences.</p>
          
          <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="btn btn-outline-light mt-3"><i class="bi bi-play-circle me-2"></i>Watch Video</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="container d-flex align-items-center justify-content-center flex-column text-center h-100">
          <h1 class="fw-bold display-5">Build Beyond Boundaries</h1>
          <p class="fs-5 mt-3">Scalable solutions tailored for your business growth.</p>
          <a href="#about" class="btn btn-outline-light mt-3">Get Started</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="container d-flex align-items-center justify-content-center flex-column text-center h-100">
          <h1 class="fw-bold display-5">Your Vision, Our Mission</h1>
          <p class="fs-5 mt-3">We turn ideas into intuitive, intelligent products.</p>
          <a href="#card" class="btn btn-outline-light mt-3">Discover More</a>
        </div>
      </div>

      <!-- Slide 4 -->
      <div class="carousel-item">
        <div class="container d-flex align-items-center justify-content-center flex-column text-center h-100">
          <h1 class="fw-bold display-5">Trusted by Clients Globally</h1>
          <p class="fs-5 mt-3">Delivering excellence with commitment, passion, and purpose.</p>
          <a href="#contact" class="btn btn-outline-light mt-3">Contact Us</a>
        </div>
      </div>

    </div>

    <!-- Carousel Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>




  <section id="about" class="p-5 mt-5">
    <div class="container">
      <div class="text-center mb-5">
        <h6 class="text-uppercase text-muted" data-aos="fade-down">About Us</h6>
        <h2 id="learn" class="display-6" data-aos="fade-up" data-aos-delay="200">
          At Nexora Solutions, <span id="knight1">we specialize in crafting...</span>
        </h2>
      </div>

      <div class="row align-items-center">

        <div class="col-lg-6 mb-4 mb-lg-0">
          <img src="assets/img/cta-bg.jpg" class="img-fluid rounded shadow-sm mb-3" alt="Restaurant interior">
          <div class="d-flex flex-column justify-content-center align-items-center border border-dark border-2 p-3">
            <p class="display-6 fw-semibold" id="book">Request a Consultation<br><span id="number"
                class="display-6  fw-semibold" style="color: #1acc8d;">+1 5589 55488 55</span></p>
          </div>
        </div>


        <div class="col-lg-6">
          <p class="fst-italic text-muted display-6">
            Discover who we are and what we stand for:
          </p>
          <ul class="list-unstyled">
            <li class="mb-3">
              <i class="bi bi-check-circle-fill me-2" style="color:#1acc8d"></i>
              Over 10 years of industry experience in web design and development
            </li>
            <li class="mb-3">
              <i class="bi bi-check-circle-fill  me-2" style="color:#1acc8d"></i>
              Proven track record of delivering projects on-time and within budget
            </li>
            <li class="mb-3">
              <i class="bi bi-check-circle-fill  me-2" style="color:#1acc8d"></i>
              Focused on user-centric design and conversion-driven interfaces
            </li>
            <li>
              Over 10 years of industry experience in web design and development
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section id="card" class="py-5">

    <div class="container my-5">
      <div class="row g-4">


        <div class="col-lg-3 col-md-6 p-2 text-center" style="background-color: #1acc8d;">

          <h3 class="fw-bold mb-2 text-light">Why Choose Nexora</h3>
          <p class="text-light">At KnightOne, we help businesses transform ideas into scalable, intelligent digital
            experiences. Whether you’re a startup or an enterprise, we deliver strategic solutions that are visually
            engaging, technologically sound, and user-focused.</p>
          <a href="#" class="btn text-light rounded-pill px-4 py-2">
            Learn More<i class="bi bi-arrow-right"></i>
          </a>

        </div>
        
        <div class="col-lg-3 col-md-6">
          <div class="bg-white p-4 text-center shadow-sm rounded h-100">
            <div class="mb-3"><i class="bi bi-graph-up" style="font-size: 2rem; color: #1acc8d;"></i></div>
            <h6 class="fw-bold">Business-Centric Strategy</h6>
            <p class="text-muted">Every solution we build is tailored to deliver real business value, guided by data and
              informed decision-making.</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="bg-white p-4 text-center shadow-sm rounded h-100">
            <div class="mb-3"><i class="bi bi-gem" style="font-size: 2rem; color: #1acc8d;"></i></div>
            <h6 class="fw-bold">Innovative Design & Development</h6>
            <p class="text-muted">We blend creativity with technology to craft engaging digital experiences that users
              love and remember.</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="bg-white p-4 text-center shadow-sm rounded h-100">
            <div class="mb-3"><i class="bi bi-briefcase" style="font-size: 2rem; color: #1acc8d;"></i></div>
            <h6 class="fw-bold">End-to-End Implementation</h6>
            <p class="text-muted"> From planning to deployment, we handle every stage of your digital journey with
              precision and accountability.</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="py-5 counter-section text-white text-center mb-5" id="dish">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-3 p-3">
          <h1 class="display-5 fw-bold" id="client">232</h1>
          <p class="display-6 fw-semibold">Clients</p>
        </div>
        <div class="col-12 col-md-3 p-3">
          <h1 class="display-5 fw-bold">521</h1>
          <p class="display-6 fw-semibold">Projects</p>
        </div>
        <div class="col-12 col-md-3 p-3">
          <h1 class="display-5 fw-bold">1453</h1>
          <p class="display-6 fw-semibold">Hours of support</p>
        </div>
        <div class="col-12 col-md-3 p-3">
          <h1 class="display-5 fw-bold">32</h1>
          <p class="display-6 fw-semibold">Workers</p>
        </div>
      </div>
    </div>
  </section>

  <?php
  // Connect to PostgreSQL using pg_connect
  $conn = pg_connect("host=localhost dbname=sample user=postgres password=0805");

  if (!$conn) {
    echo "Database connection error.";
    exit;
  }

  $result = pg_query($conn, "SELECT * FROM public.testimonials ORDER BY id ASC");
  $testimonials = [];
  if ($result) {
    while ($row = pg_fetch_assoc($result)) {
      $testimonials[] = $row;
    }
  }
  ?>

  <section class="pt-5 mb-5 text-center" id="testimonials">
    <p class="text-muted">Testimonials</p>
    <h1 class="text-dark mb-5" id="what">What Are They <span style="color: #1acc8d;" id="book">Saying About Us</span>
    </h1>

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">


      <div class="carousel-indicators">
        <?php foreach ($testimonials as $index => $row): ?>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $index ?>"
            class="<?= $index === 0 ? 'active' : '' ?>" aria-current="<?= $index === 0 ? 'true' : 'false' ?>"
            aria-label="Slide <?= $index + 1 ?>"></button>
        <?php endforeach; ?>
      </div>

      <div class="carousel-inner">
        <?php foreach ($testimonials as $index => $row): ?>
          <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
            <div class="container">
              <div class="row justify-content-center p-3 mb-4">

                <div class="col-lg-6 custom-border-left" id="bl">
                  <p>
                    <i class="bi bi-quote quote-icon-left" style="color: #1acc8d;"></i>
                    <span><?= htmlspecialchars($row['message']) ?></span>
                    <i class="bi bi-quote quote-icon-right" style="color: #1acc8d;"></i>
                  </p>
                  <h3><?= htmlspecialchars($row['name']) ?></h3>
                  <p class="text-muted"><?= htmlspecialchars($row['designation']) ?></p>

                  <?php
                  $rating = intval($row['rating']);
                  for ($i = 1; $i <= 5; $i++) {
                    echo $i <= $rating
                      ? '<i class="bi bi-star-fill text-warning"></i>'
                      : '<i class="bi bi-star text-warning"></i>';
                  }
                  ?>
                </div>


                <div class="col-lg-3">
                  <img src="assets/img/testimonials-3.jpg" class="rounded-circle" style="width:200px">
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>




  <!-- <section class="pt-5 mb-5 text-center" id="testimonials">
    <p class="text-muted" data-aos="fade-up" data-aos-delay="300s">Testimonials</p>
    <h1 id="what" class="text-dark mb-5" data-aos="fade-up" data-aos-delay="300s">What Are They <span
        style="color: #1acc8d;">Saying About Us</span></h1>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">

          <div class="container">
            <div class="row justify-content-center p-3 mb-4">
              <div class="col-lg-6 custom-border-left" id="bl">
                <p>
                  <i class="bi bi-quote quote-icon-left" style="color: #1acc8d;"></i>
                  <span>KnightOne brought a refreshing approach to digital transformation. They revamped our web
                    platform
                    with a sleek UI and integrated it with our existing systems seamlessly. Their commitment to quality,
                    scalability, and post-launch support was outstanding.</span>
                  <i class="bi bi-quote quote-icon-right " style="color: #1acc8d;"></i>
                </p>
                <h3>SAUL GOODMAN</h3>
                <p class="text-muted">CEO & FOUNDER</p>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </div>
              <div class="col-lg-3">
                <img src="assets/img/testimonials-1.jpg" class="rounded-circle" style="width:200px">
              </div>
            </div>

          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="row justify-content-center p-3 mb-4">
              <div class="col-lg-6 " id="bl">
                <p>
                  <i class="bi bi-quote quote-icon-left" style="color: #1acc8d;"></i>
                  <span>Partnering with KnightOne was one of the best business decisions we made. Their team not only
                    delivered a stunning product ahead of schedule but also helped us define our digital roadmap. Their
                    communication was transparent, and every suggestion was backed by deep industry insight.</span>
                  <i class="bi bi-quote quote-icon-right" style="color: #1acc8d;"></i>
                </p>
                <h3>SARA WILLSON</h3>
                <p class="text-muted">DESIGNER</p>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </div>
              <div class="col-lg-3">
                <img src="assets/img/testimonials-2.jpg" class="rounded-circle" style="width:200px">
              </div>
            </div>

          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="row justify-content-center p-3 mb-4">
              <div class="col-lg-6 " id="bl">
                <p>
                  <i class="bi bi-quote quote-icon-left" style="color: #1acc8d;"></i>
                  <span>As a first-time founder, I was overwhelmed by the digital demands of launching my brand.
                    KnightOne
                    guided me through branding, UX strategy, and even backend integrations. Their patience and clarity
                    made the process stress-free, and the end result far exceeded my expectations</span>
                  <i class="bi bi-quote quote-icon-right" style="color: #1acc8d;"></i>
                </p>
                <h3>JENA KARLIS</h3>
                <p class="text-muted">STORE OWNER</p>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </div>
              <div class="col-lg-3">
                <img src="assets/img/testimonials-3.jpg" class="rounded-circle" style="width:200px">
              </div>
            </div>

          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>


  </section> -->

  <section class="m-5 text-center" id="chef">
    <p class="text-muted pt-4" data-aos="fade-up" data-aos-delay="300s">TEAM</p>
    <h2 id="chefs" class="text-dark" data-aos="fade-up" data-aos-delay="300s">OUR <span
        style="color: #1acc8d;">TEAM</span></h2>

    <div class="container my-5">
      <div class="d-flex justify-content-center flex-wrap gap-4">

        <div class="card" style="width: 20rem;">
          <img src="assets/img/manager.jpg" class="card-img-top">
          <div class="card-body">
            <h4>Walter White</h4>
            <span>Senior Project Manager</span>
            <p>Walter White consistently delivers high-impact results with precision and leadership. His dedication to
              excellence and team coordination sets the gold standard for performance.
          </div>
        </div>

        <div class="card" style="width: 20rem;">
          <img src="assets/img/developer.jpg" class="card-img-top">
          <div class="card-body">
            <h4>Sarah Jhonson</h4>
            <span>Lead Developer</span>
            <p> Sarah Jhonson's innovative mindset and problem-solving skills have transformed complex challenges into
              smooth digital solutions. A true pillar of our tech success.</p>
          </div>
        </div>

        <div class="card" style="width: 20rem;">
          <img src="assets/img/customer.jpg" class="card-img-top">
          <div class="card-body">
            <h4>William Anderson</h4>
            <span>Customer Relations Executive</span>
            <p>William Anderson brings empathy and efficiency to every client interaction. His outstanding communication
              and support have earned consistent praise from customers and peers alike.

            </p>
          </div>
        </div>

      </div>
    </div>


  </section>

  <section class="m-5 text-center" id="table1">
    <div class="container shadow p-4">
      <h2 id="book" class="text-dark" data-aos="fade-up" data-aos-delay="300s">BOOK YOUR <span
          style="color: #1acc8d;">CONSULATATION</span></h2>
      <div class="container my-5">
        <div class="row g-4 align-items-center">


          <div class="col-lg-4">
            <img src="assets/img/features-bg.jpg" class="img-fluid rounded-1" style="width: 100%;">
          </div>

          <div class="col-lg-6">
            <form action="book_consultation.php" method="post">
  <div class="row g-3">
    <div class="col-md-4">
      <input type="text" name="name" class="form-control" placeholder="Your Name" required>
    </div>

    <div class="col-md-4">
      <input type="email" name="email" class="form-control" placeholder="Your Email" required>
    </div>

    <div class="col-md-4">
      <input type="tel" name="phone" class="form-control" placeholder="Your Phone" required>
    </div>

    <div class="col-md-4">
      <input type="date" name="date" class="form-control" required>
    </div>

    <div class="col-md-4">
      <input type="time" name="time" class="form-control" required>
    </div>

    <div class="col-md-4">
      <input type="number" name="people" class="form-control" placeholder="# of people" min="1" required>
    </div>

    <div class="col-12">
      <textarea name="message" class="form-control" rows="4" placeholder="Message" required></textarea>
    </div>

    <div class="col-12 text-center">
      <button type="submit" class="btn btn-danger">Book</button>
    </div>
  </div>
</form>

          </div>

        </div>
      </div>
    </div>
  </section>
  <section class="mb-5 text-center" id="contact">
    <p class="text-muted" data-aos="fade-up" data-aos-delay="300s">
      CONTACT </p>
    <h2 id="contacts" class="text-dark" data-aos="fade-up" data-aos-delay="300s">NEED HELP? <span
        style="color: #1acc8d;">CONTACT US</span></h2>
    <div class="container mb-5 mt-5">
      <div class="embed-responsive embed-responsive-16by9" id="map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2975.265224936058!2d80.26711559189341!3d13.000147453949403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1749401428918!5m2!1sen!2sin"
          width="1100px" height="500px" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>

    <div class="container">
      <div class="row justify-content-center gy-4 gap-4">

        <div class="col-md-6 col-lg-4 shadow p-4">
          <div class="info-item d-flex text-start" data-aos="fade-up" data-aos-delay="200">
            <i class="icon bi bi-geo-alt-fill  display-5" style="color: #1acc8d"></i>
            <div class="mx-2">
              <h3 class="text-start text-muted">Address</h3>
              <p>A108 Adam Street, New York, NY 535022</p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 shadow p-4">
          <div class="info-item d-flex text-start" data-aos="fade-up" data-aos-delay="200">
            <i class="bi bi-telephone-fill display-5" style="color: #1acc8d"></i>
            <div class="mx-2">
              <h3 class="text-start text-muted">Call Us</h3>
              <p>+1 5589 55488 55</p>
            </div>
          </div>
        </div>

      </div>
      <div class="row justify-content-center gy-4 mt-3 gap-4">

        <div class="col-md-6 col-lg-4 shadow p-4">
          <div class="info-item d-flex text-start" data-aos="fade-up" data-aos-delay="200">
            <i class="bi bi-envelope-at-fill display-5" style="color: #1acc8d"></i>
            <div class="mx-2">
              <h3 class="text-start text-muted">Email Us</h3>
              <p>info@example.com</p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 shadow p-4">
          <div class="info-item d-flex text-start" data-aos="fade-up" data-aos-delay="200">
            <i class="bi bi-clock-fill  display-5" style="color: #1acc8d"></i>
            <div class="mx-2">
              <h3 class="text-start text-muted">Opening Hours</h3>
              <p><span class="fw-bold text-dark">Mon-Sat: </span><span class="text-dark">11AM-23PM</span><br>
                <span class="fw-bold text-dark">Sunday: </span><span class="text-dark">Closed</span>

              </p>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- <div class="container my-5 shadow p-4">
      <div class="row g-4 align-items-center">
        <div class="col-lg-6">
          <form>
            <input type="email" class="form-control p-2" id="exampleFormControlInput1" placeholder="Your Name">
          </form>
        </div>
        <div class="col-lg-6">
          <form>
            <input type="text" class="form-control p-2" id="exampleFormControlInput1" placeholder="Your Email ">
          </form>
        </div>
        <div class="col-lg-12">
          <form>
            <input type="text" class="form-control p-2" id="exampleFormControlInput1" placeholder="Subject ">
          </form>
        </div>
        <div class="col-lg-12">
          <form>
            <textarea class="form-control p-2" id="exampleFormControlInput1" rows="10"
              placeholder="Message "></textarea>
          </form>
        </div>
        <div class="col-12 text-center">
          <button type="submit" class="btn text-light rounded-5" style="background-color: #1acc8d">Submit</button>
        </div>

      </div>

    </div> -->

    <div class="container my-5 shadow p-4 col-lg-8 justify-content-center">
      <h3 class="text-center mb-5" id="feed_1">Feedback <span id="form_1" style="color: #1acc8d">Form</span> </h3>

      <div class="row g-4 justify-content-center">
        <div class="col-lg-6">
          <form action="feedback.php" method="post" enctype="multipart/form-data">
            <div class="mb-3 text-start">
              <label for="name" class="form-label">Name:</label>
              <input type="text" name="name" class="form-control shadow p-2" required>
            </div>
        </div>

        <div class="col-lg-6">
          <div class="mb-3 text-start">
            <label for="designation" class="form-label">Designation:</label>
            <input type="text" name="designation" class="form-control shadow p-2" required>
          </div>
        </div>
         <div class="row g-4 justify-content-center">
        <div class="col-lg-6">
       
          <div class="mb-3 text-start">
            <label for="message" class="form-label">Message:</label>
            <textarea name="message" class="form-control shadow p-2" rows="4" required></textarea>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="mb-3 text-start">
            <label for="rating" class="form-label">Rating:</label>
            <select name="rating" class="form-select shadow p-2" required>
              <option value="">Select Rating</option>
              <option value="1">1 Star</option>
              <option value="2">2 Stars</option>
              <option value="3">3 Stars</option>
              <option value="4">4 Stars</option>
              <option value="5">5 Stars</option>
            </select>

          </div>
</div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4">
            <button type="submit" class="btn text-light" style="background-color:#1acc8d">Submit</button>
          </div>
        </div>
        </form>
      </div>

  </section>
  <footer class="bg-dark pt-5">
    <div class="container">
      <div class="row justify-content-center gy-4">

        <div class="col-lg-3 col-md-6">
          <div class="info-item d-flex text-start">
            <i class="icon bi bi-geo-alt-fill fs-4" style="color: #1acc8d"></i>
            <div class="mx-2">
              <h5 class="text-light">Address</h5>
              <p class="text-light mb-0">A108 Adam Street, New York, NY 535022</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-item d-flex text-start">
            <i class="bi bi-telephone-fill  fs-4" style="color: #1acc8d"></i>
            <div class="mx-2">
              <h5 class="text-light">Call Us</h5>
              <p class="text-light mb-0">+1 5589 55488 55</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-item d-flex text-start">
            <i class="bi bi-envelope-at-fill  fs-4" style="color: #1acc8d"></i>
            <div class="mx-2">
              <h5 class="text-light">Email Us</h5>
              <p class="text-light mb-0">info@example.com</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <h5 class="text-light">Follow Us</h5>
          <div class="social-links d-flex gap-3 mt-2">
            <a href="#" class="twitter"><i class="bi bi-twitter-x text-light fs-5"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook text-light fs-5"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram text-light fs-5"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin text-light fs-5"></i></a>
          </div>
        </div>

      </div>


      <hr class="border-top border-secondary my-4" />


      <div class="text-center ">
        <p class="text-light py-1">
          © <span>Copyright</span> <strong class="px-1 sitename">Nexora<strong> <span>All Rights Reserved</span>
        </p>
        <p class="text-light pb-2 mb-0">
          Designed by
          <a href="https://bootstrapmade.com/" class="text-decoration-none text-light">BootstrapMade</a>
          &nbsp; Distributed by
          <a href="https://themewagon.com" class="text-decoration-none text-light">ThemeWagon</a>
        </p>
      </div>

    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
    crossorigin="anonymous"></script>

  <script src="assets/js/main.js"></script>
  <script src="assets/glightbox/js/glightbox.min.js"></script>
  <script src="assets/swiper/swiper1-bundle.min.js"></script>
</body>

</html>
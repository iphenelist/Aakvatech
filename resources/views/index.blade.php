@extends('layouts.app')

@section('content')

 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <!-- <h1 class="text-light"><a href="index.html"><span>Moderna</span></a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active " href="{{ url('/') }}">Home</a></li>
          <li><a href="{{ url('/about-us') }}">About Us</a></li>
          <li class="dropdown"><a href="#"><span>Menu</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a href="#">Our Clients</a></li>
                <li class="dropdown"><a href="#"><span>Custom Apps</span> <i class="bi bi-chevron-right"></i></a>
                  <ul>
                    <li><a href="#">HMS Tz</a></li>
                    <li><a href="#">CSF Tz</a></li>
                    <li><a href="#">EDU Tz</a></li>
                    <li><a href="#">VFD Tz</a></li>
                  </ul>
              </li>
              <li><a href="{{ url('/our-team') }}">Our Team</a></li>
            </ul>
          </li>
          <li><a href="{{ url('contact-us') }}">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Aakvatech</span></h2>
          <p class="animate__animated animate__fadeInUp">ERPNext Implementation, Consulting, Frappe Customization, Development & ERPNext Support</p>
          <a href="about.html" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">ERPNext, free and open source ERP</h2>
          <p class="animate__animated animate__fadeInUp">Is the world's best agile ERP on the planet</p>
          <a href="https://erpnext.com/" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Frappe Framework</h2>
          <p class="animate__animated animate__fadeInUp">Frappe simplifies front-end with metadata, monolithic architecture, UI.</p>
          <a href="https://frappeframework.com/" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section class="services">
      <div class="container">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box icon-box-pink">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Implementation & Support</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Consultation</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-green">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Customization</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-blue">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Development</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Why Us Section ======= -->
    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 video-box">
            <img src="assets/img/undraw_visionary_technology_re_jfp7.svg" class="img-fluid" alt="" style="padding-left: 154px; padding-top: 100px;">
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><i class="bi bi-compass"></i></div>
              <h4 class="title"><a href="">Pioneer</a></h4>
              <p class="description">We are a leading technology solutions provider in Africa. We help businesses of all sizes transform their processes and achieve their goals through the use of ERPNext, a powerful open-source ERP platform.</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bi bi-lightbulb""></i></div>
              <h4 class="title"><a href="">Expertise</a></h4>
              <p class="description">We have a deep understanding of the African market and can help businesses seamlessly integrate ERPNext with their local requirements. We are an invaluable partner for businesses that are looking to evolve and gain a competitive edge in the digital era.</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Features Section ======= -->
    <section class="features">
      <div class="container">

        <div class="section-title">
          <h2>Nearly all of what you require.</h2>
          <p>Is the world's best agile ERP on the planet.</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="assets/img/AM-transformed3f.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-4">
            <h3>Accounting Management</h3>
            <p class="fst-italic">
              ERPNext provides Accounting module enables businesses to handle financial transactions, track expenses, manage budgets, and generate financial statements. It provides a clear overview of the company's financial health.
            </p>
            <ul>
              <li><i class="bi bi-check"></i> Financial Transactions Handling.</li>
              <li><i class="bi bi-check"></i> Financial Health Overview.</li>
            </ul>
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="assets/img/SM-transformed.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
            <h3>Sales Management</h3>
            <p class="fst-italic">
              Sales Management in ERPNext assists in managing the entire sales process, from lead generation to order fulfillment. It helps track leads, create quotations, process sales orders, and manage customer interactions.
            </p>
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="assets/img/IM-transformed.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5">
            <h3>Inventory Managent</h3>
            <p>ERPNext provides Inventory Managent facilitates inventory management by tracking stock levels, monitoring item movements, managing warehouses, and automating stock replenishment.</p>
            <ul>
              <li><i class="bi bi-check"></i> Stock Tracking and Monitoring.</li>
              <li><i class="bi bi-check"></i> Warehouse Management.</li>
              <li><i class="bi bi-check"></i> Automated Stock Replenishment.</li>
            </ul>
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="assets/img/hrm-transformed.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
            <h3>Human Resources Management (HRM)</h3>
            <p class="fst-italic">
              ERPNext includes Human Resources Management that module covers employee management, attendance tracking, leave management, payroll processing, and employee performance evaluation.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

  </main><!-- End #main -->


@endsection

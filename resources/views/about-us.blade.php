@extends("layouts.page")

@section('content')

<main id="main">

    <!-- ======= About Us Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>About Us</h2>
          <ol>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li>About Us</li>
          </ol>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= About Section ======= -->
    <section class="about" data-aos="fade-up">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/africabg.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3>About Us.</h3>
            <p class="fst-italic">
              The organization is a leader in African technology solutions, offering expert consultation, implementation strategies, and localization support for ERPNext. They aim to facilitate transformative change for businesses, enhancing efficiency and growth. Their expertise in ERPNext and understanding of African market dynamics make them a valuable partner for businesses seeking a competitive edge in the digital era.
            </p>
            <ul>
              <li><i class="bi bi-check2-circle"></i>Leadership in Technology Solutions.</li>
              <li><i class="bi bi-check2-circle"></i> Facilitating Transformative Change.</li>
              <li><i class="bi bi-check2-circle"></i>Valuable Partner for Digital Success.</li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section class="facts section-bg" data-aos="fade-up">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Number of Employees</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
            <p>Annual Invoices</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
            <p>Number of SKUs</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p>Number of Warehouses</p>
          </div>

        </div>

      </div>
    </section><!-- End Facts Section -->


    <!-- ======= Tetstimonials Section ======= -->
    <section class="testimonials" data-aos="fade-up">
      <div class="container">

        <div class="section-title">
          <h2>Timeline</h2>
        </div>

        <div class="testimonials-carousel swiper">
          <div class="swiper-wrapper">
            <div class="testimonial-item swiper-slide">
              <img src="assets/img/operation.png" class="testimonial-img" alt="">
              <h3>January 1, 2019</h3>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Operationalised
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>

            <div class="testimonial-item swiper-slide">
              <img src="assets/img/undraw_runner_start_x-0-uu.svg" class="testimonial-img" alt="">
              <h3>February 1, 2019</h3>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                First Customer Onboarded
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>

            <div class="testimonial-item swiper-slide">
              <img src="assets/img/erpp.png" class="testimonial-img" alt="">
              <h3>April 15, 2019</h3>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Became ERPNext Partner
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>

            <div class="testimonial-item swiper-slide">
              <img src="assets/img/10.jpeg" class="testimonial-img" alt="">
              <h3>March 31, 2020</h3>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                10 Successful ERP Implementation
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>

            <div class="testimonial-item swiper-slide">
              <img src="assets/img/20.jpeg" class="testimonial-img" alt="">
              <h3>September 30, 2020</h3>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                20 Successful ERP Implementation
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>

            <div class="testimonial-item swiper-slide">
              <img src="assets/img/erpp.png" class="testimonial-img" alt="">
              <h3>August 1, 2021</h3>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Became Silver Partner
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>


            <div class="testimonial-item swiper-slide">
              <img src="assets/img/ERP.png" class="testimonial-img" alt="">
              <h3>July 18, 2022</h3>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Became Gold Partner
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>


            <div class="testimonial-item swiper-slide">
              <img src="assets/img/50.jpeg" class="testimonial-img" alt="">
              <h3>October 31, 2022</h3>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                50 Successful ERP Implementation
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Ttstimonials Section -->

  </main><!-- End #main -->


@endsection

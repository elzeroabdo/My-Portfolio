<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Abdelaziz fathy resume</title>
  <meta content="abdelaziz fathy portfolio" name="description">
  <meta content="abdelaziz fathy portfolio" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- cv Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <style>
    /* Hero */
#hero{
 background-image:url("https://images.unsplash.com/photo-1484417894907-623942c8ee29?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3wzNTc5fDB8MXxzZWFyY2h8Mjh8fHdlYiUyMHxlbnwwfHx8fDE3MDM4MzUwMDB8MA&ixlib=rb-4.0.3&q=80&w=2560");
}
/* Iframe */
#contact .info iframe{
 width:466px;
 height:313px;
}

@media (max-width:575px){

/* Iframe */
#contact .info iframe{
 width:389px;
}

}
  </style>

</head>

<body>

    @foreach ($infos as $me)




  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="{{ asset('storage/' .$me->avatar) }}" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">{{ $me->name }}</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="{{$me->twitter}}" class="twitter"target="_blank"><i class="bx bxl-twitter"></i></a>
          <a href="{{$me->facebook}}" class="facebook"target="_blank"><i class="bx bxl-facebook"></i></a>
          <a href="{{$me->linkedin}}" class="linkedin"target="_blank"><i class="bx bxl-linkedin"></i></a>
            <a href="{{$me->github}}" class="github"target="_blank"><i class="bx bxl-github"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
          <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
          <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>
          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
          {{-- download cv --}}
            <li><a href="{{ asset('storage/' .$me->cv) }}" download="cv" class="nav-link scrollto"><i class="bx bx-download"></i> <span>Download CV</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>{{ $me->name }}</h1>
      <p>I'm <span class="typed" data-typed-items="{{ $me->jop }}"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
            <p>{{ $me->about }}</p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="{{ asset('storage/' .$me->avatar) }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>{{ $me->jop }}</h3>
            <p class="fst-italic">
                {{ $me->resume }}
                </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>1 September 1997</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>{{ $me->website }}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>{{ $me->phone }}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>{{ $me->address }}</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{ $me->age }}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>{{ $me->degree }}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>PhEmailone:</strong> <span>{{ $me->email }}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                </ul>
              </div>
            </div>
           <!--  <p>
              I am a web developer and a machine learning engineer. I have a bachelor's degree in information systems administration. I have been working as a web developer for 3 years. I have experience in PHP Laravel, JavaScript, Python, and Machine Learning. I am a hard worker and a fast learner. I am looking for a job that will help me improve my skills and gain more experience.
            </p> -->

          </div>
        </div>

      </div>
    </section><!-- End About Section -->
{{--
    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
      <div class="container">

        <div class="section-title">
          <h2>Facts</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="16" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Happy Clients</strong> </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="{{count($projects)}}" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Projects</strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="126" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Hours Of Support</strong> </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Hard Workers</strong> </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Facts Section --> --}}

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Skills</h2>
{{--           <p>this is my skills</p>
 --}}
        </div>

        <div class="row skills-content">

            {{-- start skills --}}
            @foreach($skills as $skill)
                <div class="col-lg-6" data-aos="fade-up">

                    <div class="progress">
                        <span class="skill">{{ $skill->name }} <i class="val">{{ $skill->percent }}%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skill->percent }}" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                </div>
            @endforeach
            {{-- end skills --}}





            </div>

          </div>

        </div>


<!-- ======= Resume Section ======= -->
<section id="resume" class="resume">
  <div class="container">

    <div class="section-title">
      <h2>Resume</h2>

    </div>

    <div class="row">
      <div class="col-lg-6" data-aos="fade-up">
        <h3 class="resume-title">Summary</h3>
        <div class="resume-item pb-0">
          <h4>{{ $me->name }}</h4>
          <p><em>{{ $me->resume }}</em></p>
          <ul>
            <li>{{ $me->address }}</li>
            <li>Email: {{ $me->email }}</li>
            <li>Phone: {{ $me->phone }}</li>
          </ul>
        </div>

        <h3 class="resume-title">Education</h3>
        {{-- start --}}
        @foreach($educations as $education)
            <div class="resume-item">
                <h4>{{ $education->education }}</h4>
                <h5>{{ $education->date }}</h5>
                <p><em>{{ $education->school }}</em></p>
            </div>
        @endforeach
        {{-- end --}}
      </div>
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <h3 class="resume-title">Professional Experience</h3>
        {{-- start exp --}}
        @foreach($experiences as $experience)
            <div class="resume-item">
                <h4>{{ $experience->experience }}</h4>
                <h5>{{ $experience->date }}</h5>
                <p><em>{{ $experience->company }}</em></p>
                {!! $experience->content !!}

            </div>
        @endforeach
        {{-- end exp --}}
      </div>
    </div>

  </div>
</section><!-- End Resume Section -->


    <!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio section-bg">
    <div class="container">

        <div class="section-title">
            <h2>Portfolio</h2>
{{--             <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
 --}}        </div>

        <div class="row" data-aos="fade-up">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    @foreach($categories as $category)
                        <li data-filter=".filter-{{ strtolower($category->name) }}">{{ $category->name }}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
            @foreach($projects as $project)
                <div class="col-lg-4 col-md-6 portfolio-item filter-{{ strtolower($project->category->name) }}">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('storage/' .$project->image) }}" class="img-fluid" alt="{{ $project->name }}">
                        <div class="portfolio-links">
                            <a href="{{ asset('storage/' .$project->image) }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{ $project->name }}"><i class="bx bx-plus"></i></a>
                            {{-- <a href="{{ route('project.details', ['id' => $project->id]) }}" title="More Details"><i class="bx bx-link"></i></a> --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section><!-- End Portfolio Section -->

<!-- ======= Services Section ======= -->
<section id="services" class="services">
  <div class="container">

    <div class="section-title">
      <h2>Services</h2>
      <p>Explore the range of services I offer. From web development to database management and more, I'm here to bring your ideas to life.</p>
    </div>

    <div class="row">
        {{-- start serv --}}
        @foreach($services as $service)
            <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                <div class="icon"><i class="{{ $service->icon }}"></i></div>
                <h4 class="title"><a href="#">{{ $service->name }}</a></h4>
                <p class="description">{{ $service->excerpt }}</p>
            </div>
        @endforeach

    </div>

  </div>
</section><!-- End Services Section -->


   {{--  <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="100">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="200">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="300">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="400">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section --> --}}

    <!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container">

    <div class="section-title">
      <h2>Contact</h2>
      <p>Feel free to get in touch! Whether you have questions, suggestions, or just want to say hello, I'd love to hear from you.</p>
    </div>

    <div class="row" data-aos="fade-in">

      <div class="col-lg-5 d-flex align-items-stretch">
        <div class="info">
          <div class="address">
            <i class="bi bi-geo-alt"></i>
            <h4>Location:</h4>
            <p>{{ $me->address }}</p>
          </div>

          <div class="email">
            <i class="bi bi-envelope"></i>
            <h4>Email:</h4>
            <p>{{ $me->email }}</p>
          </div>

          <div class="phone">
            <i class="bi bi-phone"></i>
            <h4>Call:</h4>
            <p>{{ $me->phone }}</p>
          </div>

          <!-- Replace the iframe with your map or remove it if not needed -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27513.559670428953!2d31.209021212560046!3d30.458915581894537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145875f6592ee989%3A0xa0f7a3872335c0ce!2z2KjZhtmH2KfYjCDZgtiz2YUg2KjZhtmH2KfYjCDYqNmG2YfYp9iMINmF2K3Yp9mB2LjYqSDYp9mE2YLZhNmK2YjYqNmK2Kk!5e0!3m2!1sar!2seg!4v1703835870499!5m2!1sar!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>

      </div>

      <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
        <form action="#" method="post" role="form" class="php-email-form">
            @csrf
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

          <div class="row">
            <div class="form-group col-md-6">
              <label for="name">Your Name</label>
              <input type="text" name="name" class="form-control" id="name" required>
            </div>
            <div class="form-group col-md-6">
              <label for="email">Your Email</label>
              <input type="email" class="form-control" name="email" id="email" required>
            </div>
          </div>
          <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" class="form-control" name="subject" id="subject" required>
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" name="message" rows="10" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
      </div>

    </div>

  </div>
</section><!-- End Contact Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Abdelaziz fathy 2022</span></strong>
      </div>
    </div>
  </footer><!-- End  Footer -->

    @endforeach

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

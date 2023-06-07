<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Garage V.Parrot</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('HomePageTemplate/assets/img/favicon.png')}}" rel="icon">
    <link href="{{asset('HomePageTemplate/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('HomePageTemplate/assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('HomePageTemplate/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('HomePageTemplate/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('HomePageTemplate/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('HomePageTemplate/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- HomePageTemplate Main CSS File -->
    <link href="{{asset('HomePageTemplate/assets/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
  * HomePageTemplate Name: Garage V.Parrot
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * HomePageTemplate URL: https://bootstrapmade.com/Garage V.Parrot-bootstrap-business-HomePageTemplate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex justify-content-between">

            <div class="logo">
                <!-- Uncomment below if you prefer to use an text logo -->
                <!-- <h1><a href="index.html">Garage V.Parrot</a></h1> -->
                <a href="index.html"><img src="{{asset('HomePageTemplate/assets/img/logo.jpg')}}" alt="" class="img-fluid"></a>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Accueil</a></li>
                    <li><a class="nav-link scrollto" href="#about">À propos</a></li>
                    <li><a class="nav-link scrollto" href="#services">Services</a></li>
                    <li><a class="nav-link scrollto " href="#portfolio">Véhicules d’occasion</a></li>
                    <li><a class="nav-link scrollto" href="#team">Équipe</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- #header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="clearfix">
        <div class="container" data-aos="fade-up">

            <div class="hero-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="{{asset('HomePageTemplate/assets/img/hero-img.png')}}" alt="" class="img-fluid">
            </div>

            <div class="hero-info" data-aos="zoom-in" data-aos-delay="100">
                <h2>Réparation et vente de véhicules d'occasion,<br><span> notre expertise</span><br> à votre service!</h2>
                <div>
                    <a href="/login" class="btn-get-started scrollto">Commancer</a>
                    <a href="#services" class="btn-services scrollto">Notre Services</a>
                </div>
            </div>

        </div>
    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about">
            <div class="container" data-aos="fade-up">
                <header class="section-header">
                    <h3>À propos de nous</h3>
                    <p>Notre garage dédié à la réparation et à la vente de véhicules d'occasion est votre destination de confiance pour tous vos besoins automobiles.</p>
                </header>
                <div class="row about-container">
                    <div class="col-lg-6 content order-lg-1 order-2">
                        <p>Que vous ayez besoin de réparer votre véhicule actuel ou de trouver une voiture d'occasion fiable, nous sommes là pour vous accompagner.</p>
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bi bi-hammer"></i></div>
                            <h4 class="title"><a href="">Réparation</a></h4>
                            <p class="description">Notre équipe expérimentée de mécaniciens qualifiés est prête à résoudre tous les problèmes mécaniques que votre voiture peut rencontrer. Nous mettons en œuvre notre expertise et utilisons les derniers équipements pour assurer des réparations de haute qualité. Votre sécurité et votre satisfaction sont notre priorité absolue.</p>
                        </div>
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="bi bi-car-front"></i></div>
                            <h4 class="title"><a href="">Vente</a></h4>
                            <p class="description">Si vous êtes à la recherche d'une voiture d'occasion, nous vous proposons un large choix de véhicules soigneusement sélectionnés. Chaque voiture dans notre inventaire est rigoureusement inspectée pour assurer sa qualité et sa fiabilité.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 background order-lg-2" data-aos="zoom-in">
                        <img src="https://cdni.iconscout.com/illustration/premium/thumb/woman-car-mechanic-3865864-3236911.png" class="img-fluid large-image" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="section-bg">
            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h3>Services</h3>
                    <p>Proposez-vous des services de réparation automobile de qualité ? Faites confiance à notre garage pour prendre soin de votre véhicule et résoudre tous les problèmes mécaniques avec expertise et professionnalisme.</p>
                </header>

                <div class="row justify-content-center" style="display: flex; flex-wrap: wrap; margin-top: 20px;">
                    @foreach ($services as $service)
                    <div class="col-md-6 col-lg-4 mb-4" data-aos="zoom-in" data-aos-delay="100" style="display: flex;">
                        <div class="card" style="display: flex; flex-direction: column; height: 100%;">
                            <div class="image" style="flex: 0 0 auto;">
                                <img src="{{ asset('services_images/' . $service->image) }}" alt="Service Image" style="width: 100%; height: auto;">
                            </div>
                            <div class="content" style="flex: 1 0 auto; padding: 20px;">
                                <h4 class="title" style="margin-top: 0;"><a href="">{{$service->name}}</a></h4>
                                <p class="description" style="margin-bottom: 0;">{{$service->description}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>


            </div>
        </section>
        <!-- End Services Section -->


        <!-- End Why Us Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="clearfix">
            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h3 class="section-title">Véhicules d’occasion</h3>
                </header>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-card">Card</li>
                            <li data-filter=".filter-web">Web</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{asset('HomePageTemplate/assets/img/portfolio/app1.jpg')}}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html">App 1</a></h4>
                                <p>App</p>
                                <div>
                                    <a href="{{asset('HomePageTemplate/assets/img/portfolio/app1.jpg')}}" data-gallery="portfolioGallery" title="App 1" class="portfolio-lightbox link-preview"><i class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{asset('HomePageTemplate/assets/img/portfolio/web3.jpg')}}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html">Web 3</a></h4>
                                <p>Web</p>
                                <div>
                                    <a href="{{asset('HomePageTemplate/assets/img/portfolio/web3.jpg')}}" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery" title="Web 3"><i class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{asset('HomePageTemplate/assets/img/portfolio/app2.jpg')}}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html">App 2</a></h4>
                                <p>App</p>
                                <div>
                                    <a href="{{asset('HomePageTemplate/assets/img/portfolio/app2.jpg')}}" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery" title="App 2"><i class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{asset('HomePageTemplate/assets/img/portfolio/card2.jpg')}}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html">Card 2</a></h4>
                                <p>Card</p>
                                <div>
                                    <a href="{{asset('HomePageTemplate/assets/img/portfolio/card2.jpg')}}" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery" title="Card 2"><i class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{asset('HomePageTemplate/assets/img/portfolio/web2.jpg')}}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html">Web 2</a></h4>
                                <p>Web</p>
                                <div>
                                    <a href="{{asset('HomePageTemplate/assets/img/portfolio/web2.jpg')}}" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery" title="Web 2"><i class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{asset('HomePageTemplate/assets/img/portfolio/app3.jpg')}}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html">App 3</a></h4>
                                <p>App</p>
                                <div>
                                    <a href="{{asset('HomePageTemplate/assets/img/portfolio/app3.jpg')}}" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery" title="App 3"><i class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{asset('HomePageTemplate/assets/img/portfolio/card1.jpg')}}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html">Card 1</a></h4>
                                <p>Card</p>
                                <div>
                                    <a href="{{asset('HomePageTemplate/assets/img/portfolio/card1.jpg')}}" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery" title="Card 1"><i class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{asset('HomePageTemplate/assets/img/portfolio/card3.jpg')}}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html">Card 3</a></h4>
                                <p>Card</p>
                                <div>
                                    <a href="{{asset('HomePageTemplate/assets/img/portfolio/card3.jpg')}}" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery" title="Card 3"><i class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{asset('HomePageTemplate/assets/img/portfolio/web1.jpg')}}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html">Web 1</a></h4>
                                <p>Web</p>
                                <div>
                                    <a href="{{asset('HomePageTemplate/assets/img/portfolio/web1.jpg')}}" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery" title="Web 1"><i class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="section-bg">
            <div class="container" data-aso="zoom-in">

                <header class="section-header">
                    <h3>Témoignages</h3>
                </header>

                <div class="row justify-content-center">
                    <div class="col-lg-8">

                        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <img src="{{asset('HomePageTemplate/assets/img/testimonial-1.jpg')}}" class="testimonial-img" alt="">
                                        <h3>Saul Goodman</h3>
                                        <h4>Ceo &amp; Founder</h4>
                                        <p>
                                            Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <img src="{{asset('HomePageTemplate/assets/img/testimonial-2.jpg')}}" class="testimonial-img" alt="">
                                        <h3>Sara Wilsson</h3>
                                        <h4>Designer</h4>
                                        <p>
                                            Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <img src="{{asset('HomePageTemplate/assets/img/testimonial-3.jpg')}}" class="testimonial-img" alt="">
                                        <h3>Jena Karlis</h3>
                                        <h4>Store Owner</h4>
                                        <p>
                                            Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <img src="{{asset('HomePageTemplate/assets/img/testimonial-4.jpg')}}" class="testimonial-img" alt="">
                                        <h3>Matt Brandon</h3>
                                        <h4>Freelancer</h4>
                                        <p>
                                            Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <img src="{{asset('HomePageTemplate/assets/img/testimonial-5.jpg')}}" class="testimonial-img" alt="">
                                        <h3>John Larson</h3>
                                        <h4>Entrepreneur</h4>
                                        <p>
                                            Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                                        </p>
                                    </div>
                                </div><!-- End testimonial item -->

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Team Section ======= -->
        <section id="team">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h3>Équipe
                    </h3>
                    <p>Notre équipe est composée de professionnels de l'automobile chevronnés et passionnés, dévoués à leur métier</p>
                </div>

                <div class="row">

                    @foreach($users as $user)
                    <div class="col-lg-3 col-md-6" data-aos="zoom-out" data-aos-delay="100">
                        <div class="member">
                            <img src="{{ asset('employee_admin_images/' . $user->image) }}" class="img-fluid user-image" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>{{ $user->name }}</h4>
                                    <span>{{ $user->role->name }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach





                </div>

            </div>
        </section><!-- End Team Section -->


        <!-- ======= Contact Section ======= -->
        <section id="contact">
            <div class="container-fluid " data-aos="fade-up">

                <div class="section-header">
                    <h3>Contactez-nous</h3>
                </div>

                <div class="row">

                    <div class="col-lg-6">
                        <div class="map mb-4 mb-lg-0">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 340px;" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-md-5 info">
                                <i class="bi bi-geo-alt"></i>
                                <p>A108 Adam Street, NY 535022</p>
                            </div>
                            <div class="col-md-4 info">
                                <i class="bi bi-envelope"></i>
                                <p>info@example.com</p>
                            </div>
                            <div class="col-md-3 info">
                                <i class="bi bi-phone"></i>
                                <p>+1 5589 55488 55</p>
                            </div>
                        </div>

                        <div class="form">
                            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                    </div>
                                    <div class="form-group col-lg-6 mt-3 mt-lg-0">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                                </div>
                                <div class="form-group mt-3">
                                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                                </div>
                                <div class="my-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>
                                <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
                            </form>
                        </div>
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

                    <div class="col-lg-4 col-md-6 footer-info">
                        <h3>Garage V.Parrot</h3>
                        <p>
                            Est un garage automobile de premier plan spécialisé dans les services de réparation et de vente.
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>LIENS UTILES</h4>
                        <ul>


                            <li><a href="#hero">Accueil</a></li>
                            <li><a href="#about">À propos</a></li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#portfolio">Véhicules d’occasion</a></li>
                            <li><a href="#team">Équipe</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contactez-nous</h4>
                        <p>
                            A108 Adam Street <br>
                            New York, NY 535022<br>
                            United States <br>
                            <strong>Téléphone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> vincentp@garagevparrot.com<br>
                        </p>

                        <div class="social-links">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>

                    </div>

                    <div class="col-lg-3 col-md-6 footer-newsletter opening-hours">
                        <h4>Horaires d'ouvertures</h4>
                        <p>
                            @foreach ($openingHours as $openingHour)
                            <span>{{$openingHour->day->name}}:</span> {{$openingHour->time}}<br>
                            @endforeach
                        </p>




                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>Garage V.Parrot</strong>. Tous les droits sont réservés
            </div>

        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{asset('HomePageTemplate/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
    <script src="{{asset('HomePageTemplate/assets/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('HomePageTemplate/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('HomePageTemplate/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('HomePageTemplate/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('HomePageTemplate/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('HomePageTemplate/assets/vendor/php-email-form/validate.js')}}"></script>

    <!-- HomePageTemplate Main JS File -->
    <script src="{{asset('HomePageTemplate/assets/js/main.js')}}"></script>

</body>

</html>

<style>
    .card {
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .card .image {
        flex: 0 0 auto;
    }

    .card .content {
        flex: 1 0 auto;
        padding: 20px;
    }

    .user-image {
        width: 300px;
        /* Adjust the width as per your requirement */
        height: 200px;
        /* Adjust the height as per your requirement */
    }

    .large-image {
        width: 80%;
        height: auto;

    }

    .opening-hours {
        margin-bottom: 20px;
    }

    .opening-hours h4 {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .opening-hours p {
        font-size: 14px;
        line-height: 1.5;
    }

    .opening-hours span {
        font-weight: bold;
        margin-right: 10px;
    }
</style>
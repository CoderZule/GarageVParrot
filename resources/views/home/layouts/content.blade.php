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
                        <li data-filter=".filter-app">
                            Kilométrage
                            <input type="range" class="form-range" id="customRange1" min="50000" max="160000" value="50000" step="1000">
                            <span id="startMileage">50000</span>Km&nbsp;&nbsp;&nbsp;-
                            <span id="endMileage">160000</span>Km
                        </li>
                        <li data-filter=".filter-app">
                            Prix
                            <input type="range" class="form-range" id="customRange2" min="5000" max="40000" value="5000" step="1000">
                            <span id="startPrice">5,000</span>€&nbsp;&nbsp;&nbsp;-
                            <span id="endPrice">40,000</span>€
                        </li>
                        <li data-filter=".filter-app">
                            Années
                            <input type="range" class="form-range" id="customRange3" min="2001" max="2022" value="2001" step="1">
                            <span id="startYear">2001</span>&nbsp;&nbsp;&nbsp;-
                            <span id="endYear">2022</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                @foreach ($vehicles as $vehicle)
                @php
                $images = explode(',', $vehicle->image); // Split the image column by comma
                $firstImage = trim($images[0]); // Get the first image
                @endphp

                <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-price="{{ $vehicle->price }}" data-mileage="{{ $vehicle->mileage }}" data-year="{{ $vehicle->releaseYear }}">
                    <div class="portfolio-wrap">
                        <div class="price-tag">{{ $vehicle->price }} €</div>

                        <img src="{{ asset('vehicles_images/'. $firstImage) }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>
                                <a href="" data-toggle="modal" data-target="#carModal{{ $vehicle->id }}">Détails</a>
                            </h4>
                        </div>
                    </div>
                </div>


                <!-- View Modal -->
                @include('home.details')
                @endforeach



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
<style>
    #startMileage,
    #endMileage,
    #startPrice,
    #endPrice,
    #startYear,
    #endYear {
        margin-left: 10px;
        font-weight: bold;
    }
</style>

<script>
    const mileageInput = document.getElementById('customRange1');
    const startMileage = document.getElementById('startMileage');
    const endMileage = document.getElementById('endMileage');

    mileageInput.addEventListener('input', function() {
        const value = mileageInput.value;
        startMileage.textContent = value;
        filterVehicles();
    });

    const priceInput = document.getElementById('customRange2');
    const startPrice = document.getElementById('startPrice');
    const endPrice = document.getElementById('endPrice');

    priceInput.addEventListener('input', function() {
        const value = priceInput.value;
        startPrice.textContent = numberWithCommas(value);
        filterVehicles();
    });

    const yearInput = document.getElementById('customRange3');
    const startYear = document.getElementById('startYear');
    const endYear = document.getElementById('endYear');

    yearInput.addEventListener('input', function() {
        const value = yearInput.value;
        startYear.textContent = value;
        filterVehicles();
    });

    function numberWithCommas(number) {
        return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }

    function filterVehicles() {
        const priceValue = parseInt(priceInput.value.replace('.', ''));
        const mileageValue = parseInt(mileageInput.value.replace('.', ''));
        const yearValue = parseInt(yearInput.value);

        const vehicles = document.querySelectorAll('.portfolio-item');

        vehicles.forEach(vehicle => {
            const vehiclePrice = parseInt(vehicle.getAttribute('data-price').replace('.', ''));
            const vehicleMileage = parseInt(vehicle.getAttribute('data-mileage'));
            const vehicleYear = parseInt(vehicle.getAttribute('data-year'));

            if (
                vehiclePrice >= priceValue &&
                vehicleMileage >= mileageValue &&
                vehicleYear >= yearValue
            ) {
                vehicle.style.display = 'block';
            } else {
                vehicle.style.display = 'none';
            }
        });
    }
</script>
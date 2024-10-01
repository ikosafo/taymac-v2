<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



include ('includes/header.php');?>

    <div class="blog-header background-image position-relative text-white background-no-repeat background-size-cover background-center" data-image-src="<?php echo URLROOT ?>/assets/images/hero.webp" style="background-image: url('<?php echo URLROOT ?>/assets/images/hero.webp');">
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.6); z-index: 0;"></div>
        
        <div class="container position-relative z-1">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-8 text-center">
                    <div class="bg-soft-primary d-inline-block fw-medium mb-3 rounded-pill section-header__subtitle text-capitalize text-white">
                        REALTORS YOU CAN TRUST
                    </div>
                    <h3 class="fw-semibold display-5 text-white">
                        <span class="underline position-relative text-primary">Expert Solutions</span> for Property Management, Health and Safety, and Farming.
                    </h3>
                </div>
            </div>
        </div>
    </div>


    <div class="bg-white py-5 angled lower-start wrapper">
        <div class="container py-4">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="section-header text-center mb-5 aos-init aos-animate" data-aos="fade-down">
                        <div class="bg-soft-primary d-inline-block fw-medium mb-3 rounded-pill section-header__subtitle text-capitalize text-primary">Our Approach</div>
                        <h4 class="h4 fw-semibold mb-3 section-header__title text-capitalize">We embrace a proactive CAN DO mindset, tackling challenges head-on.</h4>
                        <div class="sub-title fs-16">Our commitment to continuous improvement drives us to seek innovative solutions for both our team and our systems.</div>
                    </div>
                </div>
            </div>
            <div class="row g-4 g-md-5 justify-content-center work-process">
                <div class="col-sm-6 col-lg-4">
                    <div class="work-process position-relative p-3 px-xl-5 aos-init aos-animate" data-aos="fade" data-aos-delay="300">
                        <div class="step-box position-relative d-inline-block mb-4 d-flex gap-3">
                            <div class="fs-5 text-dark fw-semibold">01/</div>
                            <i class="fs-50 fa-solid fa-map-location text-primary"></i>
                        </div>
                        <div class="step-desc">
                            <h4 class="fs-20 fw-semibold">Find Your Ideal Property in Prime Locations.</h4>
                            <p>Discover your perfect property in highly sought-after areas, where convenience, comfort, and community align to provide the best living and investment opportunities.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="work-process position-relative p-3 px-xl-5 aos-init aos-animate" data-aos="fade" data-aos-delay="400">
                        <div class="step-box position-relative d-inline-block mb-4 d-flex gap-3">
                            <div class="fs-5 text-dark fw-semibold">02/</div>
                            <i class="fs-50 fas fa-calendar-alt text-primary"></i>
                        </div>
                        <div class="step-desc">
                            <h4 class="fs-20 fw-semibold">Schedule a Visit with Our Expert Agents.</h4>
                            <p>Arrange an appointment at your convenience with one of our dedicated agents. We're prepared to offer personalized insights and tailored solutions to help you make informed decisions.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="work-process position-relative p-3 px-xl-5 aos-init aos-animate" data-aos="fade" data-aos-delay="500">
                        <div class="step-box position-relative d-inline-block mb-4 d-flex gap-3">
                            <div class="fs-5 text-dark fw-semibold">03/</div>
                            <i class="fs-50 fas fa-igloo text-primary"></i>
                        </div>
                        <div class="step-desc">
                            <h4 class="fs-20 fw-semibold">Experience Tailored Real Estate Solutions.</h4>
                            <p>Partner with our experienced team to receive customized real estate solutions designed to meet your specific goals, ensuring a seamless and successful property search or transaction.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="py-5 bg-gradient-primary">
        <div class="container pt-5">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="section-header text-center mb-5" data-aos="fade-down">
                        <div class="bg-soft-primary d-inline-block fw-medium mb-3 rounded-pill section-header__subtitle text-capitalize text-primary">Featured Properties</div>
                        <h4 class="h4 fw-semibold mb-3 section-header__title text-capitalize">Discover Our Handpicked Selection of Premier Properties.</h4>
                       </div>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-sm-6 col-lg-4 col-xl-3 d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                    <div class="border-0 card card-property rounded-3 shadow w-100 flex-fill overflow-hidden">
                        <a href="#" class="card-link"></a>
                        <div class="property-img card-image-hover overflow-hidden">
                            <img src="<?php echo URLROOT ?>assets/images/hero.webp" alt="" class="img-fluid">
                            <div class="bg-white card-property-badge d-inline-block end-1 fs-13 fw-semibold position-absolute property-tags px-2 py-1 rounded-3 text-dark top-1">
                                For Rent
                            </div>
                        </div>
                        <div class="card-property-content-wrap d-flex flex-column h-100 position-relative p-4">
                           <h4 class="property-card-title mb-3">Accra, Ghana</h4>
                            <div class="card-property-description mb-3">Mix of town houses and apartments</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3 d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                    <div class="border-0 card card-property rounded-3 shadow w-100 flex-fill overflow-hidden">
                        <a href="#" class="card-link"></a>
                        <div class="property-img card-image-hover overflow-hidden">
                            <img src="<?php echo URLROOT ?>assets/images/pr1.webp" alt="" class="img-fluid">
                            <div class="bg-white card-property-badge d-inline-block end-1 fs-13 fw-semibold position-absolute property-tags px-2 py-1 rounded-3 text-dark top-1">
                                For Rent
                            </div>
                        </div>
                        <div class="card-property-content-wrap d-flex flex-column h-100 position-relative p-4">
                            <h4 class="property-card-title mb-3">Airport - Accra, Ghana</h4>
                            <div class="card-property-description mb-3">Office Space</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3 d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
                    <div class="border-0 card card-property rounded-3 shadow w-100 flex-fill overflow-hidden">
                        <a href="#" class="card-link"></a>
                        <div class="property-img card-image-hover overflow-hidden">
                            <img src="<?php echo URLROOT ?>assets/images/pr2.webp" alt="" class="img-fluid">
                            <div class="bg-white card-property-badge d-inline-block end-1 fs-13 fw-semibold position-absolute property-tags px-2 py-1 rounded-3 text-dark top-1">
                                For Rent
                            </div>
                        </div>
                        <div class="card-property-content-wrap d-flex flex-column h-100 position-relative p-4">
                            <h4 class="property-card-title mb-3">East Legon - Accra, Ghana</h4>
                            <div class="card-property-description mb-3">Apartments</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3 d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="600">
                    <div class="border-0 card card-property rounded-3 shadow w-100 flex-fill overflow-hidden">
                        <a href="#" class="card-link"></a>
                        <div class="property-img card-image-hover overflow-hidden">
                            <img src="<?php echo URLROOT ?>assets/images/pr3.webp" alt="" class="img-fluid">
                            <div class="bg-white card-property-badge d-inline-block end-1 fs-13 fw-semibold position-absolute property-tags px-2 py-1 rounded-3 text-dark top-1">
                                For Rent
                            </div>
                        </div>
                        <div class="card-property-content-wrap d-flex flex-column h-100 position-relative p-4">
                            <h4 class="property-card-title mb-3">Accra, Ghana</h4>
                            <div class="card-property-description mb-3">Office Installations</div>
                        </div>
                    </div>
                </div>
                
            </div>

            <a href="property-management">
                <button type="button" class="btn btn-primary btn-lg hstack mx-auto mt-5 gap-2" data-aos="fade-up">
                    <span>Browse More Properties</span>
                    <span class="vr"></span>
                    <i class="fa-arrow-right fa-solid fs-14"></i>
                </button>
            </a>
           
        </div>
    </div>

    <div class="py-5 bg-grey">
            <div class="container py-4">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="section-header text-center mb-5 aos-init aos-animate" data-aos="fade-down">
                            <h2 class="h1 fw-semibold mb-3 section-header__title text-capitalize">Why choose <span class="underline position-relative text-primary">TAYMAC</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item border-0 mb-3 rounded-4">
                                <h2 class="accordion-header">
                                    <button class="accordion-button fs-5 p-4 text-dark collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        No hidden fees
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body p-4 pt-0">
                                    We believe in complete transparency. With us, you can rest assured that there are no surprise costs or hidden charges. Every fee is clearly outlined upfront, so you know
                                     exactly what to expect. Our goal is to provide a seamless and trustworthy experience, ensuring you get the best value for your investment without any financial surprises.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 mb-3 rounded-4">
                                <h2 class="accordion-header">
                                    <button class="accordion-button fs-5 p-4 text-dark collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Property Appraisal
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body p-4 pt-0">
                                        Our expert property appraisal services help you make informed decisions, whether you're buying, selling, or renting. We provide accurate, up-to-date valuations based on local market trends and property conditions, ensuring you get the best possible insight into the true worth of any property. Trust our experienced team to guide you in making smart property investments.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 mb-3 rounded-4">
                                <h2 class="accordion-header">
                                    <button class="accordion-button fs-5 p-4 text-dark collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Large Coverage
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body p-4 pt-0">
                                        With an extensive portfolio that spans across multiple cities and regions, we offer unparalleled access to a wide range of properties. Whether you’re looking for a home in the heart of the city, a peaceful suburban retreat, or a prime investment opportunity in a growing market, our large coverage ensures we have options to meet every need and lifestyle across various locations.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- Start Newslatter -->
    <div class="bg-primary newslatter position-relative py-5 mx-3 mx-xl-5 rounded-4 position-relative overflow-hidden">
        <div class="container p-4 position-relative z-1">
            <div class="row">
                <div class="col-md-10 offset-md-1">
               
                    <div class="section-header text-center mb-5" data-aos="fade-down"> 
                        <div class="bg-white d-inline-block fw-medium mb-3 rounded-pill section-header__subtitle text-capitalize text-primary">Our Latest Articles</div>             
                        <h4 class="h4 fw-semibold mb-3 section-header__title text-capitalize text-white">Subscribe to get most recent updates and periodic newsletters</h4>
                     </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-8">
                    <div class="row g-4 align-items-end newslatter-form">
                        <div class="col-sm">
                            <!-- Start Form Group -->
                            <div class="form-group">
                                <label class="text-white bg-primary fw-semibold">Full Name</label>
                                <input type="text" class="form-control bg-transparent">
                            </div>
                            <!-- /. End Form Group -->
                        </div>
                        <div class="col-sm">
                            <!-- Start Form Group -->
                            <div class="form-group">
                                <label class="text-white bg-primary">Enter Email</label>
                                <input type="email" class="form-control bg-transparent">
                            </div>
                            <!-- /. End Form Group -->
                        </div>
                        <div class="col-sm-auto">
                            <!-- Start Button -->
                            <button type="button" class="btn btn-lg btn-light w-100">Subscribe</button>
                            <!-- /. End Button -->
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <div class="card-sketch">
            <img src="<?php echo URLROOT ?>/assets/img/png-img/house-sketch.png" alt="" class="card-sketch-image">
        </div>
    </div>
    <!-- /.End Newslatter -->

<?php include ('includes/footer.php'); ?>
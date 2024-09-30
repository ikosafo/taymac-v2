<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


include ('includes/header.php');?>

<div class="main-content">
		<div class="border-bottom py-3">
			<div class="container">
				<!-- Start Breadcrumbs -->
				<div class="row gy-2 gx-4 gx-md-5">
					<h4 class="col-auto fs-18 fw-semibold mb-0 page-title text-capitalize">About Us</h4>
					<div class="border-start col-auto">
						<ol class="align-items-center breadcrumb fw-medium mb-0">
							<li class="breadcrumb-item d-flex align-items-center">
								<a href="/" class="text-decoration-none"> <i class="fa-solid fa-house-chimney-crack fs-18"></i> </a>
							</li>
							<li class="breadcrumb-item d-flex align-items-center active" aria-current="page">Our Story</li>
						</ol>
					</div>
				</div>
				<!-- End Breadcrumbs -->
			</div>
		</div>

        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-xl-4 d-xl-flex align-items-xl-center bg-primary px-3 py-5 px-sm-5 px-md-3 px-xxl-5 counter-content__two background-image" data-image-src="<?php echo URLROOT ?>assets/img/png-img/section-bg.png" style="background-image: url(&quot;<?php echo URLROOT ?>assets/img/png-img/section-bg.png&quot;);">
                    <div class="row g-0 text-center position-relative counter-content__dot">
                        <div class="col-6 col-md-3 col-xl-6 p-3 p-sm-4 p-md-3 p-xxl-5">
                            <p class="fw-semibold mb-0 text-white">We prioritize the protection of both the environment and individuals, ensuring that every workplace remains safe and productive</p>
                        </div>
                        <div class="col-6 col-md-3 col-xl-6 p-3 p-sm-4 p-md-3 p-xxl-5">
                            <p class="fw-semibold mb-0 text-white">We aim to share our commitment and enthusiasm with those around us, fostering a collaborative spirit and encouraging others to embrace our value</p>
                        </div>
                        <div class="col-6 col-md-3 col-xl-6 p-3 p-sm-4 p-md-3 p-xxl-5">
                            <p class="fw-semibold mb-0 text-white">
                            We embrace a <em>CAN DO</em> approach to tackle any challenges that come our way</p>
                        </div>
                        <div class="col-6 col-md-3 col-xl-6 p-3 p-sm-4 p-md-3 p-xxl-5">
                            <p class="fw-semibold mb-0 text-white">
                            We are continually seeking opportunities to improve ourselves and our systems</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <!-- Start About Video Section -->
                    <div class="about-video home-about_video position-relative">
                        <!-- Image Parallax -->
                        <div class="simpleParallax simple-parallax-initialized" style="overflow: hidden;"><img src="<?php echo URLROOT ?>assets/images/ab1.webp" alt="" class="about-img image-parallax" style="transform: translate3d(0px, 9px, 0px) scale(1.3); will-change: transform; transition: transform 0.6s cubic-bezier(0, 0, 0, 1);"></div>
                        <a class="popup-youtube align-items-center d-flex justify-content-center position-absolute rounded-circle start-50 top-50 video-icon z-1" href="https://www.youtube.com">
                            <i class="fa-solid fa-play fs-20"></i>
                        </a>
                    </div>
                    <!-- /.End About Video Section -->
                </div>
            </div>
        </div>
		
		
        <div class="py-5 border-top position-relative">
        <div class="container py-4 position-relative">
            <div class="row">
                <div class="col-md-10 offset-md-1 background-image" data-image-src="<?php echo URLROOT ?>assets/img/world-map.png" style="background-image: url(&quot;assets/img/world-map.png&quot;);">
                    <div class="section-header text-center mb-5 aos-init aos-animate" data-aos="fade-down">
                        <div class="bg-soft-primary d-inline-block fw-medium mb-3 rounded-pill section-header__subtitle text-capitalize text-primary">Testimonials</div>
                        <h2 class="h1 fw-semibold mb-3 section-header__title text-capitalize">See what our <span class="underline position-relative text-primary">clients</span> have to say</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg mb-4 mb-lg-0 align-self-end">
                    <div class="border-0 card rounded-4 shadow aos-init aos-animate" data-aos="fade" data-aos-delay="300">
                        <div class="card-body p-4 p-xxl-5">
                            <p>Your creative work is superb, much better than the original and exactly what we want. Also your project management skills on budgeting, scheduling, client communication, and follow-through. A professional job, start to finish.</p>
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="mb-1 fw-semibold">Tina & James</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg mb-4 mb-lg-0 align-self-end">
                    <div class="border-0 card rounded-4 shadow aos-init aos-animate" data-aos="fade" data-aos-delay="300">
                        <div class="card-body p-4 p-xxl-5">
                            <p>I declare a standing ovation!...I hope you know that I think you are fantastic, and I feel extremely lucky to have you. I can't tell you how much I have enjoyed working with you.</p>
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="mb-1 fw-semibold">Mary</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg mb-4 mb-lg-0 align-self-end">
                    <div class="border-0 card rounded-4 shadow aos-init aos-animate" data-aos="fade" data-aos-delay="300">
                        <div class="card-body p-4 p-xxl-5">
                            <p>Have we told you lately that we love working with you? Your thoroughness and fairness is awesome. You are so easy to work with.</p>
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="mb-1 fw-semibold">Paul & Susan</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5 position-relative text-center z-1 aos-init" data-aos="fade-up">
                <a href="contact" class="btn btn-primary btn-lg d-inline-flex hstack gap-2">
                    <span>Contact Us</span>
                    <span class="vr"></span>
                    <i class="fa-arrow-right fa-solid fs-14"></i>
                </a>
            </div>
        </div>
        <!-- Start Section Sketch -->
        <div class="bottom-0 end-0 position-absolute section-sketch">
            <img src="<?php echo URLROOT ?>assets/img/png-img/section-sketch.png" class="img-fluid" alt="">
        </div>
        <!-- /. End Section Sketch -->
    </div>
	
	</div>


<?php include ('includes/footer.php'); ?>
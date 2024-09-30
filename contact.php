<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


include ('includes/header.php');?>

    <div class="main-content">
		<div class="border-bottom py-3">
			<div class="container">
				<div class="row gy-2 gx-4 gx-md-5">
					<h4 class="col-auto fs-18 fw-semibold mb-0 page-title text-capitalize">Contact Us</h4>
					<div class="border-start col-auto">
						<ol class="align-items-center breadcrumb fw-medium mb-0">
							<li class="breadcrumb-item d-flex align-items-center">
								<a href="/" class="text-decoration-none"> <i class="fa-solid fa-house-chimney-crack fs-18"></i> </a>
							</li>
							<li class="breadcrumb-item d-flex align-items-center active" aria-current="page">Contact</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		<!-- Start Map Content -->
		<div class="map-content">
			<!-- Start Map -->
            <iframe
  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.41412345!2d-0.1770726!3d5.6128054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fbb123456789!2sSenchi+St,+Accra!5e0!3m2!1sen!2sus!4v1633012345678!5m2!1sen!2sus&maptype=satellite" 
  width="100%" 
  height="450" 
  style="border:0;" 
  allowfullscreen="" 
  loading="lazy">
</iframe>


			<!-- /.End Map -->
		</div>
		<div class="contact-info">
			<div class="container">
				<div class="row g-4 justify-content-center">
					<div class="col-sm-6 col-lg-4 d-flex">
						<div class="border-0 card flex-fill rounded-3 shadow w-100 aos-init aos-animate" data-aos="fade" data-aos-delay="300">
							<div class="card-body p-4 text-center">
								<div class="box-icon"> <i class="fa-headset fa-solid fs-40 mb-4 text-primary"></i> </div>
								<h4>Call us</h4>
								<p class="fs-15">WE WILL LOVE TO HEAR FROM YOU</p>
								<div class="d-grid gap-2 d-xl-block">
									<div class="border d-inline-block fw-medium px-3 py-1 rounded text-primary"><i class="fa-solid fa-phone me-2"></i>+233 (0) 245-710-614</div>
                                    <div class="border d-inline-block fw-medium px-3 py-1 rounded text-primary mt-2"><i class="fa-solid fa-phone me-2"></i>+233 (0) 302-789-025</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-4 d-flex">
						<div class="border-0 card flex-fill rounded-3 shadow w-100 aos-init aos-animate" data-aos="fade" data-aos-delay="400">
							<div class="card-body p-4 text-center">
								<div class="box-icon"> <i class="fa-envelope-circle-check fa-solid fs-40 mb-4 text-danger"></i> </div>
								<h4>Email us</h4>
								<p class="fs-15">WE'D LOVE TO HEAR FROM YOU! FEEL FREE TO DROP US AN EMAIL.</p>
								<a href="mailto:info@taymac.net" class="fw-medium"><i class="fa-solid fa-envelope me-2"></i>info@taymac.net</a>
                               </div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-4 d-flex">
						<div class="border-0 card flex-fill rounded-3 shadow w-100 aos-init aos-animate" data-aos="fade" data-aos-delay="500">
							<div class="card-body p-4 text-center">
								<div class="box-icon"> <i class="fa-map-marker fa-solid fs-40 mb-4 text-warning"></i> </div>
								<h4>Location</h4>
								<p class="fs-15">COME VISIT US - WE'D BE THRILLED TO MEET YOU IN PERSON!</p>
                                <p>
                                    Ground Floor Le Pierre, <br>
                                    14 Choice Close off Senchi Street, <br>
                                    Airport Residential Area, Accra
                                </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


<?php include ('includes/footer.php'); ?>
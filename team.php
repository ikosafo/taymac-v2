<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


include ('includes/header.php');?>

<div class="main-content">
        <div class="border-bottom py-3">
            <div class="container">
                <div class="row gy-2 gx-4 gx-md-5">
                    <h4 class="col-auto fs-18 fw-semibold mb-0 page-title text-capitalize">About Us</h4>
                    <div class="border-start col-auto">
                        <ol class="align-items-center breadcrumb fw-medium mb-0">
                            <li class="breadcrumb-item d-flex align-items-center">
                                <a href="/" class="text-decoration-none"> <i class="fa-solid fa-house-chimney-crack fs-18"></i> </a>
                            </li>
                            <li class="breadcrumb-item d-flex align-items-center active" aria-current="page">Team</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Agent Content -->
        <div class="py-5">
            <div class="container py-4">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <!-- Start Section Header Title -->
                        <div class="section-header text-center mb-5">
                            <!-- Start Section Header title -->
                            <h2 class="h1 fw-semibold mb-3 section-header__title text-capitalize">Meet Our <span class="underline position-relative text-primary">Team</span></h2>
                            <!-- /.End Section Header Title -->
                        <!--/. End Section Header -->
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xxl-3">
                       
                        <div class="agent-card shadow p-4 rounded-4 text-center position-relative">
                            <a href="team1" class="card-link"></a>
                            <h5 class="mt-4 mb-1">MR. JOSHUA M.K. KPAKPAH (Jnr.)</h5>
                           <div class="text-primary fw-medium">DIRECTOR</div>
                           <div class="d-flex flex-wrap gap-2 justify-content-center mt-3 position-relative z-1">
                                <button type="button" class="btn btn-outline-default btn-sm fw-medium">
                                    <i class="fa fa-user-tie fs-14 fs-e me-1"></i>info@taymac.net
                                </button>
                                <button type="button" class="btn btn-outline-default btn-sm fw-medium">
                                    <i class="fa fa-phone fs-14 me-1"></i>+ 233 (0) 266-107-130
                                </button>
                            </div>
                            <hr class="mt-3">
                            <p class="mb-1">Mr. Kpakpah holds a Bachelor of Arts degree in Geography and Resource Development. He is a licensed Customs House Agent and a trained Project Management Professional, currently pursuing certification and licensing. Additionally, he possesses the NEBOSH International General Certificate in Safety and Health and is a registered IOSH-approved trainer, which enables him to deliver Managing Safely courses globally. Mr. Kpakpah is also undergoing training to become a Lead Auditor for OHSAS 18001 and ISO 14001 standards. </p>
                            <p>He has over 17 years of work experience, including four years in logistics handling, port clearing, warehousing, and supply chain management for a multinational company in Ghana.
                            </p>
                            <button type="button" class="btn btn-primary btn-sm hstack mx-auto mt-3 gap-2" data-aos="fade-up">
                                <span>Read More</span>
                                <span class="vr"></span>
                                <i class="fa-arrow-right fa-solid fs-14"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xxl-3">
                       
                        <div class="agent-card shadow p-4 rounded-4 text-center position-relative">
                            <a href="team2" class="card-link"></a>
                            <h5 class="mt-4 mb-1">MR. MAXMILLAN KOFI MADDY</h5>
                           <div class="text-primary fw-medium">CONSULTANT</div>
                           <div class="d-flex flex-wrap gap-2 justify-content-center mt-3 position-relative z-1">
                                <button type="button" class="btn btn-outline-default btn-sm fw-medium">
                                    <i class="fa fa-user-tie fs-14 fs-e me-1"></i>info@taymac.net
                                </button>
                                <button type="button" class="btn btn-outline-default btn-sm fw-medium">
                                    <i class="fa fa-phone fs-14 me-1"></i>00447860271867
                                </button>
                            </div>
                            <hr class="mt-3">
                            <p class="mb-1">Maxmillan Kofi Maddy is a qualified Technician Safety and Health Practitioner who holds the NEBOSH Construction and Risk Management Certificate. In addition to this, he possesses several specialized qualifications, including Risk Assessor and COSHH (Control of Substances Hazardous to Health) Assessor. He is also certified as a City and Guilds Train the Trainer, enabling him to effectively deliver training programs in safety and health practices.</p>
                            <p>He has 10 years of experience in the Health and Safety industry, including 6 years as a Health and Safety Systems Owner for Boots Alliance Plc, a multinational manufacturing company specializing in pharmaceuticals and wellness products. Additionally, he has spent 4 years working as a Health and Safety Advisor within local government. </p>
                            <button type="button" class="btn btn-primary btn-sm hstack mx-auto mt-3 gap-2" data-aos="fade-up">
                                <span>Read More</span>
                                <span class="vr"></span>
                                <i class="fa-arrow-right fa-solid fs-14"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /. End Agent Content -->
    </div>

<?php include ('includes/footer.php'); ?>
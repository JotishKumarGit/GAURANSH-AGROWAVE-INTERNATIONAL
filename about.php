<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GAURANSH AGROWAVE INTERNATIONAL</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/style.css">


</head>

<body>

    <!-- Header -->
    <?php include('header.php') ?>


    <!-- bread crumb sections -->
    <!-- <section class="breadcrumb-section">
        <div class="breadcrumb-content">
            <h1>About Us</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
    </section> -->


    <!-- HERO SECTION -->
    <section class="about-hero">
        <div class="content" data-aos="fade-up" data-aos-duration="1500">
            <h1 class="display-4 fw-bold">About Us</h1>
            <p class="lead">Committed to providing high-quality organic products for global markets.</p>
        </div>
    </section>

    <!-- COMPANY OVERVIEW -->
    <section class="who-we-are-section py-5" style="background: linear-gradient(135deg, #e8f5e9, #f1f8f3);">
        <div class="container" data-aos="fade-up">
            <div class="row align-items-center g-4">

                <!-- Image Column -->
                <div class="col-md-6 text-center text-md-start">
                    <div class="image-wrapper position-relative overflow-hidden rounded-4 shadow-lg">
                        <img src="assets/img/baner_Curry_Leaves.jpg" class="img-fluid rounded-4 who-img"
                            alt="Company Image">
                    </div>
                </div>

                <!-- Text Column -->
                <div class="col-md-6">
                    <h2 class="fw-bold text-success mb-3">Who We Are</h2>
                    <p class="lead text-muted">
                        GAURANSH AGROWAVE INTERNATIONAL has over <strong>4 years of experience</strong> in the Exim
                        industry.
                        Our dedicated team of <strong>4 employees</strong> ensures top-notch service and premium quality
                        products.
                    </p>
                    <p class="text-muted">
                        We specialize in exporting Vermicompost, Curry Leaves, Moringa Powder, and other organic
                        products worldwide.
                        We are committed to excellence in <strong>quality, color, and packaging</strong>, making our
                        products stand out in international markets.
                    </p>

                    <!-- Feature Highlights -->
                    <div class="row g-3 mt-3">
                        <div class="col-12 col-md-6">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-award-fill text-success fs-3 me-3"></i>
                                <div>
                                    <h6 class="mb-0 fw-semibold">Premium Quality</h6>
                                    <small class="text-muted">Organic & carefully sourced</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-palette-fill text-success fs-3 me-3"></i>
                                <div>
                                    <h6 class="mb-0 fw-semibold">Vibrant Colors</h6>
                                    <small class="text-muted">Naturally appealing products</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-box-seam-fill text-success fs-3 me-3"></i>
                                <div>
                                    <h6 class="mb-0 fw-semibold">Safe Packaging</h6>
                                    <small class="text-muted">Hygienic & export-ready</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-globe2 text-success fs-3 me-3"></i>
                                <div>
                                    <h6 class="mb-0 fw-semibold">Global Reach</h6>
                                    <small class="text-muted">Serving international markets</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- USP SLIDER SECTION -->
    <section class="usp-section py-5">
        <div class="container" data-aos="fade-up">

            <div class="text-center mb-5">
                <h2 class="fw-bold text-success">Our Unique Selling Points</h2>
                <p class="text-muted">Why our products and services are trusted worldwide</p>
            </div>

            <!-- Bootstrap Slider -->
            <div id="uspCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">

                    <!-- Slide 1 - Quality -->
                    <div class="carousel-item active">
                        <div class="row justify-content-center">
                            <div class="col-md-6 col-lg-4">
                                <div class="card usp-card text-center p-4 shadow border-0 rounded-4">
                                    <i class="bi bi-award-fill mb-3 usp-icon"></i>
                                    <h3 class="fw-semibold">Quality</h3>
                                    <p class="text-muted">
                                        We ensure premium quality organic products, carefully sourced and processed for
                                        the best results.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 - Colour -->
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-md-6 col-lg-4">
                                <div class="card usp-card text-center p-4 shadow border-0 rounded-4">
                                    <i class="bi bi-palette-fill mb-3 usp-icon"></i>
                                    <h3 class="fw-semibold">Colour</h3>
                                    <p class="text-muted">
                                        Vibrant, natural colors that meet international standards and enhance product
                                        appeal.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 - Packaging -->
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-md-6 col-lg-4">
                                <div class="card usp-card text-center p-4 shadow border-0 rounded-4">
                                    <i class="bi bi-box-seam-fill mb-3 usp-icon"></i>
                                    <h3 class="fw-semibold">Packaging</h3>
                                    <p class="text-muted">
                                        Modern, hygienic, and attractive packaging ensuring safety and freshness during
                                        export.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Custom Arrow Controls -->
                <button class="carousel-control-prev custom-arrow" type="button" data-bs-target="#uspCarousel"
                    data-bs-slide="prev">
                    <i class="bi bi-chevron-left"></i>
                </button>

                <button class="carousel-control-next custom-arrow" type="button" data-bs-target="#uspCarousel"
                    data-bs-slide="next">
                    <i class="bi bi-chevron-right"></i>
                </button>

            </div>
        </div>
    </section>


        <!-- footer -->
    <?php include('footer.php') ?>
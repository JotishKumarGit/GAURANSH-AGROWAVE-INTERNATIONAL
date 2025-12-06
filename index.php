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

    <!-- HERO SECTION START -->
    <section class="hero-section d-flex align-items-center"
        style="height: 100vh; background: url('assets/img/Vermicompost.jpg') center/cover no-repeat; position: relative;">
        <!-- Overlay -->
        <div class="overlay"
            style="position: absolute; top:0; left:0; width:100%; height:100%; background: rgba(0,0,0,0.5);"></div>

        <!-- Hero Content -->
        <div class="container text-center text-white position-relative" data-aos="fade-up" data-aos-duration="1500">
            <h1 class="display-4 fw-bold mb-3" data-aos="fade-down" data-aos-delay="200">Grow Your Farm, Grow Your
                Future</h1>
            <p class="lead mb-4" data-aos="fade-up" data-aos-delay="400">Premium organic products and sustainable
                solutions for modern farmers.</p>
            <a href="contact.php" class="btn btn-lg btn-success rounded-pill" data-aos="zoom-in"
                data-aos-delay="600">Get
                Started</a>
        </div>
    </section>
    <!-- HERO SECTION END -->

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

    <!-- products sections  -->
    <section class="products-section py-5" style="background: #f1f8e9;">
        <div class="container" data-aos="fade-up">

            <!-- Section Title -->
            <div class="text-center mb-5">
                <h2 class="fw-bold" style="color:#2e7d32;">Our Products</h2>
                <p>Delivering premium organic products with quality you can trust.</p>
            </div>

            <div class="row g-4">

                <!-- Vermicompost -->
                <div class="col-md-4">
                    <div class="product-card p-4 text-center shadow rounded" data-aos="zoom-in" data-aos-delay="200">

                        <img src="assets/img/Vermicompost.jpg" class="img-fluid rounded mb-3" alt="Vermicompost">

                        <h4 class="fw-bold" style="color:#1b5e20;">Vermicompost</h4>

                        <p>100% organic, nutrient-rich vermicompost that enhances soil fertility
                            and boosts crop productivity.</p>

                        <a href="vermicompost.php" class="btn btn-success rounded-pill px-4 mt-2">
                            Details
                        </a>
                    </div>
                </div>

                <!-- Curry Leaves -->
                <div class="col-md-4">
                    <div class="product-card p-4 text-center shadow rounded" data-aos="zoom-in" data-aos-delay="400">

                        <img src="assets/img/Curry_Leaves.jpg" class="img-fluid rounded mb-3" alt="Curry Leaves">

                        <h4 class="fw-bold" style="color:#1b5e20;">Fresh Curry Leaves</h4>

                        <p>Handpicked green aromatic curry leaves exported with premium freshness
                            and hygienic packaging.</p>

                        <a href="curry_leaves.php" class="btn btn-success rounded-pill px-4 mt-2">
                            Details
                        </a>
                    </div>
                </div>

                <!-- Moringa Powder -->
                <div class="col-md-4">
                    <div class="product-card p-4 text-center shadow rounded" data-aos="zoom-in" data-aos-delay="600">

                        <img src="assets/img/Moringa_Powder.webp" class="img-fluid rounded mb-3" alt="Moringa Powder">

                        <h4 class="fw-bold" style="color:#1b5e20;">Moringa Powder</h4>

                        <p>Pure and high-nutrient moringa powder finely processed for global
                            export-quality standards.</p>

                        <a href="moringa_powder.php" class="btn btn-success rounded-pill px-4 mt-2">
                            Details
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- faq  -->
    <section class="faq-section py-5" style="background:#f1f8e9;">
        <div class="container" data-aos="fade-up">

            <!-- Title -->
            <div class="text-center mb-5">
                <h2 class="fw-bold" style="color:#1b5e20;">Frequently Asked Questions</h2>
                <p>Find answers to common questions about our products and export services.</p>
            </div>

            <!-- FAQ Accordion -->
            <div class="accordion" id="faqAccordion">

                <!-- Q1 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq1">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#answer1">
                            1. What products do you export?
                        </button>
                    </h2>
                    <div id="answer1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            We export premium Vermicompost, Fresh Curry Leaves, and Moringa Powder to multiple
                            international markets.
                        </div>
                    </div>
                </div>

                <!-- Q2 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#answer2">
                            2. Do you provide custom packaging?
                        </button>
                    </h2>
                    <div id="answer2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes, we offer fully customizable packaging including labeling, pouch size, and export-grade
                            material.
                        </div>
                    </div>
                </div>

                <!-- Q3 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq3">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#answer3">
                            3. What is your minimum order quantity (MOQ)?
                        </button>
                    </h2>
                    <div id="answer3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            MOQ depends on the product, but we usually start from 50–100 kg for international customers.
                        </div>
                    </div>
                </div>

                <!-- Q4 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq4">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#answer4">
                            4. Do you ship worldwide?
                        </button>
                    </h2>
                    <div id="answer4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes, we export globally and handle international logistics, packaging, and documentation.
                        </div>
                    </div>
                </div>

                <!-- Q5 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq5">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#answer5">
                            5. How do you ensure product quality?
                        </button>
                    </h2>
                    <div id="answer5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            We perform strict quality checks on color, purity, freshness, and packaging before every
                            export.
                        </div>
                    </div>
                </div>

                <!-- Q6 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq6">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#answer6">
                            6. How long does shipping take?
                        </button>
                    </h2>
                    <div id="answer6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Delivery time varies by country, typically between 7 to 25 days depending on destination.
                        </div>
                    </div>
                </div>

                <!-- Q7 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq7">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#answer7">
                            7. Are your products organic?
                        </button>
                    </h2>
                    <div id="answer7" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes, all our products are natural and chemical-free, sourced from organic farms and
                            sustainable processes.
                        </div>
                    </div>
                </div>

                <!-- Q8 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq8">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#answer8">
                            8. What documents do you provide for exports?
                        </button>
                    </h2>
                    <div id="answer8" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            We provide Invoice, Packing List, Certificate of Origin, Fumigation Certificate, and other
                            required export documents.
                        </div>
                    </div>
                </div>

                <!-- Q9 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq9">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#answer9">
                            9. Can I order samples before bulk purchase?
                        </button>
                    </h2>
                    <div id="answer9" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes, we provide product samples so you can check quality before placing bulk orders.
                        </div>
                    </div>
                </div>

                <!-- Q10 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq10">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#answer10">
                            10. How can I contact you for business enquiries?
                        </button>
                    </h2>
                    <div id="answer10" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            You can reach us through the Contact page, send us an enquiry message, or email us directly
                            anytime.
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- blog -->
    <section class="blog-section py-5" style="background: #f0f8f5;">
        <div class="container" data-aos="fade-up">

            <!-- Section Title -->
            <div class="text-center mb-5">
                <h2 class="fw-bold" style="color:#1b5e20;">Latest Blogs</h2>
                <p class="text-muted">Stay updated with our agricultural insights, export news, and organic product
                    knowledge.</p>
            </div>

            <div class="row g-4">

                <!-- Blog 1 -->
                <div class="col-md-4">
                    <div class="blog-card shadow rounded overflow-hidden position-relative" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="blog-img-wrapper position-relative overflow-hidden">
                            <img src="assets/img/Vermicompost.jpg" class="img-fluid blog-img" alt="Blog Image">
                            <div class="blog-overlay d-flex align-items-center justify-content-center">
                                <a href="contact.php" class="btn btn-outline-light rounded-pill">Read More</a>
                            </div>
                        </div>
                        <div class="p-4 bg-white">
                            <h4 class="fw-bold text-success">Benefits of Using Organic Vermicompost</h4>
                            <p class="text-muted">Learn how vermicompost improves soil fertility, boosts growth, and
                                promotes sustainable farming.</p>
                        </div>
                    </div>
                </div>

                <!-- Blog 2 -->
                <div class="col-md-4">
                    <div class="blog-card shadow rounded overflow-hidden position-relative" data-aos="zoom-in"
                        data-aos-delay="400">
                        <div class="blog-img-wrapper position-relative overflow-hidden">
                            <img src="assets/img/baner_Curry_Leaves.jpg" class="img-fluid blog-img" alt="Blog Image">
                            <div class="blog-overlay d-flex align-items-center justify-content-center">
                                <a href="contact.php" class="btn btn-outline-light rounded-pill">Read More</a>
                            </div>
                        </div>
                        <div class="p-4 bg-white">
                            <h4 class="fw-bold text-success">Why Fresh Curry Leaves Are in High Global Demand</h4>
                            <p class="text-muted">Discover the increasing export demand for fresh, aromatic curry leaves
                                across the world.</p>
                        </div>
                    </div>
                </div>

                <!-- Blog 3 -->
                <div class="col-md-4">
                    <div class="blog-card shadow rounded overflow-hidden position-relative" data-aos="zoom-in"
                        data-aos-delay="600">
                        <div class="blog-img-wrapper position-relative overflow-hidden">
                            <img src="assets/img/Moringa_Powder.webp" class="img-fluid blog-img" alt="Blog Image">
                            <div class="blog-overlay d-flex align-items-center justify-content-center">
                                <a href="contact.php" class="btn btn-outline-light rounded-pill">Read More</a>
                            </div>
                        </div>
                        <div class="p-4 bg-white">
                            <h4 class="fw-bold text-success">The Power of Moringa: A Superfood for the World</h4>
                            <p class="text-muted">Explore the health benefits, export demand, and global popularity of
                                moringa powder.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ================== GALLERY SECTION ================== -->
    <section class="gallery-section py-5">
        <div class="container">
            <h2 class="text-center gallery-title">
                Our <span>Gallery</span>
            </h2>

            <div class="row g-4 gallery-wrapper justify-content-center align-items-center">

                <!-- Gallery Item -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="gallery-img">
                        <img src="assets/img/baner_Curry_Leaves.jpg" height="auto" width="100%" alt="Organic Farming">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="gallery-img">
                        <img src="assets/img/Curry_Leaves.jpg" height="auto" width="100%" alt="Vermicompost">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="gallery-img">
                        <img src="assets/img/Moringa_Powder.webp" height="auto" width="100%" alt="Curry Leaves Farm">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="gallery-img">
                        <img src="assets/img/Vermicompost.jpg" height="auto" width="100%" alt="Moringa Powder">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="gallery-img">
                        <img src="assets/img//Vermicompost_2.webp" height="auto" width="100%" alt="Organic Products">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- LIGHTBOX POPUP -->
    <div id="lightbox" class="lightbox">
        <span class="close-lightbox">&times;</span>
        <img class="lightbox-content" id="lightbox-img">
    </div>

    <!-- Contact us   -->
    <section class="contact-section py-5" style="background:#f1f8e9;">
        <div class="container" data-aos="fade-up">

            <!-- Title -->
            <div class="text-center mb-5">
                <h2 class="fw-bold" style="color:#1b5e20;">Contact Us</h2>
                <p>Have questions? Get in touch with us for enquiries or export details.</p>
            </div>

            <div class="row g-4 justify-content-center align-items-center  ">

                <!-- LEFT SIDE MAP -->
                <div class="col-md-6">
                    <div class="map-container shadow rounded overflow-hidden" data-aos="zoom-in">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.0073318278614!2d72.87320167515632!3d19.1511563496089!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b7b8dce59813%3A0x5aa34a86bc14ca1d!2sAarey%20Rd%2C%20Mumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1764588377370!5m2!1sen!2sin"
                            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>

                <!-- RIGHT SIDE FORM -->
                <div class="col-md-6">
                    <div class="contact-form shadow p-4 rounded" data-aos="fade-left">

                        <form id="whatsappForm">
                            <div class="mb-3">
                                <label class="form-label">Your Name</label>
                                <input type="text" id="name" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email Address</label>
                                <input type="email" id="email" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Phone Number</label>
                                <input type="text" id="phone" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Message</label>
                                <textarea id="message" class="form-control" rows="4" required></textarea>
                            </div>

                            <button type="submit" class="btn btn-success w-100 rounded-pill py-2">
                                Send on WhatsApp
                            </button>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- footer -->
    <?php include('footer.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GAURANSH AGROWAVE INTERNATIONAL</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/style.css">


    <style>
        /* bread crumb css */
        .breadcrumb-section {
            position: relative;
            background-image: url('./img/baner_Curry_Leaves.jpg');
            /* Replace with your image */
            background-size: cover;
            background-position: center;
            height: 250px;
            display: flex;
            align-items: center;
            justify-content: center;
            /* Dark overlay using linear-gradient */
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                url('assets/img/baner_Curry_Leaves.jpg');
            background-size: cover;
            background-position: center;
        }

        .breadcrumb-content {
            text-align: center;
            color: #ffffff;
        }

        .breadcrumb-content h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        .breadcrumb .breadcrumb-item a {
            color: #ffffff;
            text-decoration: none;
        }

        .breadcrumb .breadcrumb-item.active {
            color: #d4d4d4;
        }

        .breadcrumb .breadcrumb-item+.breadcrumb-item::before {
            color: #ffffff;
            /* separator color */
        }
    </style>

</head>

<body>

    <!-- Header -->
    <?php include('header.php') ?>


    <!-- bread crumb sections -->
    <section class="breadcrumb-section">
        <div class="breadcrumb-content">
            <h1>Blog </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
                </ol>
            </nav>
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

    <!-- footer -->
    <?php include('footer.php') ?>
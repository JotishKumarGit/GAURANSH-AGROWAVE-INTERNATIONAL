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
            <h1>Vermicompost </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Vermicompost </li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Products details -->
    <section class="product-details-section py-5">
        <div class="container">
            <div class="row g-4 justify-content-center align-items-center">

                <!-- Left Side: Product Images -->
                <div class="col-lg-6">
                    <div class="product-images">
                        <img src="assets/img/Vermicompost.jpg" alt="Vermicompost" class="img-fluid main-image mb-3">
                        <div class="d-flex gap-2">
                            <img src="assets/img/Vermicompost.jpg" alt="Vermicompost" class="img-thumbnail thumb-image">
                            <img src="assets/img/Vermicompost.jpg" alt="Vermicompost" class="img-thumbnail thumb-image">
                            <img src="assets/img/Vermicompost.jpg" alt="Vermicompost" class="img-thumbnail thumb-image">
                        </div>
                    </div>
                </div>

                <!-- Right Side: Product Details -->
                <div class="col-lg-6">
                    <div class="product-details">
                        <h2 class="product-title">Vermicompost</h2>
                        <p class="product-description">
                            High-quality, organic vermicompost perfect for enriching soil and improving plant growth.
                            Made naturally using earthworms for sustainable gardening and farming.
                        </p>
                        <ul class="product-features">
                            <li>100% Organic & Eco-friendly</li>
                            <li>Rich in Nutrients & Microorganisms</li>
                            <li>Enhances Soil Fertility</li>
                            <li>Safe for All Plants</li>
                        </ul>
                        <a href="#" class="btn enquiry-btn mt-3" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                            <i class="bi bi-chat-dots-fill me-1"></i> Enquiry
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- footer -->
    <?php include('footer.php') ?>
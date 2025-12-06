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
            <h1>Contact </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </section>

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
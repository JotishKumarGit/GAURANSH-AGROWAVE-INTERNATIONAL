
    <!-- footer -->
    <footer class="footer bg-dark text-light pt-5">
        <div class="container">

            <div class="row g-4">

                <!-- COMPANY INFO -->
                <div class="col-md-4" data-aos="fade-up">
                    <h4 class="fw-bold text-uppercase mb-3" style="color:#a5d6a7;">
                        GAURANSH AGROWAVE INTERNATIONAL
                    </h4>
                    <p>Exporters of high-quality Vermicompost, Curry Leaves, Moringa Powder & more organic products.</p>

                    <h6 class="fw-bold mt-4">Contact Numbers:</h6>
                    <p class="mb-1"><i class="bi bi-telephone-fill"></i> 7039270842</p>
                    <p><i class="bi bi-telephone-fill"></i> 8655612294</p>

                    <h6 class="fw-bold mt-4">Email:</h6>
                    <p><i class="bi bi-envelope-fill"></i> gauranshagroint@gmail.com</p>
                </div>

                <!-- ADDRESS -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <h5 class="fw-bold mb-3" style="color:#a5d6a7;">Our Address</h5>

                    <p>
                        <i class="bi bi-geo-alt-fill"></i>
                        Aarey Road, Adarsh Nagar, Aarey Milk Colony,
                        Goregaon East, Mumbai, Maharashtra, India - 400065
                    </p>

                    <!-- SOCIAL LINKS -->
                    <h5 class="fw-bold mt-4" style="color:#a5d6a7;">Follow Us</h5>
                    <div class="d-flex gap-3 fs-4">

                        <a href="#" class="text-light social-icon">
                            <i class="bi bi-facebook"></i>
                        </a>

                        <a href="#" class="text-light social-icon">
                            <i class="bi bi-instagram"></i>
                        </a>

                        <a href="#" class="text-light social-icon">
                            <i class="bi bi-whatsapp"></i>
                        </a>

                        <a href="#" class="text-light social-icon">
                            <i class="bi bi-linkedin"></i>
                        </a>
                    </div>
                </div>

                <!-- NEWSLETTER -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <h5 class="fw-bold mb-3" style="color:#a5d6a7;">Newsletter</h5>
                    <p>Subscribe to get updates on our latest products and export news.</p>

                    <form id="newsletterForm">
                        <div class="input-group">
                            <input type="email" id="newsletterEmail" class="form-control" placeholder="Enter your email"
                                required>
                            <button class="btn btn-success" type="submit">Subscribe</button>
                        </div>
                    </form>

                    <p id="newsletterMsg" class="mt-2"></p>
                </div>

            </div>

            <hr class="mt-4" style="border-color:#777;">

            <!-- BOTTOM COPYRIGHT -->
            <div class="text-center py-3">
                © <span id="year"></span> GAURANSH AGROWAVE INTERNATIONAL — All Rights Reserved.
                <p>Managed By :- <a href="trade4export.com">Trade4Export</a></p>
            </div>
        </div>
    </footer>

    <!-- ENQUIRY MODAL -->
    <div class="modal fade" id="enquiryModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-left: 6px solid #1b5e20;">

                <div class="modal-header" style="background:#1b5e20; color:white;">
                    <h5 class="modal-title fw-bold">Enquiry Form</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">

                    <form id="enquiryForm">

                        <div class="row g-3">

                            <!-- Name -->
                            <div class="col-md-6">
                                <label class="form-label fw-bold" style="color:#1b5e20;">Name</label>
                                <input type="text" id="enq_name" class="form-control" required>
                            </div>

                            <!-- Email -->
                            <div class="col-md-6">
                                <label class="form-label fw-bold" style="color:#1b5e20;">Email</label>
                                <input type="email" id="enq_email" class="form-control" required>
                            </div>

                            <!-- Phone Number -->
                            <div class="col-md-6">
                                <label class="form-label fw-bold" style="color:#1b5e20;">Phone Number</label>
                                <input type="text" id="enq_phone" class="form-control" required>
                            </div>

                            <!-- Subject -->
                            <div class="col-md-6">
                                <label class="form-label fw-bold" style="color:#1b5e20;">Subject</label>
                                <input type="text" id="enq_subject" class="form-control" required>
                            </div>

                            <!-- Message (Full width) -->
                            <div class="col-12">
                                <label class="form-label fw-bold" style="color:#1b5e20;">Message</label>
                                <textarea id="enq_message" class="form-control" rows="3" required></textarea>
                            </div>

                        </div>

                        <button type="submit" class="btn btn-success w-100 rounded-pill py-2 mt-3">
                            Submit on WhatsApp
                        </button>

                    </form>

                </div>

            </div>
        </div>
    </div>

    <!-- for enquiry -->
    <script>
        document.getElementById("enquiryForm").addEventListener("submit", function(e) {
            e.preventDefault();

            let name = document.getElementById("enq_name").value;
            let email = document.getElementById("enq_email").value;
            let phone = document.getElementById("enq_phone").value;
            let subject = document.getElementById("enq_subject").value;
            let message = document.getElementById("enq_message").value;

            let whatsappNumber = "917039270842"; // Put your number

            let url = "https://wa.me/" + whatsappNumber + "?text=" +
                "*New Enquiry (Website)*%0A%0A" +
                "*Name:* " + name + "%0A" +
                "*Email:* " + email + "%0A" +
                "*Phone:* " + phone + "%0A" +
                "*Subject:* " + subject + "%0A" +
                "*Message:* " + message;

            window.open(url, "_blank").focus();
        });
    </script>

    <!-- send on whatsapp message  -->
    <script>
        document.getElementById("whatsappForm").addEventListener("submit", function(event) {
            event.preventDefault();

            let name = document.getElementById("name").value;
            let email = document.getElementById("email").value;
            let phone = document.getElementById("phone").value;
            let message = document.getElementById("message").value;

            let whatsappNumber = "917039270842"; // Replace with your number

            let url = "https://wa.me/" + whatsappNumber + "?text=" +
                "New Enquiry from Website%0A%0A" +
                "*Name:* " + name + "%0A" +
                "*Email:* " + email + "%0A" +
                "*Phone:* " + phone + "%0A" +
                "*Message:* " + message;

            window.open(url, "_blank").focus();
        });
    </script>

    <!-- news letters  -->
    <script>
        document.getElementById("year").textContent = new Date().getFullYear();

        document.getElementById("newsletterForm").addEventListener("submit", function(e) {
            e.preventDefault();
            document.getElementById("newsletterMsg").innerHTML =
                "<span style='color:#a5d6a7;'>Thank you for subscribing!</span>";
            document.getElementById("newsletterEmail").value = "";
        });
    </script>

    <script>
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>

    <!-- gallery js -->
    <script>
        const galleryImages = document.querySelectorAll(".gallery-img img");
        const lightbox = document.getElementById("lightbox");
        const lightboxImg = document.getElementById("lightbox-img");
        const closeBtn = document.querySelector(".close-lightbox");

        galleryImages.forEach(img => {
            img.addEventListener("click", () => {
                lightbox.style.display = "block";
                lightboxImg.src = img.src;
            });
        });

        closeBtn.addEventListener("click", () => {
            lightbox.style.display = "none";
        });
    </script>

    <!-- AOS Library -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

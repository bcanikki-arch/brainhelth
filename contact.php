<?php include('header.php'); ?>


<section class="hero-section contact-hero text-center position-relative">
    <div class="carousel-overlay"></div>
    <div class="hero-content text-white">
        <h1 class="top_heading fade-in-down">Get In Touch With Us</h1>
        <p class="hero-subtitle fade-in-up">We're here to answer your questions and provide the care you deserve.</p>
    </div>

</section>

<!-- Contact Info Cards -->
<section class="contact_us gap-all py-5">
    <div class="container">
        <!-- <<<<<<< HEAD -->
        <div class="row mb-5">
            <div class="col-md-12 text-center">
                <span class="badge bg-primary mb-3">Contact Information</span>
                <h2 class="sec_heading">Reach Out to Us</h2>
                <p class="sec_paragraph text-muted">Multiple locations across Jaipur for your convenience</p>
                         </div>
        </div>
        <div class="row g-4">
            <!-- Email -->
            <div class="col-md-6 col-lg-4">
                <div class="contact-info-card card border-0 shadow-sm h-100 p-4 text-center hover-lift">
                    <div class="info-icon email-icon mx-auto mb-3">
                        <i class="fa-solid fa-envelope fa-2x"></i>
                    </div>
                    <h4 class="sub_heading">Email</h4>
                    <a href="mailto:brainhealthcareathomeservices@gmail.com" class="text-decoration-none text-primary fw-500">brainhealthcareathomeservices@gmail.com</a>
                    <p class="text-muted small mt-2">We'll respond within 24 hours</p>
                </div>
            </div>
            <!-- Phone -->
            <div class="col-md-6 col-lg-4">
                <div class="contact-info-card card border-0 shadow-sm h-100 p-4 text-center hover-lift">
                    <div class="info-icon phone-icon mx-auto mb-3">
                        <i class="fa-solid fa-phone-flip fa-2x"></i>
                    </div>
                    <h4 class="sub_heading">Call Us</h4>
                    <a href="tel:+919414111488" class="text-decoration-none text-primary fw-500">+91-9414111488</a>
                    <p class="text-muted small mt-2">Available 24/7 for emergencies</p>
                </div>
            </div>
            <!-- Hours -->
            <div class="col-md-6 col-lg-4">
                <div class="contact-info-card card border-0 shadow-sm h-100 p-4 text-center hover-lift">
                    <div class="info-icon hours-icon mx-auto mb-3">
                        <i class="fa-solid fa-clock fa-2x"></i>
                    </div>
                    <h4 class="sub_heading">Hours</h4>
                    <p class="text-primary fw-500">24/7 Service</p>
                    <p class="text-muted small mt-2">We're always ready to help</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Branch Locations -->

<section class="contact-details">
    <div class="container contact-details2 gap-all">
        <div class="row">

            <div class="col-md-7">
                <div class="drop-us">
                    <i class="bi bi-headset"></i>
                    <h2 class="sec_heading">Get In Touch</h2>
                    <p class="sec_paragraph">Fill out the form below, and a member of our team will get back to you as soon as possible.
                        We appreciate your interest in ResoHub and look forward to assisting you.</p>
                </div>
                <div id="responseMessage"></div>
                <form id="callbackForm" method="post">
                    <div class="forms">
                        <div class="row pt-3">
                            <div class="col ">
                                <label for="firstName">First Name</label>

                                <input type="text" class="form-control" required id="firstName" placeholder="Enter First Name" name="firstname">
                            </div>
                            <div class="col">
                                <label for="lastName">Last Name</label>
                                <input type="text" class="form-control" requiredid="lastName" placeholder="Enter Last Name" name="lastname">
                            </div>

                        </div>
                        <div class="row pt-4 mb-4">
                            <div class="col">
                                <label for="email">Your Email</label>
                                <input type="text" class="form-control" required id="email" placeholder="Enter Your Email" name="email">
                            </div>
                            <div class="col">
                                <label for="contact">Contact Number</label>
                                <input type="text" class="form-control" required id="contact" placeholder="Enter Contact Number" name="phone">
                            </div>


                        </div>

                        <div class="col">

                            <label class="optinal" for="comment">Your message (optional)</label>
                            <textarea class="form-control" rows="5" id="comment" name="message"></textarea>
                        </div>

                        <button class="all-btn mt-3" type="submit" value="Submit">Send Message </button>
                    </div>
                </form>
            </div>

            <div class="col-md-5 ">
                <div class="map_contact">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d222.48446896588823!2d75.78989738719902!3d26.847854962073487!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db7302f6cbc81%3A0xe2ca4d5ea2b17333!2sBrain%20Health%20Care%20At%20Home%20%7C%20Best%20Home%20Nursing%20Care%20Services%20in%20Jaipur%20%7C!5e0!3m2!1sen!2sin!4v1699253498861!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>

        </div>
    </div>
</section>

<script>
    document.getElementById("callbackForm").addEventListener("submit", function(e) {
        e.preventDefault();

        let form = this;
        let formData = new FormData(form);

        fetch("ajax_contact.php", {
                method: "POST",
                body: formData
            })
            .then(response => response.json())
            .then(data => {

                let messageDiv = document.getElementById("responseMessage");

                if (data.status === "success") {
                    messageDiv.innerHTML = `<div class="alert alert-success">${data.message}</div>`;
                    form.reset();
                } else {
                    messageDiv.innerHTML = `<div class="alert alert-danger">${data.message}</div>`;
                }

                // Auto hide after 2 seconds
                setTimeout(() => {
                    messageDiv.innerHTML = "";
                }, 2000);

            })
            .catch(error => {
                console.log(error);
            });
    });
</script>
<?php include('footer.php'); ?>
</body>
</html>
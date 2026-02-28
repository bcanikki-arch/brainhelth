<?php include('header.php'); ?>

<!-- Hero Section -->
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
<section class="branch-locations gap-all bggg py-5">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-12 text-center">
        <h2 class="sec_heading">Our Locations</h2>
        <p class="sec_paragraph text-muted">Visit any of our branch offices</p>
      </div>
    </div>
    <div class="row g-4">
      <div class="col-md-6 col-lg-4">
        <div class="location-card card border-0 shadow-sm h-100 p-4">
          <div class="location-badge mb-3">
            <span class="badge bg-primary">Branch 1</span>
          </div>
          <i class="fa-solid fa-location-dot fa-2x text-primary mb-3"></i>
          <h5 class="fw-bold mb-3">Durgapura Branch</h5>
          <p class="text-muted">Near SBI Bank, 23 Sundar Vihar, Durgapura, Jaipur</p>
          <a href="https://maps.google.com" target="_blank" class="btn btn-sm btn-outline-primary mt-3">
            <i class="fa-solid fa-directions me-2"></i>Get Directions
          </a>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="location-card card border-0 shadow-sm h-100 p-4">
          <div class="location-badge mb-3">
            <span class="badge bg-success">Branch 2</span>
          </div>
          <i class="fa-solid fa-location-dot fa-2x text-success mb-3"></i>
          <h5 class="fw-bold mb-3">Sanganer Branch</h5>
          <p class="text-muted">Shop No. 137, 160 Feet Road, Opposite Vedansh Ashram R.K. Puram, Pratap Nagar, Sanganer, Jaipur</p>
          <a href="https://maps.google.com" target="_blank" class="btn btn-sm btn-outline-success mt-3">
            <i class="fa-solid fa-directions me-2"></i>Get Directions
          </a>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="location-card card border-0 shadow-sm h-100 p-4">
          <div class="location-badge mb-3">
            <span class="badge bg-info">Branch 3</span>
          </div>
          <i class="fa-solid fa-location-dot fa-2x text-info mb-3"></i>
          <h5 class="fw-bold mb-3">Mansarovar Branch</h5>
          <p class="text-muted">34, Iskcon Rd, nearby NH11, Radhaswami Nagar, Mansarovar, Jaipur, Rajasthan 302020</p>
          <a href="https://maps.google.com" target="_blank" class="btn btn-sm btn-outline-info mt-3">
            <i class="fa-solid fa-directions me-2"></i>Get Directions
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Contact Form Section -->
<section class="contact-details py-5" id="contact">
  <div class="container contact-details2 gap-all">
    <div class="row g-4">
      <div class="col-lg-7">
        <div class="contact-header mb-4">
          <span class="badge bg-primary mb-3">Send Us a Message</span>
          <h2 class="sec_heading">We're Here to Help</h2>
          <p class="sec_paragraph text-muted">Fill out the form below, and a member of our team will get back to you as soon as possible. We appreciate your interest and look forward to assisting you.</p>
        </div>

        <form id="callbackForm" method="post" action="mail_form.php" novalidate>
          <div class="forms">
            <!-- Name Row -->
            <div class="row pt-3 g-3">
              <div class="col-md-6">
                <label for="firstName" class="form-label fw-bold">First Name</label>
                <input type="text" class="form-control form-control-lg border-1" id="firstName" 
                  placeholder="Enter Your First Name" name="firstname" required>
                <div class="invalid-feedback">Please provide a first name.</div>
              </div>
              <div class="col-md-6">
                <label for="lastName" class="form-label fw-bold">Last Name</label>
                <input type="text" class="form-control form-control-lg border-1" id="lastName" 
                  placeholder="Enter Your Last Name" name="lastname" required>
                <div class="invalid-feedback">Please provide a last name.</div>
              </div>
            </div>

            <!-- Email & Phone Row -->
            <div class="row pt-3 g-3">
              <div class="col-md-6">
                <label for="email" class="form-label fw-bold">Email Address</label>
                <input type="email" class="form-control form-control-lg border-1" id="email" 
                  placeholder="Enter Your Email" name="email" required>
                <div class="invalid-feedback">Please provide a valid email address.</div>
              </div>
              <div class="col-md-6">
                <label for="contact" class="form-label fw-bold">Contact Number</label>
                <input type="tel" class="form-control form-control-lg border-1" id="contact" 
                  placeholder="Enter Your Phone Number" name="phone" pattern="[0-9\-\+\(\)\s]{10,}" required>
                <div class="invalid-feedback">Please provide a valid phone number.</div>
              </div>
            </div>

            <!-- Message -->
            <div class="mt-3">
              <label for="comment" class="form-label fw-bold">Your Message</label>
              <textarea class="form-control form-control-lg border-1" rows="5" id="comment" 
                name="message" placeholder="Tell us how we can help..." required></textarea>
              <div class="invalid-feedback">Please provide a message.</div>
            </div>

            <!-- Submit Button -->
            <button class="btn btn-primary btn-lg w-100 mt-4" type="submit">
              <i class="fa-solid fa-paper-plane me-2"></i>Send Message
            </button>
          </div>
        </form>
        <div id="responseMessage1" class="mt-3"></div>
      </div>

      <!-- Map Section -->
      <div class="col-lg-5">
        <div class="contact-header mb-4">
          <h3 class="sub_heading">Visit Our Main Office</h3>
          <p class="text-muted">Find us on the map or get directions.</p>
        </div>
        <div class="map_contact rounded-3 overflow-hidden shadow-sm" style="min-height: 450px;">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d222.48446896588823!2d75.78989738719902!3d26.847854962073487!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db7302f6cbc81%3A0xe2ca4d5ea2b17333!2sBrain%20Health%20Care%20At%20Home%20%7C%20Best%20Home%20Nursing%20Care%20Services%20in%20Jaipur%20%7C!5e0!3m2!1sen!2sin!4v1699253498861!5m2!1sen!2sin"
            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade" title="Brain Health Care Location"></iframe>
        </div>

        <!-- Quick Info -->
        <div class="quick-info mt-4">
          <div class="d-flex align-items-start mb-3">
            <div class="bg-primary bg-opacity-10 rounded-circle p-3 me-3" style="min-width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
              <i class="fa-solid fa-envelope text-primary"></i>
            </div>
            <div>
              <h5 class="mb-1">Email</h5>
              <a href="mailto:brainhealthcareathomeservices@gmail.com" class="text-decoration-none text-muted">brainhealthcareathomeservices@gmail.com</a>
            </div>
          </div>
          <div class="d-flex align-items-start">
            <div class="bg-primary bg-opacity-10 rounded-circle p-3 me-3" style="min-width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
              <i class="fa-solid fa-phone text-primary"></i>
            </div>
            <div>
              <h5 class="mb-1">Call Us</h5>
              <a href="tel:+919414111488" class="text-decoration-none text-muted">+91-9414111488</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Scripts for form validation -->
<script>
  // Form Validation
  (function() {
    'use strict';
    window.addEventListener('load', function() {
      var forms = document.querySelectorAll('form[novalidate]');
      Array.prototype.slice.call(forms).forEach(function(form) {
        form.addEventListener('submit', function(event) {
          if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
</script>

<?php include('footer.php'); ?>
</body>
</html>
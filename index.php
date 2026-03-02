<?php
include('header.php'); ?>

<body>
  <!-- Hero Section -->
  <section class="hero-section image-slider">
    <div class="slider-first">
      <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/doctor_1.jpg" class="d-block w-100 carousel-img" alt="Professional Home Nursing Services">
            <div class="carousel-overlay"></div>
            <div class="image-text hero-content text-center">
              <h1 class="top_heading fade-in-down">Affordable 24/7 Home Nursing Services in Jaipur</h1>
              <p class="hero-subtitle fade-in-up">Brain Health Care at Home delivers expert nursing care at your doorstep with trust, safety, and compassion.</p>
              <div class="hero-buttons fade-in-up">
                <a href="tel:+91-9414111488" class="btn btn-primary btn-lg flex-grow-1 me-2">
                  <i class="fa-solid fa-phone me-2"></i>Call Us Now
                </a>
                <button class="btn btn-light btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  <i class="fa-solid fa-calendar-check me-2"></i>Book Now
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- About Us Section -->
  <section class="about-us gap-all bggg py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 mb-4 mb-md-0">
          <div class="about-image-wrapper zoom-on-hover">
            <img class="w-100 rounded-3 shadow-lg" src="images/abouthome.jpg" alt="Brain Health Care Team - Professional Home Healthcare">
          </div>
        </div>
        <div class="col-md-6">
          <div class="take-about ps-md-4">
            <span class="badge bg-primary mb-3">About Us</span>
            <h2 class="sec_heading mb-4">Trusted Healthcare at Your Home</h2>

            <p class="sec_paragraph text-muted mb-3">At Brain Health Care, caring is not just our service — it is our responsibility. We are passionate about providing dependable home healthcare solutions that bring comfort and peace of mind to families.

              Our experienced nurses and caregivers work with dedication, compassion, and professionalism to ensure the best possible support for patients at home. Guided by our values of trust, innovation, and client-focused care, we aim to make quality healthcare accessible and affordable.

              With a strong commitment to excellence, we continue to serve our community with integrity and heartfelt dedication.
            </p>

            <div class="d-flex gap-3 flex-wrap">
              <a href="about.php" class="btn btn-primary btn-lg">
                <i class="fa-solid fa-arrow-right me-2"></i>Learn More
              </a>
              <a href="#contact" class="btn btn-outline-primary btn-lg">
                <i class="fa-solid fa-phone me-2"></i>Contact Us
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Services Section -->
  <section class="our_services gap-all py-5">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-12">
          <div class="service sub_heading2 text-center">
            <span class="badge bg-primary mb-3">Our Services</span>
            <h2 class="sec_heading">Healthcare Services We Provide</h2>
            <p class="sec_paragraph text-muted mt-3">Professional medical support and personalized care delivered at your doorstep.</p>
          </div>
        </div>
      </div>

      <!-- Service Cards Row 1 -->
      <div class="row g-4 mb-4">
        <div class="col-md-4">
          <div class="service-card premium-card h-100">
            <div class="service-badge badge-nursing">💉 Medical Care</div>
            <div class="service-image-wrapper">
              <img src="images/nurshing-services.jpg" class="service-img" alt="Home Nursing Support Services">
              <div class="image-overlay"></div>
            </div>
            <div class="service-body">
              <div class="service-icon nursing-icon">
                <i class="fa-solid fa-heart-pulse"></i>
              </div>
              <h4 class="service-title">Home Nursing Support</h4>
              <p class="service-description">Our certified nursing professionals provide comprehensive medical care at home, including monitoring vital signs, administering medications, wound care, and recovery assistance.</p>
              <div class="service-features">
                <span class="feature-tag">24/7 Available</span>
                <span class="feature-tag">Professional Staff</span>
              </div>
              <button class="btn btn-service w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="fa-solid fa-phone me-2"></i>Call Now
              </button>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-card premium-card h-100">
            <div class="service-badge badge-doctor">👨‍⚕️ Doctor</div>
            <div class="service-image-wrapper">
              <img src="images/doctor_visit.jpg" class="service-img" alt="Doctor Home Consultation">
              <div class="image-overlay"></div>
            </div>
            <div class="service-body">
              <div class="service-icon doctor-icon">
                <i class="fa-solid fa-stethoscope"></i>
              </div>
              <h4 class="service-title">In-Home Doctor Consultation</h4>
              <p class="service-description">Experienced doctors visit your home to conduct detailed health checkups, diagnose conditions, and recommend suitable treatment plans.</p>
              <div class="service-features">
                <span class="feature-tag">Expert Doctors</span>
                <span class="feature-tag">Quick Diagnosis</span>
              </div>
              <button class="btn btn-service w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="fa-solid fa-phone me-2"></i>Call Now
              </button>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-card premium-card h-100">
            <div class="service-badge badge-care">🤝 Support</div>
            <div class="service-image-wrapper">
              <img src="images/trained_attendant.jpg" class="service-img" alt="Professional Care Attendants">
              <div class="image-overlay"></div>
            </div>
            <div class="service-body">
              <div class="service-icon care-icon">
                <i class="fa-solid fa-hand-holding-heart"></i>
              </div>
              <h4 class="service-title">Professional Care Attendants</h4>
              <p class="service-description">Our trained attendants assist with daily living activities, hygiene support, mobility help, and companionship for patient care.</p>
              <div class="service-features">
                <span class="feature-tag">Trained Staff</span>
                <span class="feature-tag">Compassionate Care</span>
              </div>
              <button class="btn btn-service w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="fa-solid fa-phone me-2"></i>Call Now
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- Service Cards Row 2 -->
      <div class="row g-4 mb-4">
        <div class="col-md-4">
          <div class="service-card premium-card h-100">
            <div class="service-badge badge-senior">👴 Elderly Care</div>
            <div class="service-image-wrapper">
              <img src="images/pasent-1.jpg" class="service-img" alt="Senior Citizen Care">
              <div class="image-overlay"></div>
            </div>
            <div class="service-body">
              <div class="service-icon senior-icon">
                <i class="fa-solid fa-person-cane"></i>
              </div>
              <h4 class="service-title">Senior Citizen Care</h4>
              <p class="service-description">Dedicated elderly care services designed to enhance comfort and independence with medical assistance and emotional support.</p>
              <div class="service-features">
                <span class="feature-tag">Specialized Care</span>
                <span class="feature-tag">Emotional Support</span>
              </div>
              <button class="btn btn-service w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="fa-solid fa-phone me-2"></i>Call Now
              </button>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-card premium-card h-100">
            <div class="service-badge badge-emergency">🚑 Emergency</div>
            <div class="service-image-wrapper">
              <img src="images/tracheostomy-care-services.jpg" class="service-img" alt="Emergency Ambulance Services">
              <div class="image-overlay"></div>
            </div>
            <div class="service-body">
              <div class="service-icon emergency-icon">
                <i class="fa-solid fa-ambulance"></i>
              </div>
              <h4 class="service-title">Emergency Ambulance Support</h4>
              <p class="service-description">Round-the-clock ambulance services equipped with advanced medical facilities and trained paramedics for safe transportation.</p>
              <div class="service-features">
                <span class="feature-tag">24/7 Service</span>
                <span class="feature-tag">Fast Response</span>
              </div>
              <button class="btn btn-service w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="fa-solid fa-phone me-2"></i>Call Now
              </button>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-card premium-card h-100">
            <div class="service-badge badge-equipment">⚙️ Equipment</div>
            <div class="service-image-wrapper">
              <img src="images/ambulance.jpg" class="service-img" alt="Medical Equipment Supply">
              <div class="image-overlay"></div>
            </div>
            <div class="service-body">
              <div class="service-icon equipment-icon">
                <i class="fa-solid fa-microscope"></i>
              </div>
              <h4 class="service-title">Home Medical Equipment Supply</h4>
              <p class="service-description">We provide reliable medical equipment such as oxygen cylinders, hospital beds, monitors, and other essential devices.</p>
              <div class="service-features">
                <span class="feature-tag">Quality Equipment</span>
                <span class="feature-tag">Home Delivery</span>
              </div>
              <button class="btn btn-service w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="fa-solid fa-phone me-2"></i>Call Now
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- Service Cards Row 3 -->
      <div class="row g-4">
        <div class="col-md-4">
          <div class="service-card premium-card h-100">
            <div class="service-badge badge-critical">🏥 ICU Care</div>
            <div class="service-image-wrapper">
              <img src="images/madical-incluments.jpg" class="service-img" alt="Critical Care at Home">
              <div class="image-overlay"></div>
            </div>
            <div class="service-body">
              <div class="service-icon critical-icon">
                <i class="fa-solid fa-hospital"></i>
              </div>
              <h4 class="service-title">Critical Care at Home</h4>
              <p class="service-description">Advanced ICU setup at home with continuous monitoring, ventilator support, and skilled critical care staff.</p>
              <div class="service-features">
                <span class="feature-tag">Advanced Monitoring</span>
                <span class="feature-tag">Expert Staff</span>
              </div>
              <button class="btn btn-service w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="fa-solid fa-phone me-2"></i>Call Now
              </button>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-card premium-card h-100">
            <div class="service-badge badge-mother">👶 Maternity</div>
            <div class="service-image-wrapper">
              <img src="images/imagesmother_baby_care.jpg" class="service-img" alt="Mother and Baby Care">
              <div class="image-overlay"></div>
            </div>
            <div class="service-body">
              <div class="service-icon mother-icon">
                <i class="fa-solid fa-baby"></i>
              </div>
              <h4 class="service-title">Mother & Baby Home Care</h4>
              <p class="service-description">Comprehensive maternity and newborn care services including prenatal guidance, postnatal recovery, and baby care assistance.</p>
              <div class="service-features">
                <span class="feature-tag">Prenatal Support</span>
                <span class="feature-tag">Postnatal Care</span>
              </div>
              <button class="btn btn-service w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="fa-solid fa-phone me-2"></i>Call Now
              </button>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-card premium-card h-100">
            <div class="service-badge badge-therapy">💪 Therapy</div>
            <div class="service-image-wrapper">
              <img src="images/physical therapy.png" class="service-img" alt="Rehabilitation and Therapy">
              <div class="image-overlay"></div>
            </div>
            <div class="service-body">
              <div class="service-icon therapy-icon">
                <i class="fa-solid fa-dumbbell"></i>
              </div>
              <h4 class="service-title">Rehabilitation & Therapy</h4>
              <p class="service-description">Professional physiotherapy and rehabilitation services to aid recovery, improve mobility, and restore independence.</p>
              <div class="service-features">
                <span class="feature-tag">Expert Therapists</span>
                <span class="feature-tag">Personalized Plans</span>
              </div>
              <button class="btn btn-service w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="fa-solid fa-phone me-2"></i>Call Now
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- View All Services Button -->
      <div class="row mt-5">
        <div class="col-md-12 text-center">
          <a href="services.php" class="btn btn-lg btn-outline-primary">
            <i class="fa-solid fa-list me-2"></i>View All Services
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Process Section -->
  <section class="our-process gap-all bggg py-5">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-12">
          <div class="process sub_heading2 text-center">
            <span class="badge bg-primary mb-3">Our Process</span>
            <h2 class="sec_heading">Get Professional Care in 4 Simple Steps</h2>
            <p class="sec_paragraph text-muted mt-3">Our streamlined process ensures quick, efficient, and compassionate healthcare delivery</p>
          </div>
        </div>
      </div>
      <div class="row g-4">
        <div class="col-md-3">
          <div class="process-step text-center h-100 p-4 rounded-3 transition-all hover-shadow">
            <div class="step-icon bg-primary bg-opacity-10 rounded-circle mx-auto mb-3" style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center;">
              <i class="fa-regular fa-bookmark fa-2x text-primary"></i>
            </div>
            <h4 class="sub_heading mt-3">Book Online</h4>
            <p class="text-muted">Book online easily through our website or mobile app. We'll match you with trusted, experienced healthcare professionals.</p>
            <span class="badge bg-primary mt-3">Step 1</span>
          </div>
        </div>
        <div class="col-md-3">
          <div class="process-step text-center h-100 p-4 rounded-3 transition-all hover-shadow">
            <div class="step-icon bg-success bg-opacity-10 rounded-circle mx-auto mb-3" style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center;">
              <i class="fa-solid fa-people-group fa-2x text-success"></i>
            </div>
            <h4 class="sub_heading mt-3">Expert Team Arrives</h4>
            <p class="text-muted">Our experienced healthcare team will visit your home at the scheduled time with all necessary medical equipment and supplies.</p>
            <span class="badge bg-success mt-3">Step 2</span>
          </div>
        </div>
        <div class="col-md-3">
          <div class="process-step text-center h-100 p-4 rounded-3 transition-all hover-shadow">
            <div class="step-icon bg-info bg-opacity-10 rounded-circle mx-auto mb-3" style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center;">
              <i class="fa-solid fa-hand-holding-heart fa-2x text-info"></i>
            </div>
            <h4 class="sub_heading mt-3">Care Delivery</h4>
            <p class="text-muted">We deliver professional, compassionate care with close monitoring and regular updates to ensure your well-being and satisfaction.</p>
            <span class="badge bg-info mt-3">Step 3</span>
          </div>
        </div>
        <div class="col-md-3">
          <div class="process-step text-center h-100 p-4 rounded-3 transition-all hover-shadow">
            <div class="step-icon bg-warning bg-opacity-10 rounded-circle mx-auto mb-3" style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center;">
              <i class="fa-regular fa-star fa-2x text-warning" style="color: #ffc107;"></i>
            </div>
            <h4 class="sub_heading mt-3">Share Your Experience</h4>
            <p class="text-muted">Your feedback is valuable to us. Please share your experience and rate our services on Google and other platforms.</p>
            <span class="badge bg-warning mt-3">Step 4</span>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- Testimonials Section -->
  <section class="home-testimonial gap-all py-5">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-12 text-center">
          <div class="test-contant sub_heading2">
            <span class="badge bg-primary mb-3">Testimonials</span>
            <h2 class="sec_heading">What Our Patients Say</h2>
            <p class="sec_paragraph text-muted mt-3">Real stories from families who trust us with their loved ones</p>
          </div>
        </div>
      </div>

      <div class="row g-4">
        <div class="col-md-4">
          <div class="testimonial-card card border-0 shadow-sm h-100 p-4">
            <div class="d-flex align-items-center mb-3">
              <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                <i class="fa-solid fa-user"></i>
              </div>
              <div class="ms-3">
                <h5 class="mb-0">Rajesh Kumar</h5>
                <small class="text-muted">Patient Family</small>
              </div>
            </div>
            <div class="mb-3">
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
            </div>
            <p class="text-muted">"Brain Health Care provided exceptional nursing care for my mother. The nurses were professional, kind, and incredibly attentive. We couldn't have asked for better support during her recovery."</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="testimonial-card card border-0 shadow-sm h-100 p-4">
            <div class="d-flex align-items-center mb-3">
              <div class="rounded-circle bg-success text-white d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                <i class="fa-solid fa-user"></i>
              </div>
              <div class="ms-3">
                <h5 class="mb-0">Priya Sharma</h5>
                <small class="text-muted">Patient</small>
              </div>
            </div>
            <div class="mb-3">
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
            </div>
            <p class="text-muted">"The doctor home consultation service is amazing! I didn't have to leave my bed to get a proper medical checkup. The doctor was thorough and prescribed the right treatment immediately."</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="testimonial-card card border-0 shadow-sm h-100 p-4">
            <div class="d-flex align-items-center mb-3">
              <div class="rounded-circle bg-info text-white d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                <i class="fa-solid fa-user"></i>
              </div>
              <div class="ms-3">
                <h5 class="mb-0">Anil Singh</h5>
                <small class="text-muted">Patient Family</small>
              </div>
            </div>
            <div class="mb-3">
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
              <i class="fa-solid fa-star text-warning"></i>
            </div>
            <p class="text-muted">"Highly satisfied with their mother and baby care services. The postpartum recovery was smooth thanks to their dedicated care attendants. Highly recommended!"</p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Contact Section -->
  <section class="contact-details py-5" id="contact">
    <div class="container contact-details2 gap-all">
      <div class="row g-4">
        <div class="col-lg-7">
          <div class="contact-header mb-4">
            <span class="badge bg-primary mb-3">Get In Touch</span>
            <h2 class="sec_heading">We're Here to Help</h2>
            <p class="sec_paragraph text-muted">Fill out the form below, and a member of our team will get back to you as soon as possible. We appreciate your trust and look forward to assisting you.</p>
          </div>

          <form id="callbackForm " class="ajax-contact-form" method="post">
            <div class="responseMessage mb-3"></div>
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

       <div class="col-lg-5">
        <div class="contact-header mb-4">
          <h3 class="sub_heading">Visit Our Clinic</h3>
          <p class="text-muted">Find us on the map or get directions to visit our office.</p>
        </div>
         <!-- Contact Info Cards -->
        <div class="contact-info mt-4">
          <div class="d-flex align-items-start mb-3">
            <div class="bg-primary bg-opacity-10 rounded-circle p-3 me-3" style="min-width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
              <i class="fa-solid fa-phone text-primary"></i>
            </div>
            <div>
              <h5 class="mb-1">Call Us</h5>
              <a href="tel:+91-9414111488" class="text-decoration-none text-muted">+91-9414111488</a>
            </div>
          </div>
          <div class="d-flex align-items-start">
            <div class="bg-primary bg-opacity-10 rounded-circle p-3 me-3" style="min-width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
              <i class="fa-solid fa-envelope text-primary"></i>
            </div>
            <div>
              <h5 class="mb-1">Email Us</h5>
              <a href="mailto:info@brainhealthcare.com" class="text-decoration-none text-muted">info@brainhealthcare.com</a>
            </div>
          </div>
        </div>
        <div class="map_contact rounded-3 overflow-hidden shadow-sm" style="min-height: 450px;">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d222.48446896588823!2d75.78989738719902!3d26.847854962073487!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db7302f6cbc81%3A0xe2ca4d5ea2b17333!2sBrain%20Health%20Care%20At%20Home%20%7C%20Best%20Home%20Nursing%20Care%20Services%20in%20Jaipur%20%7C!5e0!3m2!1sen!2sin!4v1699253498861!5m2!1sen!2sin"
            width="100%" height="450px" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade" title="Brain Health Care Location"></iframe>
        </div>
      </div>
      </div>
    </div>
  </section>

  <?php include('footer.php'); ?>

</body>

</html>
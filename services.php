<?php include('header.php'); ?>

<!-- Hero Section -->
<section class="hero-section services-hero text-center position-relative">
  <div class="carousel-overlay"></div>
  <div class="hero-content text-white">
    <h1 class="top_heading fade-in-down">Comprehensive Healthcare Services</h1>
    <p class="hero-subtitle fade-in-up">Professional home-based medical care, therapy, and wellness solutions tailored to your needs.</p>
  </div>
</section>

<!-- About Services Section -->
<section class="about-services gap-all py-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 mb-4 mb-md-0">
        <div class="about-image-wrapper zoom-on-hover shadow-lg">
          <img class="w-100 rounded-3" src="images/services-img.jpg" alt="Professional Healthcare Services">
        </div>
      </div>
      <div class="col-md-6">
        <span class="badge bg-primary mb-3">About Our Services</span>
        <h2 class="sec_heading mb-4">Expert Care at Your Doorstep</h2>
        <p class="sec_paragraph text-muted mb-3">At the core of our commitment is a comprehensive suite of healthcare services designed to meet your diverse needs. From expert medical care to personalized support and rehabilitation, we strive to exceed expectations.</p>
        <p class="sec_paragraph text-muted mb-3">Our dedicated team of healthcare professionals ensures a seamless experience, delivering excellence in every aspect of care. Whether it's precise medical treatment, tailored assistance, or emotional support, our services are a testament to our unwavering dedication to your well-being.</p>
        <div class="mt-4">
          <a href="#services-list" class="btn btn-primary btn-lg">
            <i class="fa-solid fa-arrow-down me-2"></i>View All Services
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- All Services Section -->
<section class="our_services gap-all bggg py-5" id="services-list">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-12 text-center">
        <span class="badge bg-primary mb-3">Complete Solutions</span>
        <h2 class="sec_heading">All Healthcare Services Available</h2>
        <p class="sec_paragraph text-muted mt-3">Browse our complete range of professional healthcare services</p>
      </div>
    </div>

    <!-- Row 1 -->
    <div class="row g-4 mb-4">
      <div class="col-md-4">
        <div class="service-card premium-card h-100">
          <div class="service-badge badge-nursing">🏥 Nursing</div>
          <div class="service-image-wrapper">
            <img src="images/nurshing-services.jpg" class="service-img" alt="Nursing Care">
            <div class="image-overlay"></div>
          </div>
          <div class="service-body">
            <div class="service-icon nursing-icon"><i class="fa-solid fa-heart-pulse"></i></div>
            <h4 class="service-title">Nursing Care At Home</h4>
            <p class="service-description">Expert nursing professionals providing comprehensive medical care, health assessments, medication administration, and emotional support.</p>
            <div class="service-features">
              <span class="feature-tag">24/7 Available</span>
              <span class="feature-tag">Expert Nurses</span>
            </div>
            <button class="btn btn-service w-100" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-phone me-2"></i>Call Now</button>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-card premium-card h-100">
          <div class="service-badge badge-senior">👴 Elderly</div>
          <div class="service-image-wrapper">
            <img src="images/elder-care.jpg" class="service-img" alt="Elder Care">
            <div class="image-overlay"></div>
          </div>
          <div class="service-body">
            <div class="service-icon senior-icon"><i class="fa-solid fa-person-cane"></i></div>
            <h4 class="service-title">Elder Care At Home</h4>
            <p class="service-description">Dedicated elderly care with compassion and dignity. Comprehensive support ensuring comfort, independence, and well-being.</p>
            <div class="service-features">
              <span class="feature-tag">Specialized Care</span>
              <span class="feature-tag">Compassionate</span>
            </div>

            <button class="btn btn-service w-100" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-phone me-2"></i>Call Now</button>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-card premium-card h-100">
          <div class="service-badge badge-therapy">🏃 Therapy</div>
          <div class="service-image-wrapper">
            <img src="images/tracheostomy-care-services.jpg" class="service-img" alt="Physiotherapy">
            <div class="image-overlay"></div>
          </div>
          <div class="service-body">
            <div class="service-icon therapy-icon"><i class="fa-solid fa-dumbbell"></i></div>
            <h4 class="service-title">Physiotherapy At Home</h4>
            <p class="service-description">Evidence-based physiotherapy techniques to restore functionality, alleviate pain, and enhance mobility and wellness.</p>
            <div class="service-features">
              <span class="feature-tag">Expert Therapists</span>
              <span class="feature-tag">Proven Methods</span>
            </div>
            <button class="btn btn-service w-100" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-phone me-2"></i>Call Now</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Row 2 -->
    <div class="row g-4 mb-4">
      <div class="col-md-4">
        <div class="service-card premium-card h-100">
          <div class="service-badge badge-equipment">🧪 Lab Tests</div>
          <div class="service-image-wrapper">
            <img src="images/all_lab_test.jpg" class="service-img" alt="Lab Tests">
            <div class="image-overlay"></div>
          </div>
          <div class="service-body">
            <div class="service-icon equipment-icon"><i class="fa-solid fa-flask"></i></div>
            <h4 class="service-title">Lab Tests At Home</h4>
            <p class="service-description">Comprehensive lab test collection at your doorstep. Accurate, efficient, and convenient healthcare solutions.</p>
            <div class="service-features">
              <span class="feature-tag">Home Collection</span>
              <span class="feature-tag">Accurate Results</span>
            </div>
            <button class="btn btn-service w-100" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-phone me-2"></i>Call Now</button>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-card premium-card h-100">
          <div class="service-badge badge-equipment">⚙️ Equipment</div>
          <div class="service-image-wrapper">
            <img src="images/madical-incluments.jpg" class="service-img" alt="Medical Equipment">
            <div class="image-overlay"></div>
          </div>
          <div class="service-body">
            <div class="service-icon equipment-icon"><i class="fa-solid fa-microscope"></i></div>
            <h4 class="service-title">Medical Equipment Supply</h4>
            <p class="service-description">Cutting-edge medical equipment from diagnostic tools to life-saving devices. Reliable and innovative solutions.</p>
            <div class="service-features">
              <span class="feature-tag">Quality Equipment</span>
              <span class="feature-tag">Fast Delivery</span>
            </div>
            <button class="btn btn-service w-100" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-phone me-2"></i>Call Now</button>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-card premium-card h-100">
          <div class="service-badge badge-emergency">💉 Vaccination</div>
          <div class="service-image-wrapper">
            <img src="images/vaccinationinfusion_at_home.jpg" class="service-img" alt="Vaccination">
            <div class="image-overlay"></div>
          </div>
          <div class="service-body">
            <div class="service-icon emergency-icon"><i class="fa-solid fa-syringe"></i></div>
            <h4 class="service-title">Vaccination/Infusion</h4>
            <p class="service-description">Professional vaccination and infusion services at home. Safe, convenient, and expertly administered care.</p>
            <div class="service-features">
              <span class="feature-tag">Expert Staff</span>
              <span class="feature-tag">Safe Procedure</span>
            </div>
            <button class="btn btn-service w-100" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-phone me-2"></i>Call Now</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Row 3 -->
    <div class="row g-4 mb-4">
      <div class="col-md-4">
        <div class="service-card premium-card h-100">
          <div class="service-badge badge-medicine">💊 Medicine</div>
          <div class="service-image-wrapper">
            <img src="images/medicine_home_delivery.jpg" class="service-img" alt="Medicine Delivery">
            <div class="image-overlay"></div>
          </div>
          <div class="service-body">
            <div class="service-icon medicine-icon"><i class="fa-solid fa-pills"></i></div>
            <h4 class="service-title">Medicine Home Delivery</h4>
            <p class="service-description">Convenient and reliable medicine delivery to your doorstep. Seamless ordering, prompt delivery, quality assured.</p>
            <div class="service-features">
              <span class="feature-tag">Fast Delivery</span>
              <span class="feature-tag">Quality Meds</span>
            </div>
            <button class="btn btn-service w-100" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-phone me-2"></i>Call Now</button>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-card premium-card h-100">
          <div class="service-badge badge-mother">👶 Maternity</div>
          <div class="service-image-wrapper">
            <img src="images/imagesmother_baby_care.jpg" class="service-img" alt="Mother Baby Care">
            <div class="image-overlay"></div>
          </div>
          <div class="service-body">
            <div class="service-icon mother-icon"><i class="fa-solid fa-baby"></i></div>
            <h4 class="service-title">Mother & Baby Care</h4>
            <p class="service-description">Comprehensive maternity and newborn care. Expert guidance on breastfeeding, recovery, and infant care support.</p>
            <div class="service-features">
              <span class="feature-tag">Expert Guidance</span>
              <span class="feature-tag">Supportive Care</span>
            </div>
            <button class="btn btn-service w-100" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-phone me-2"></i>Call Now</button>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-card premium-card h-100">
          <div class="service-badge badge-kids">🧒 Kids</div>
          <div class="service-image-wrapper">
            <img src="images/vaccines_for_kids.jpg" class="service-img" alt="Kids Vaccines">
            <div class="image-overlay"></div>
          </div>
          <div class="service-body">
            <div class="service-icon baby-icon"><i class="fa-solid fa-child"></i></div>
            <h4 class="service-title">Vaccines for Kids</h4>
            <p class="service-description">Accessible and timely vaccinations for children. Safeguarding health and building immunity for a healthier future.</p>
            <div class="service-features">
              <span class="feature-tag">Safe Vaccines</span>
              <span class="feature-tag">Timely Care</span>
            </div>
            <button class="btn btn-service w-100" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-phone me-2"></i>Call Now</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Row 4 -->
    <div class="row g-4 mb-4">
      <div class="col-md-4">
        <div class="service-card premium-card h-100">
          <div class="service-badge badge-nursing">🩹 Dressing</div>
          <div class="service-image-wrapper">
            <img src="images/dressing.jpg" class="service-img" alt="Dressing Treatment">
            <div class="image-overlay"></div>
          </div>
          <div class="service-body">
            <div class="service-icon nursing-icon"><i class="fa-solid fa-bandage"></i></div>
            <h4 class="service-title">Dressing At Home</h4>
            <p class="service-description">Professional wound dressing treatment promoting healing and preventing infection. Specialized materials for optimal care.</p>
            <div class="service-features">
              <span class="feature-tag">Professional Care</span>
              <span class="feature-tag">Sterile Technique</span>
            </div>
            <button class="btn btn-service w-100" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-phone me-2"></i>Call Now</button>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-card premium-card h-100">
          <div class="service-badge badge-critical">🏥 ICU Care</div>
          <div class="service-image-wrapper">
            <img src="images/icu_care_at_home.jpg" class="service-img" alt="ICU at Home">
            <div class="image-overlay"></div>
          </div>
          <div class="service-body">
            <div class="service-icon critical-icon"><i class="fa-solid fa-hospital"></i></div>
            <h4 class="service-title">ICU Care at Home</h4>
            <p class="service-description">Intensive care at home with cutting-edge technology. Compassionate, personalized care without prolonged hospital stays.</p>
            <div class="service-features">
              <span class="feature-tag">Advanced Tech</span>
              <span class="feature-tag">24/7 Monitoring</span>
            </div>
            <button class="btn btn-service w-100" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-phone me-2"></i>Call Now</button>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-card premium-card h-100">
          <div class="service-badge badge-emergency">🏥 Catheter</div>
          <div class="service-image-wrapper">
            <img src="images/Insertion_remove_urinary_catheterization.jpg" class="service-img" alt="Catheterization">
            <div class="image-overlay"></div>
          </div>
          <div class="service-body">
            <div class="service-icon emergency-icon"><i class="fa-solid fa-flask-vial"></i></div>
            <h4 class="service-title">Urinary Catheterization</h4>
            <p class="service-description">Safe and comfortable catheter insertion/removal procedures. Expert care with sensitivity and professionalism.</p>
            <div class="service-features">
              <span class="feature-tag">Gentle Procedure</span>
              <span class="feature-tag">Expert Team</span>
            </div>
            <button class="btn btn-service w-100" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-phone me-2"></i>Call Now</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Row 5 -->
    <div class="row g-4">
      <div class="col-md-4">
        <div class="service-card premium-card h-100">
          <div class="service-badge badge-critical">⚕️ Post Op</div>
          <div class="service-image-wrapper">
            <img src="images/post_surgical_care.jpg" class="service-img" alt="Post Surgery Care">
            <div class="image-overlay"></div>
          </div>
          <div class="service-body">
            <div class="service-icon critical-icon"><i class="fa-solid fa-heartbeat"></i></div>
            <h4 class="service-title">Post Surgical Care</h4>
            <p class="service-description">Meticulous recovery care managing pain, monitoring vitals, and providing comprehensive support for swift recuperation.</p>
            <div class="service-features">
              <span class="feature-tag">Experienced Team</span>
              <span class="feature-tag">Full Support</span>
            </div>
            <button class="btn btn-service w-100" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-phone me-2"></i>Call Now</button>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-card premium-card h-100">
          <div class="service-badge badge-doctor">👨‍⚕️ Doctor</div>
          <div class="service-image-wrapper">
            <img src="images/doctor_visit.jpg" class="service-img" alt="Doctor Consultation">
            <div class="image-overlay"></div>
          </div>
          <div class="service-body">
            <div class="service-icon doctor-icon"><i class="fa-solid fa-stethoscope"></i></div>
            <h4 class="service-title">Doctor Consultation</h4>
            <p class="service-description">Expert medical guidance in personalized, confidential settings. Thorough examination with tailored treatment plans.</p>
            <div class="service-features">
              <span class="feature-tag">Expert Doctors</span>
              <span class="feature-tag">Quick Diagnosis</span>
            </div>
            <button class="btn btn-service w-100" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-phone me-2"></i>Call Now</button>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-card premium-card h-100">
          <div class="service-badge badge-care">💬 Support</div>
          <div class="service-image-wrapper">
            <img src="images/counselling.jpg" class="service-img" alt="Counseling">
            <div class="image-overlay"></div>
          </div>
          <div class="service-body">
            <div class="service-icon care-icon"><i class="fa-solid fa-person-hiking"></i></div>
            <h4 class="service-title">Counseling At Home</h4>
            <p class="service-description">Transformative emotional wellness journey. Confidential space to explore challenges and develop coping strategies.</p>
            <div class="service-features">
              <span class="feature-tag">Expert Support</span>
              <span class="feature-tag">Confidential</span>
            </div>
            <button class="btn btn-service w-100" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-phone me-2"></i>Call Now</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Row 6 - Final Services -->
    <div class="row g-4 mt-4">
      <div class="col-md-6">
        <div class="service-card premium-card h-100">
          <div class="service-badge badge-equipment">📊 Vital Signs</div>
          <div class="service-image-wrapper">
            <img src="images/b.p._sugar_pulse_oxygen.jpg" class="service-img" alt="Vital Signs">
            <div class="image-overlay"></div>
          </div>
          <div class="service-body">
            <div class="service-icon equipment-icon"><i class="fa-solid fa-thermometer"></i></div>
            <h4 class="service-title">B.P., Sugar, Pulse & Oxygen Check</h4>
            <p class="service-description">Comprehensive vital sign monitoring including blood pressure, glucose, pulse rate, and oxygen saturation assessment.</p>
            <div class="service-features">
              <span class="feature-tag">Complete Monitoring</span>
              <span class="feature-tag">Accurate Results</span>
            </div>
            <button class="btn btn-service w-100" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-phone me-2"></i>Call Now</button>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="service-card premium-card h-100">
          <div class="service-badge badge-equipment">🏥 Health Check</div>
          <div class="service-image-wrapper">
            <img src="images/all_vital_sign_check-up.jpg" class="service-img" alt="Checkup">
            <div class="image-overlay"></div>
          </div>
          <div class="service-body">
            <div class="service-icon equipment-icon"><i class="fa-solid fa-stethoscope"></i></div>
            <h4 class="service-title">Complete Health Checkup</h4>
            <p class="service-description">Thorough examination of all vital signs providing comprehensive health assessment for overall well-being.</p>
            <div class="service-features">
              <span class="feature-tag">Full Assessment</span>
              <span class="feature-tag">Detailed Report</span>
            </div>
            <button class="btn btn-service w-100" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-phone me-2"></i>Call Now</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Testimonials Section -->
<section class="home-testimonial gap-all py-5">
  <div class="container">
    <div class="row mb-4">
      <div class="col-md-12 text-center">
        <span class="badge bg-primary mb-3">What Clients Say</span>
        <h2 class="sec_heading">Patient Testimonials</h2>
        <p class="sec_paragraph text-muted mt-3">Real stories from families who trust us with their loved ones</p>
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
          <h2 class="sec_heading">Ready to Get Started?</h2>
          <p class="sec_paragraph text-muted">Fill out the form below, and our team will contact you to discuss your healthcare needs and schedule services.</p>
        </div>

        <!-- <div id="responseMessage"></div>
        <form id="callbackForm" method="post"> -->
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
          <h3 class="sub_heading">Contact Information</h3>
          <p class="text-muted">Get in touch with us today</p>
        </div>
        <div class="quick-contact-info">
          <div class="d-flex align-items-start mb-3">
            <div class="bg-primary bg-opacity-10 rounded-circle p-3 me-3" style="min-width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
              <i class="fa-solid fa-phone text-primary"></i>
            </div>
            <div>
              <h5 class="mb-1">Call Us</h5>
              <a href="tel:+919414111488" class="text-decoration-none text-muted">+91-9414111488</a>
              <p class="text-muted small mt-1">24/7 Emergency Support</p>
            </div>
          </div>
          <div class="d-flex align-items-start mb-3">
            <div class="bg-primary bg-opacity-10 rounded-circle p-3 me-3" style="min-width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
              <i class="fa-solid fa-envelope text-primary"></i>
            </div>
            <div>
              <h5 class="mb-1">Email</h5>
              <a href="mailto:brainhealthcareathomeservices@gmail.com" class="text-decoration-none text-muted">brainhealthcareathomeservices@gmail.com</a>
              <p class="text-muted small mt-1">Response within 24 hours</p>
            </div>
          </div>
          <div class="d-flex align-items-start">
            <div class="bg-primary bg-opacity-10 rounded-circle p-3 me-3" style="min-width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
              <i class="fa-solid fa-map-location-dot text-primary"></i>
            </div>
            <div>
              <h5 class="mb-1">Office Hours</h5>
              <p class="text-muted">24/7 Service Available</p>
              <p class="text-muted small mt-1">All days of the week</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include('footer.php'); ?>
</body>

</html>
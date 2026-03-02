<footer class="footar">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="sec-1">
          <img class="w-100" src="images/care_taker_logo.png" alt="">
          <p class="sec_paragraph">At Brain Health Care At Home Jaipur Center, we work with the sole aim of serving people. Our hospitality services are available at all times, ensuring support whenever someone needs help.</p>
        </div>
      </div>
      <div class="col-md-2">

      </div>
      <div class="col-md-3">
        <div class="sec-2">
          <h2>
            Quick Links
          </h2>
          <ul>
            <li><a href="index.html"> Home</a></li>
            <li><a href="about.html"> About Us</a></li>
            <li><a href="services.html"> Service</a></li>
            <li><a href="contact.html"> Contact</a></li>
            <li><a href="Privacy.html"> Privacy/policy</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <div class="sec-4">
          <h2>
            Contact Info
          </h2>
          <div class="d-flex">
            <i class="fa-solid fa-house-chimney"></i>
            <p>Near SBI Bank, 23 Sundar Vihar, Durgapura, Jaipur</p>
          </div>
          <div class="d-flex">
            <i class="fa-solid fa-phone"></i>
            <ul>
              <li> <a href="tel:+91 9414111488">+91 9414111488</a></li>
            </ul>
          </div>

          <div class="d-flex">
            <i class="fa-solid fa-envelope"></i>
            <ul>
              <li> <a href="mailto:brainhealthcareathomeservices@gmail.com">brainhealthcareathomeservices@gmail.com
                </a></li>

            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="copy">
    <div class="row align-items-center">

      <div class="col-md-12">
        <div class="copyright text-center">
          <h1>
            Copyright by <strong> Brain health care at home.</strong> All Rights Reserved |<strong> <a
                href="https://gtechlogicsindia.com/">Designed and Developed Gtech Logics India </a></strong>|
          </h1>
        </div>
      </div>

    </div>
  </div>
</footer>

<section>
  <div class="container">
    <div class="row position-relative">
      <div class="col-md-12">
        <div class="whtasapp">
          <a href=" https://wa.me/+919414111488"> <i class="fa-brands fa-whatsapp"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div class="container">
          <div class="now-book">
            <h2>Book Now</h2>
          </div>
          <form id="staticForm" class="ajax-contact-form" method="post" style="background:none;">
            <div class="responseMessage mb-3"></div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstname" class="form-label">First Name</label>
                <input class="form-control" placeholder="Your name" id="firstname" name="firstname" type="text" tabindex="1" required autofocus>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastname" class="form-label">Last Name</label>
                <input class="form-control" placeholder="Your last name" id="lastname" name="lastname" type="text" tabindex="2" required>
              </div>

              <div class="col-md-6 mb-3">
                <label for="mobile_no" class="form-label">Mobile No.</label>
                <input class="form-control" placeholder="Mobile No." id="mobile_no" type="tel" name="phone" tabindex="2" required>
              </div>
              <div class="col-md-6 mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input class="form-control" placeholder="Your Email Address" id="email" type="email" name="email" tabindex="2" required>
              </div>

              <div class="col-12 mb-3">
                <label for="service" class="form-label">Services</label>
                <select class="form-select" id="service" name="service">
                  <option disabled selected value="">Select a service</option>
                  <option value="Nursing Care At Home">Nursing Care At Home</option>
                  <option value="Doctor Visit At Home">Doctor Visit At Home</option>
                  <option value="Trained Attendant At Home">Trained Attendant At Home</option>
                  <option value="Elder Care At Home">Elder Care At Home</option>
                  <option value="Physiotherphy At Home">Physiotherphy At Home</option>
                  <option value="Ambulance At Home">Ambulance At Home</option>
                  <option value="Medical Equipment At Home">Medical Equipment At Home</option>
                  <option value="ICU At Home">ICU At Home</option>
                  <option value="Mother & Child Care At Home">Mother &amp; Child Care At Home</option>
                  <option value="Sample Collection At Home">Sample Collection At Home</option>
                </select>
              </div>

              <div class="col-12 mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" placeholder="Type your Message Here...." tabindex="5" id="message" name="message" rows="3" required></textarea>
              </div>
            </div>

            <div class="submited d-grid mt-2">
              <button class="all-btn btn btn-primary" type="submit">Submit</button>
            </div>
          </form>


        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div id="thankYouMessage" style="display: none;">
        <h3>Thank you for your submission!</h3>
        <p>We will get back to you soon.</p>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script>
  $(document).on("submit", ".ajax-contact-form", function(e) {
    e.preventDefault();

    let form = $(this);
    let messageDiv = form.find(".responseMessage");

    $.ajax({
      url: "ajax_contact.php",
      type: "POST",
      data: form.serialize(),
      dataType: "json",

      success: function(data) {

        if (data.status === "success") {
          messageDiv.html(`<div class="alert alert-success">${data.message}</div>`);
          form[0].reset();
        } else {
          messageDiv.html(`<div class="alert alert-danger">${data.message}</div>`);
        }

        setTimeout(function() {
          messageDiv.fadeOut(function() {
            $(this).html("").show();
          });
        }, 2000);
      },

      error: function(xhr) {
        console.log(xhr.responseText); // DEBUG
        messageDiv.html(`<div class="alert alert-danger">Server Error</div>`);
      }
    });
  });
</script>
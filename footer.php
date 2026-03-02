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
        <div class="col-md-4">
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
        <div class="col-md-3">
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
                  href="https://hbkart.in/">Designed and Developed by IT-Solutions </a></strong>|
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
            <form id="staticForm" class="sohna_modal_bar" style="background:none;" method="POST"
              action="model_form.php">

              <div class="form-group">
                <label for="firstname">Full Name</label>
                <input placeholder="Your name" id="firstname" name="name" type="name" tabindex="1" required=""
                  autofocus="">
              </div>
              <div class="form-group">
                <label for="mobile_no">Mobile No.</label>
                <input placeholder="Mobile No." id="mobile_no" type="phone" name="phone" tabindex="2" required="">
              </div>
              <div class="form-group">
                <label for="email">Email Address</label>
                <input placeholder="Your Email Address" id="email" type="email" name="email" tabindex="2" required="">
              </div>
              <div class="form-group">
                <label for="service">Services</label>
                <select class="form-select" name ="service"  aria-label="Default select example" id="investmentHorizon"
                  name="investment_horizon">
                  <option value="1">Nursing Care At Home</option>
                  <option value="2">Doctor Visit At Home</option>
                  <option value="3">Trained Attendant At Home</option>
                  <option value="4">Elder Care At Home</option>
                  <option value="5">Physiotherphy At Home</option>
                  <option value="6">Ambulance At Home</option>
                  <option value="7">Medical Equipment At Home</option>
                  <option value="8">ICU At Home</option>
                  <option value="9">Mother &amp; Child Care At Home</option>
                  <option value="10">Sample Collection At Home</option>
                </select>
              </div>
              <div class="form-group">
                <label for="message"> Message</label>
                <textarea placeholder="Type your Message Here...." tabindex="5" id="message" name="message"
                  required=""></textarea>
              </div>

              <div class="submited">
                <button class="all-btn" id="submitButton" type="submit">Submit</button>
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
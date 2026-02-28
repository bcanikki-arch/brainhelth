<footer class="footar">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="sec-1">
            <img class="w-100" src="images/care_taker_logo.png" alt="">
            <p class="sec_paragraph">Yes we at Brain Health care At Home jaipur Center are working with the sole aim of
              serving. The hospitality services are always available person can need a help at any time.</p>
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
                <select class="form-select" aria-label="Default select example" id="investmentHorizon"
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
  <script type="text/javascript">

    // $(document).ready(function () {
    //   $("#callbackForm").submit(function (e) {
    //     e.preventDefault(); // Prevent the default form submission

    //     // Serialize the form data
    //     var formData = $(this).serialize();

    //     // Send a POST request to your PHP script
    //     $.ajax({
    //       type: "POST",
    //       url: "mail_form.php", // Update with the correct URL
    //       data: formData,
    //       success: function (response) {
    //         // Display the response message on your webpage
    //         $("#responseMessage1").html("Your Enquiry has been successfully submitted!");

    //         // Clear the form fields
    //         document.getElementById("callbackForm").reset();
    //       },
    //       error: function () {
    //         // Handle errors here
    //         alert("An error occurred while submitting the form.");
    //       }
    //     });
    //   });
    // });


    // $(document).ready(function () {
    //   $("#staticForm").submit(function (e) {
    //     e.preventDefault();

    //     // Disable the submit button to prevent multiple submissions
    //     $("#submitButton").attr("disabled", true);

    //     var formData = $(this).serialize();

    //     $.ajax({
    //       type: "POST",
    //       url: "model_form.php",
    //       data: formData,
    //       success: function (response) {
    //         // Hide the form fields and show the thank-you message
    //         $(".sohna_modal_bar").hide();
    //         $("#thankYouMessage").show();

    //         // Optionally, set a timer to automatically close the modal after a few seconds
    //         setTimeout(function () {
    //           $('#exampleModal').modal('hide');
    //           // Reset the form for the next use and re-enable the submit button
    //           $("#staticForm")[0].reset();
    //           $("#submitButton").attr("disabled", false);
    //           // Show the form and hide the thank-you message for the next use
    //           $(".sohna_modal_bar").show();
    //           $("#thankYouMessage").hide();
    //         }, 3000); // Adjust time as necessary
    //       },
    //       error: function (xhr, status, error) {
    //         // Re-enable the submit button in case of an error
    //         $("#submitButton").attr("disabled", false);
    //         // Handle error - show message to user, log to console, etc.
    //       }
    //     });
    //   });
    // });

  </script>
<?php include('header.php'); ?>

<section class="about_page contact_page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcome_heading">
                    <h2 class="top_heading">Contact Us</h2>

                </div>
            </div>
        </div>
    </div>
</section>


<section class="contact_us gap-all ">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="boxes text-center">
                    <i class="fa-solid fa-envelope"></i>
                    <p class="sec_paragraph"><a href="mailto:brainhealthcareathomeservices@gmail.com">brainhealthcareathomeservices@gmail.com</a></p>

                </div>
            </div>
            <div class="col-md-4">
                <div class="boxes text-center">
                    <i class="fa-solid fa-phone-flip"></i>
                    <p class="sec_paragraph"><a href="tel:+91 9414111488">+919414111488</a></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="boxes text-center">
                    <a href=""><i class="fa-solid fa-location-dot"></i>
                        <p class="sec_paragraph">Near SBI Bank, 23 Sundar Vihar, Durgapura, Jaipur</p>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mt-5">
                <div class="boxes text-center">
                    <a href=""><i class="fa-solid fa-location-dot"></i>
                        <p class="sec_paragraph">Shop No. 137, 160 Feet Road, Opposite Vedansh Ashram R.K. Puram, Pratap Nagar, Sanganer, Jaipur, India</p>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mt-5">
                <div class="boxes text-center">
                    <a href=""><i class="fa-solid fa-location-dot"></i>
                        <p class="sec_paragraph">34, Iskcon Rd, nearby NH11, Radhaswami Nagar, cafe, Mansarovar, Jaipur, Rajasthan 302020</p>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

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
                <!-- <div id="responseMessage1"></div> -->
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

        if(data.status === "success"){
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
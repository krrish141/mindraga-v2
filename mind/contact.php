<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mind</title>

    <!-- Font Family -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">


    <link rel="stylesheet" href="../assets/css/base.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/mind.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">

    <!-- Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

</head>

<body>
    <?php include('header.php') ?>

    <!-- Breadcrums Section Start -->
    <section class="breadcrums-hero" style="background:url('../assets/images/mind/contact-us-breadcrums.png') left center/cover no-repeat;">
        <div class="container">

            <div class="breadcrums-glass-box" >

                <!-- Badge -->
                <span class="light-blue fs-14 fw-700" data-aos="fade-up" data-aos-delay="100">
                    Contact Us
                </span>

                <!-- Heading -->
                <h1 class="fs-32 fw-500 mt-5" data-aos="fade-up" data-aos-delay="200">
                    Let’s build something <br>
                    <span class="blue fs-40 fw-600">
                        that lasts.
                    </span>
                </h1>

                <!-- Paragraph -->
                <p class="w-80 fs-24 fw-500 ms-0"  data-aos="fade-up"  data-aos-delay="300">
                    Whether you're an organization looking to develop your people,
                    or a school ready to invest in your students' emotional
                    foundations — the first step is a conversation.
                </p>

            </div>

        </div>
    </section>
    <!-- Breadcrums Section End -->

    <!-- Button Section Start -->
    <section class="section contact-options">
        <div class="container">
            <div class="row g-4 justify-content-center">

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="contact-option">
                        <input type="radio" name="contactType" class="contact-radio" value="For Corporates">
                        <i class="fa-solid fa-building fs-24"></i>
                        <span class="fs-24">For Corporates</span>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="contact-option">
                        <input type="radio" name="contactType" class="contact-radio" value="For Schools">
                        <i class="fa-solid fa-graduation-cap fs-24"></i>
                        <span class="fs-24">For Schools</span>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="contact-option">
                        <input type="radio" name="contactType" class="contact-radio" value="Explore a Partnership">
                        <i class="fa-solid fa-handshake fs-24"></i>
                        <span class="fs-24">Explore a Partnership</span>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Button Section End -->

    <!--Form Section Start  -->
    <section class="contact-section section" >
        <div class="container">
            <h3 class="fs-32 fw-500 mb-5">Send Us a Message</h3>

            <div class="row g-4 contact-row">
                <!-- FORM -->
                <div class="col-lg-8"  data-aos="fade-right" data-aos-delay="100">
                    <div class="contact-form-box">
                        <form>
                            <div class="row g-4">

                                <div class="col-md-6">
                                    <label class="form-label grey fs-18">Full Name <span>*</span></label>
                                    <input type="text" class="form-control" name="full_name" required>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label grey fs-18">Organization / School <span>*</span></label>
                                    <input type="text" class="form-control" name="organization" required>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label grey fs-18">Your Role / Designation <span>*</span></label>
                                    <input type="text" class="form-control" name="role" required>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label grey fs-18">Phone Number <span>*</span></label>
                                    <input type="text" class="form-control" name="phone_number" required>
                                </div>

                                <div class="col-12">
                                    <label class="form-label grey fs-18">Email Address <span>*</span></label>
                                    <input type="email" class="form-control" name="email" required>
                                </div>

                                <div class="col-12">
                                    <label class="form-label grey fs-18">
                                        You're Reaching Out About <span>*</span>
                                    </label>

                                    <select class="form-control" id="aboutSelect" name="about" required>
                                        <option value="">Select an option</option>
                                        <option value="For Corporates">For Corporates</option>
                                        <option value="For Schools">For Schools</option>
                                        <option value="Explore a Partnership">Explore a Partnership</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>

                                <div class="col-12">
                                    <label class="form-label grey fs-18">Tell Us About Your Context</label>
                                    <textarea class="form-control" rows="5" name="msg" required></textarea>
                                </div>

                            </div>

                            <p class="fs-14 fw-400 grey mt-3 mb-3">
                                No auto-responses. A real person from the Mind team reads every message.
                            </p>

                            <button class="btn-mind-primary text-uppercase btn-md h-50 gap-10">
                                <span class="btn-text">SEND MESSAGE</span>
                                <span class="btn-icon">
                                    <img src="../assets/images/common/arrow-right.svg" alt="arrow icon">
                                </span>
                            </button>

                        </form>

                    </div>

                </div>



                <!-- RIGHT SIDE -->
                <div class="col-lg-4">
                    <!-- TALK TO US -->
                    <div class="contact-card"  data-aos="fade-left" data-aos-delay="200"> 
                        <h5 class="blue fw-500">Talk to Us</h5>

                        <div class="contact-item">
                            <i class="fa-solid fa-phone"></i>
                            <div>
                                <span class="label fs-14">Phone</span>
                                <p class="fs-18"><a href="tel:+917021005426">+91 70210 05426</a></p>
                            </div>
                        </div>

                        <div class="contact-item">
                            <i class="fa-solid fa-envelope fs-18"></i>
                            <div>
                                <span class="label fs-14">Email</span>
                                <p class="fs-18"><a href="mailto:info@mindraga.in">info@mindraga.in</a></p>
                            </div>
                        </div>

                        <div class="contact-item">
                            <i class="fa-regular fa-clock fs-18"></i>
                            <div>
                                <span class="label fs-18">Office Hours</span>
                                <p>Monday – Friday<br>9:30 AM – 6:30 PM IST</p>
                            </div>
                        </div>
                    </div>


                    <!-- FIND US -->
                    <div class="contact-card mt-4"  data-aos="fade-left" data-aos-delay="300">
                        <h5 class="blue fw-500">Find Us</h5>
                        <div class="contact-item">
                            <i class="fa-solid fa-location-dot fs-18"></i>
                            <div>
                                <span class="label">Address</span>
                                <p>
                                    4th Floor, Laram Center <br>
                                    B-1/504, Sir M.A Road <br>
                                    Opposite Andheri Station West <br>
                                    Mumbai, Maharashtra 400058
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- Form Section End -->

    <!-- Maps Section Start -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.756823566253!2d72.84345067466613!3d19.118321150643546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2ac55b3c1f2fe4ab%3A0x3fcaaee835f868c3!2sMindraga!5e0!3m2!1sen!2sin!4v1773310057387!5m2!1sen!2sin"
        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <!-- Maps Section End -->


    <script>
        document.querySelectorAll(".contact-option").forEach(option => {

            option.addEventListener("click", function() {

                const radio = this.querySelector(".contact-radio");
                radio.checked = true;

                const value = radio.value;

                const dropdown = document.getElementById("aboutSelect");
                dropdown.value = value;

                dropdown.scrollIntoView({
                    behavior: "smooth",
                    block: "center"
                });

            });

        });
    </script>

    <?php include('footer.php') ?>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/mind.js"></script>

</body>

</html>
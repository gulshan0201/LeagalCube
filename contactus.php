<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LegalCUBE | Your Legal Guide</title>
    <link rel="icon" href="./images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="contactusstyle.css">
    <link rel=”stylesheet” href=”https://fonts.googleapis.com/icon?family=Material+Icons”>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://kit.fontawesome.com/522d809558.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <div id="fb-root"></div>
    <!-- <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v13.0" nonce="7a0a7Zmt"></script> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" /> -->


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>
    <a href="https://api.whatsapp.com/send?phone=918777426460&text=Hi,%20I%20have%20a%20query%20regarding" class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"> <a href="index.html"><img src="./images/logo.png" width="70px"></a> </div>
            <ul class="menu">
                <li><a href="index.php" class="menu-btn">Home</a></li>
                <li><a href="reviews.php" class="menu-btn">Reviews</a></li>
                <li><a href="blog.php" class="menu-btn">Blog</a></li>
                <li><a href="contactus.php" class="menu-btn">Contact Us</a></li>
                <li><a href="booking.php" class="menu-btn">Book Your Free Consultation</a></li>
            </ul>
            <div class="menu-btn">
                <img src="./images/menubar.jpg" alt="menu" width="20px">
            </div>
        </div>
    </nav>
    <br>


    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact Us</h2>
            <div class="contact-content">
                <div class="column left">
                    <h3>Locate Us</h3>
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3686.6389004893026!2d88.36213221417376!3d22.48020004202299!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a027102cc095555%3A0xeb2fbd26bef3c88b!2sLegalCUBE!5e0!3m2!1sen!2sin!4v1654207192002!5m2!1sen!2sin" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <h3>Get in Touch</h3>
                    <p>For any legal advice, reach us by calling, dropping a mail, or visiting our chamber at the following address. You can also directly drop a message using the form.</p>
                    <div class="contact-info">
                        <div class="info-item">
                            <i class="fas fa-phone"></i>
                            <a href="tel:8777426460">8777426460</a>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-phone"></i>
                            <a href="tel:8001643304">8001643304</a>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:info@legalcube.in">info@legalcube.in</a>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <p>GR-FR; FL -GA1, 25/A Subhas Pally, LP-168/14/1, Netaji Nagar, Kolkata, PIN - 700092</p>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <h2>Contact Form</h2>
                    <br>
                    
                    <?php
					
					if ($_SERVER["REQUEST_METHOD"] == "POST") {
					$name = htmlspecialchars($_POST['name']);
					$email = htmlspecialchars($_POST['email']);
					$subject = htmlspecialchars($_POST['subject']);
					$message = htmlspecialchars($_POST['message']);
					$uploadOk = 1;

					// Handle file upload
					if (isset($_FILES["file"])) {
					$target_dir = "uploads/";
					$target_file = $target_dir . basename($_FILES["file"]["name"]);
					$fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
					$fileSize = $_FILES["file"]["size"];

					// Check if file already exists
					if (file_exists($target_file)) {
					echo '<p class="message error btn btn-danger text-white">Sorry, file already exists.</p>';
					$uploadOk = 0;
					}

					// Check file size (limit to 5MB)
					if ($fileSize > 5000000) {
					echo '<p class="message error btn btn-danger text-white">Sorry, your file is too large.</p>';
					$uploadOk = 0;
					}

					// Allow certain file formats
					$allowedTypes = ["jpg", "png", "jpeg", "gif", "pdf", "doc", "docx"];
					if (!in_array($fileType, $allowedTypes)) {
					echo '<p class="message error btn btn-danger text-white">Sorry, only JPG, JPEG, PNG, GIF, PDF, DOC, and DOCX files are allowed.</p>';
					$uploadOk = 0;
					}

					// Check if $uploadOk is set to 0 by an error
					if ($uploadOk == 1) {
					if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
					echo '<p class="message success bg-primary text-white">The file ' . htmlspecialchars(basename($_FILES["file"]["name"])) . ' has been uploaded.</p>';
					} else {
					echo '<p class="message error btn btn-danger text-white">Sorry, there was an error uploading your file.</p>';
					}
					}
					}

					if (!empty($name) && !empty($email) && !empty($subject) && !empty($message) && $uploadOk == 1) {
					if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
					$to = "expertsassignmenthelp@gmail.com"; // Replace with your desired email address
					$email_subject = "New message from $name: $subject";
					$email_body = "You have received a new message from $name.\n\n".
					"Here are the details:\n\n".
					"Name: $name\n".
					"Email: $email\n".
					"Subject: $subject\n".
					"Message: $message\n".
					"Uploaded File: https://tutorhelp4you.com/uploads/".htmlspecialchars(basename($_FILES["file"]["name"]));

					$headers = "From: noreply@tutorhelp4you.com\r\n";
					$headers .= "Reply-To: $email\r\n";

					if (mail($to, $email_subject, $email_body, $headers)) {
					echo '<p class="message success bg-primary text-white">Message sent successfully!</p>';
					} else {
					echo '<p class="message error btn btn-danger text-white">Message could not be sent.</p>';
					}
					} else {
					echo '<p class="message error btn btn-danger text-white">Invalid email address.</p>';
					}
					} else {
					echo '<p class="message error btn btn-danger text-white">All fields are required.</p>';
					}
					}

					?>
                    


                    <form action="contactus.php" method="POST" enctype="multipart/form-data" class="contact-form">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" placeholder="enter your name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="number" name="phone" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea name="message" rows="4" required></textarea>
                        </div>
                        <div class="form-group">
                        <label for="file">Upload file (No spaces in file name)</label>
                        <input type="file" id="file" placeholder="File name should not have spaces" name="file">
                        </div>
                        <button type="submit" name="submit" class="submit-button">Submit</button>
                    </form>
                </div>
            </div>
            <!-- <h2 class="title">Follow Our Social Media Pages</h2>
            <div class="social-pages">
                <div class="social-item">
                    <div data-mc-src="5389334c-f3dd-4a65-ac28-af059ed10e87#instagram"></div>
                </div>
                <div class="social-item">
                    <div class="fb-page" data-href="https://www.facebook.com/legalcube" data-tabs="timeline" data-width="300" data-height="700" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/legalcube" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/legalcube">LegalCUBE</a></blockquote>
                    </div>
                </div>
                <div class="social-item">
                    <a class="twitter-timeline" href="https://twitter.com/LegalCUBE_Kol?ref_src=twsrc%5Etfw" data-width="300" data-height="600">Tweets by LegalCUBE_Kol</a>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
            </div> -->
        </div>
    </section>




    <br>
    <br>




    <!-- footer section start -->
    <!-- footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>LegalCUBE</h4>
                    <p class="aboutlegalcube">
                        LegalCUBE is one of the best legal advisory firm in Kolkata. It is a family of which its clients are valued members. The Firm builds relations founded on trust, transparency and expert legal assistance. Over time, the Firm has established itself amongst the premier Law Firms of Eastern India.
                    </p>
                </div>
                <div class="footer-col">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="index.html#about">about us</a></li>
                        <li><a href="index.html#services">our services</a></li>
                        <li><a href="reviews.html">Reviews</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Contact Us</h4>
                    <div class="address">
                        <i class="fas fa-map-marker-alt"><span class="para"> GR-FR; FL -GA1, 25/A Subhas Pally, LP-168/14/1, Netaji Nagar, Kolkata, PIN - 700092</span></i>
                    </div>
                    <br>
                    <div class="emailaddress">
                        <i class="fas fa-envelope"> <span class="para"> <a href="mailto:info@legalcube.in">info@legalcube.in</a> </span></i>
                    </div>
                    <br>
                    <div class="phone">
                        <i class="fa-solid fa-phone"><span class="para"><a href="tel:8777426460">8777426460</a> </span> </i>
                    </div>
                    <br>
                    <div class="phone">
                        <i class="fa-solid fa-phone"><span class="para"><a href="tel:8001643304">8001643304</a> </span> </i>
                    </div>

                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="https://www.facebook.com/legalcube/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/LegalCUBE_Kol"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/legalcube_kolkata"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/company/legalcube"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <br>

            </div>
        </div>
    </footer>
    <footer class="footer2">
        <div class="credit">
            <span>

                &copy 2022 LegalCUBE | All rights reserved.
                <br>
                Developed and Mainatined by <a href="https://www.linkedin.com/in/souvik-saha-jupe/" class="cv">Souvik Saha</a>

            </span>
            <div class="ptc">
                <a href="disclaimer.html" style="color:white;">Disclaimer</a>
                <span>&middot;</span>
                <a href="#" style="color:white;">Privacy</a>
                <span>&middot;</span>
                <a href="#" style="color:white;">T & C</a>
            </div>
        </div>
    </footer>
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>
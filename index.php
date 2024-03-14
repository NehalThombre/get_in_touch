<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Contact Us Page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="contactUs">
        <div class="title">
            <h2>Get In Touch</h2>
        </div>
        <div class="box">
            <div class="contact form">
                <h3>Send Message</h3>
                <form  action="action.php" method="post">
                    <div class="formBox">
                        <div class="row50">
                            <div class="inputBox">
                                <span>Your Name</span>
                                <input type="text" placeholder="John" name="Your_Name" required/>
                            </div>

                        </div>
                        <div class="row50">
                            <div class="inputBox">
                                <span>Email</span>
                                <input type="email" placeholder="John@gmail.com" name="email" required/>
                            </div>

                        </div>
                        <div class="row100">
                            <div class="inputBox">
                                <span>Message</span>
                                <textarea placeholder="Type your message here"name="Message"></textarea>
                            </div>

                        </div>
                        <div class="row100">
                            <div class="inputBox">
                                <input type="submit" value="Send" />
                            </div>

                        </div>
                    </div>
                </form>
            </div>
            <!--  info -->
            <div class="contact info">
                <h3>Contact Info</h3>
                <div class="infoBox">
                    <div>
                        <span><ion-icon name="location-outline"></ion-icon></span>
                        <p>3rd floor, Sai Prabhu Appt., Ravi Nagar Square, Nagpur</p>
                    </div>
                    <div>
                        <span><ion-icon name="mail-outline"></ion-icon></span>
                        <a href="mailto:hello@mikechemardin.com">hello@mikechemardin.com</a>
                    </div>
                    <div>
                        <span><ion-icon name="logo-skype"></ion-icon></span>
                        <a href="skypeto:mike.chemardin">mike.chemardin </a>
                    </div>
                    <div>
                        <span><ion-icon name="call-outline"></ion-icon></span>
                        <a href="tel:+33619530144">+33619530144</a>
                    </div>

                    <!-- Social Media -->
                    <ul class="sci">
                        <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
                        <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
                        <li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>

                    </ul>
                </div>
            </div>
            <!--  map -->
            <div class="contact map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.136024403471!2d79.05470070802005!3d21.146984355807014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd4c05c594f9145%3A0xeab87509b77906c7!2sBuzo%20Media%20Services!5e0!3m2!1sen!2sin!4v1710269906943!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" ></iframe>
            </div>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
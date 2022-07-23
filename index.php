<?php require('includes/utilities.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Website Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet" type="text/css">
    <link rel="canonical" href="">
    <script src="https://kit.fontawesome.com/cf72e27b3d.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>PDX Handyman Services LLC</title>
</head>

<body>

    <?php require_once('includes/header.html.php'); ?>

    <main>

        <div id="hero-banner">
            <img src="images/projects/14.jpg" alt="pdx handyman services llc">
            <div id="hero-text">
                <div id="background">
                    <h2>Jobs Unlimited: Odd. Even. Any</h2>
                    <h3>With over 30 years of experience, his services have helped many clients renovate their homes and
                        patios across Oregon.</h3>
                    <h4>PDX Handyman Services LLC prides itself in offering clients the best handyman experience and
                        luxurious homes and patios.</h4>
                    <a id="contact-button" href="#contact-section">Contact Today</a>
                </div>
            </div>
        </div>

        <div id="about-section">
            <div class="text">
                <h2>The Ultimate Handyman Experience</h2>
                <p>PDX Handyman Services LLC is a professional renovator who offers a wide range of high-quality
                    services like renovation, landscape, hardscape, painting, and installation. PDX Handyman Services
                    LLC has renovated many homes entirely for many clients and future homeowners.</p>
                <h2>About Me</h2>
                <p>Hello, I am Jose Valerio (owner) and I’ve been working as a Handyman for over 30 years. I started
                    working
                    as a handyman back in my home country, Mexico, and started my business after moving to the U.S.</p>
            </div>
        </div>

        <div id="projects-section">

            <?php require_once('includes/slideshow.html.php'); ?>

            <div class="text">
                <h2>Ethical Practices & Hard Work</h2>
                <p>PDX Handyman Services LLC values ethical practices to ensure people’s safety and daily living. I take
                    pride in my work and motivate myself to work hard to meet deadlines and give great services.</p>
            </div>

        </div>

        <div id="services-section">
            <h2>Services</h2>
            <div id="services-grid">
                <div class="boxes">
                    <img src="images/handyman.jpg" alt="">
                    <h3>Handyman</h3>
                </div>

                <div class="boxes">
                    <img src="images/remodeling.jpg" alt="">
                    <h3>Renovation</h3>
                </div>

                <div class="boxes">
                    <img src="images/landscape.jpg" alt="">
                    <h3>Landscape</h3>
                </div>

                <div class="boxes">
                    <img src="images/hardscape.jpg" alt="">
                    <h3>Hardscape</h3>
                </div>

                <div class="boxes">
                    <img src="images/painting.jpg" alt="">
                    <h3>Painting</h3>
                </div>

                <div class="boxes">
                    <img src="images/installation.jpg" alt="">
                    <h3>Installation</h3>
                </div>
            </div>
            <div class="text">
                <h2>Work Locations</h2>
                <p>I am available in your area! <br><br>All Forest Grove, Cornelius, Hillsboro, Beaverton, Aloha,
                    Tigard,
                    Newberg, Tillamook, Oregon City, Portland, McMinnville, Lake Oswego, and Vancouver Washington!</p>
            </div>
        </div>

        <div id="contact-section">
            <h2>Contact</h2>
            <div id="contact-grid">
                <img src="images/business-card.jpg" alt="">
                <div id="contact-info">
                    <h3>Need a Handyman or Need Your Home Renovated?</h3>
                    <p>Jose Valerio<br>(Owner)</p>
                    <a href="tel:5033333333" id="contact-phone-mobile">Call Now</a>
                    <p id="contact-phone-desktop">5033333333</p>
                </div>
            </div>
        </div>

    </main>

    <?php require_once('includes/footer.html.php'); ?>

    <button id="backUp">Top</button>

    <script src="scripts.js" type="text/javascript"></script>
</body>

</html>
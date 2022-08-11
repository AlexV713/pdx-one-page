<?php require('includes/utilities.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="PDX Handyman Services LLC is a local handyman, renovator, landscaper, and painter in Oregon.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta property="og:title" content="PDX Handyman Services LLC"/>
    <meta property="og:image" content="images/pdx-banner.png"/>
    <meta property="og:description" content="PDX Handyman Services LLC is a local handyman, renovator, landscaper, and painter in Oregon."/>
    <meta property="og:url" content="https://pdxhandymanservicesllc.com/"/>
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="628" />
    <meta property="og:type" content="website"/>

    <link href="styles.css" rel="stylesheet" type="text/css">
    <link rel="canonical" href="https://pdxhandymanservicesllc.com/">

    <link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicons/favicon-16x16.png">
    <link rel="manifest" href="images/favicons/site.webmanifest">
    
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
                <video controls>
                    <source src="images/videos/video-2.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
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
                    <p></p>
            </div>

            <video controls>
                <source src="images/videos/video.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>

        </div>

        <div id="services-section">
            <h2>Services</h2>
            <div id="services-grid">
                <div class="boxes">
                    <img src="images/handyman.jpg" alt="handyman services services in oregon">
                    <h3>Handyman</h3>
                </div>

                <div class="boxes">
                    <img src="images/remodeling.jpg" alt="renovation services services in oregon">
                    <h3>Renovation</h3>
                </div>

                <div class="boxes">
                    <img src="images/landscape.jpg" alt="landscape services services in oregon">
                    <h3>Landscape</h3>
                </div>

                <div class="boxes">
                    <img src="images/hardscape.jpg" alt="hardscape services services in oregon">
                    <h3>Hardscape</h3>
                </div>

                <div class="boxes">
                    <img src="images/painting.jpg" alt="interior and exterior painting services in oregon">
                    <h3>Painting</h3>
                </div>

                <div class="boxes">
                    <img src="images/installation.jpg" alt="installation services in oregon">
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
                <img src="images/business-card.jpg" alt="contact pdx handyman services today">
                <div id="contact-info">
                    <h3>Need a Handyman or Need Your Home Renovated?</h3>
                    <p>Jose Valerio<br>(Owner)</p>
                    <a href="tel:5033510987" id="contact-phone-mobile">Call Now</a>
                    <p id="contact-phone-desktop">(503) 351-0987</p>
                    <p><i><strong>Potental clients only.</strong> <br>Agencies and marketers will be ignored.</i></p>
                </div>
            </div>
        </div>

    </main>

    <?php require_once('includes/footer.html.php'); ?>

    <button id="backUp">Top</button>

    <script src="scripts.js" type="text/javascript"></script>
</body>

</html>
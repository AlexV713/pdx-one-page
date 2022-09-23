<?php require('includes/utilities.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description"
        content="PDX Handyman Services LLC is a local handyman, renovator, landscaper, and painter in Oregon.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta property="og:title" content="PDX Handyman Services LLC" />
    <meta property="og:image" content="https://pdxhandymanservicesllc.com/images/banner.jpg" />
    <meta property="og:description"
        content="PDX Handyman Services LLC is a local handyman, renovator, landscaper, and painter in Oregon." />
    <meta property="og:url" content="https://pdxhandymanservicesllc.com/" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="628" />
    <meta property="og:type" content="website" />

    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="canonical" href="https://pdxhandymanservicesllc.com/">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo&display=swap" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicons/favicon-16x16.png">
    <link rel="manifest" href="images/favicons/site.webmanifest">

    <script src="https://kit.fontawesome.com/cf72e27b3d.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>PDX Handyman Services LLC</title>
</head>

<body>
    <header>
        <div id="desktop-navigation">
            <img src="images/pdx-logo.png" alt="handyman">
            <nav>
                <a href="">Home</a>
                <a href="#services">Services</a>
                <a href="#about">About</a>
                <a href="#projects">Projects</a>
                <a href="#contact" id="contact-button">Contact</a>
            </nav>
        </div>

        <nav id="mobile-nav">
            <div id="front">
                <a href="https://pdxhandymanservicesllc.com/" id="logo">
                    <img src="images/pdx-logo.png" alt="handyman">
                </a>
                <a href="#" id="toggle">
                    <i class="fas fa-bars"></i>
                </a>
            </div>
            <ul id="mobile-links">
                <li><a href="https://pdxhandymanservicesllc.com/">Home</a></li>
                <li><a href="#about-section">About</a></li>
                <li><a href="#projects-section">Projects</a></li>
                <li><a href="#services-section">Services</a></li>
                <li><a href="#contact-section">Contact</a></li>
            </ul>
        </nav>

        <div id="title">
            <h1>PDX Handyman Services LLC</h1>
            <h2>Jobs Unlimited: Odd. Even. Any</h2>
        </div>

    </header>

    <main>

        <section id="services">
            <h2>Services</h2>
            <div id="services-wrapper">
                <div class="service">
                    <img src="images/handyman.jpg" alt="">
                    <h3>Handyman</h3>
                    <p>Short description of the service.</p>
                </div>
                <div class="service">
                    <img src="images/remodeling.jpg" alt="">
                    <h3>Renovation</h3>
                    <p>Short description of the service.</p>
                </div>
                <div class="service">
                    <img src="images/landscape.jpg" alt="">
                    <h3>Landscape</h3>
                    <p>Short description of the service.</p>
                </div>
                <div class="service">
                    <img src="images/hardscape.jpg" alt="">
                    <h3>Hardscape</h3>
                    <p>Short description of the service.</p>
                </div>
                <div class="service">
                    <img src="images/painting.jpg" alt="">
                    <h3>Paint</h3>
                    <p>Short description of the service.</p>
                </div>
                <div class="service">
                    <img src="images/installation.jpg" alt="">
                    <h3>Installation</h3>
                    <p>Short description of the service.</p>
                </div>
            </div>
            <button><a href="#contact">Contact</a></button>
        </section>

        <section id="about">
            <h2>About PDX Handyman Services LLC</h2>
            <div id="about-wrapper">
                <div id="pro">
                    <h3>The Ultimate Handyman Experience</h3>
                    <p>PDX Handyman Services LLC is a professional renovator who offers a wide range of high-quality
                        services like renovation, landscape, hardscape, painting, and installation. <br><br>PDX Handyman
                        Services LLC has renovated many homes entirely for many clients and future homeowners.</p>
                    <h3>Ethical Practices & Hard Work</h3>
                    <p>PDX Handyman Services LLC values ethical practices to ensure people’s safety and daily living. I
                        take pride in my work and motivate myself to work hard to meet deadlines and give great
                        services.</p>
                </div>
                <video controls>
                    <source src="images/videos/video-2.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div id="about-him">
                <h3>My Story</h3>
                <p>Hello, I am Jose Valerio (owner) and I’ve been working as a Handyman for over 30 years. I started
                    working as a handyman back in my home country, Mexico, and started my business after moving to the
                    U.S.</p>
                <video controls>
                    <source src="images/videos/video.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </section>

        <section id="projects">
            <?php require_once("includes/slideshow.html.php"); ?>
        </section>

        <section id="contact">
            <h2>Contact</h2>

            <h3>Need a Handyman or Need our Home Renovated?</h3>
            <p>Jose Valerio</p>
            <p><i>(Owner)</i></p>
            <p>(503) 351-0987</p>
            <p><i>*Potential clients only. Agencies and marketers will be ignored.</i></p>

            <h3>Locations</h3>
            <p>I am available in your area!</p>
            <p>All Forest Grove, Cornelius, Hillsboro, Beaverton, Aloha, Tigard, Newberg, Tillamook, Oregon City,
                Portland, McMinnville, Lake Oswego, and Vancouver Washington!</p>
        </section>

    </main>

    <?php require_once("includes/footer.html.php"); ?>

    <button id="backUp">Top</button>

    <script src="scripts.js" type="text/javascript"></script>

</body>

</html>
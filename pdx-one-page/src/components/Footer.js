import React from 'react';

function Footer() {
    return (
        <>
        <footer>
            <div id="footer-grid">

                <div>
                    <h2>PDX Handyman Services LLC</h2>
                    <p>Home owners across Oregon have been calling for my services for over 30 years!</p>
                </div>

                <div>
                    <h2>Quick Links</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#about-section">About</a></li>
                        <li><a href="#projects-section">Projects</a></li>
                        <li><a href="#services-section">Services</a></li>
                        <li><a href="#contact-section">Contact</a></li>
                    </ul>
                </div>

                <div>
                    <h2>Contact</h2>
                    <a href="tel:503333333" id="mobile-phone">5033333333</a>
                    <p id="desktop-phone">5033333333</p>
                </div>

            </div>
            <p class="footer-copyright">Copyright @PDX Handyman Services LLC<br/>Website created by Alejandro Valerio</p>
        </footer>
        </>
    );
}

export default Footer;
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

<?php
$active = "index"; // Mark 'index' as the active page
include 'header.php'; // Include the header
?>

<!-- Services Section -->
<section id="services" class="fade-in">
    <div id="services1">
        <img class="fade-in" src="service-1019821_640.webp" alt="Services Image">
    </div>
    <div id="services2">
        <h2>Our Services</h2>
        <p>We offer a wide range of services to help businesses grow and succeed. Our key services include:</p>
        <ul>
            <li><strong>Web Development:</strong> We build modern, responsive, and user-friendly websites.</li>
            <li><strong>SEO Optimization:</strong> Improve your search engine ranking and drive more traffic to your website.</li>
            <li><strong>Digital Marketing:</strong> From social media to content creation, we help your brand grow online.</li>
            <li><strong>Consulting Services:</strong> Strategic guidance to help you make informed decisions.</li>
            <li><strong>E-commerce Solutions:</strong> We create robust e-commerce platforms tailored to your business needs.</li>
            <li><strong>Content Management:</strong> Efficient solutions for managing and updating your website content seamlessly.</li>
            <li><strong>Website Maintenance:</strong> Ongoing support and maintenance services to keep your website running smoothly.</li>
        </ul>
    </div>
</section>
<!-- Blog Section -->
<section id="blog" class="fade-in">
    <div id="blog2">
        <h2>Our Blog</h2>
        <ul>
            <li>Progressive Web Apps combine the best of web and mobile apps, offering users a native app-like experience through their web browsers. PWAs load quickly, work offline, and can be installed on users' devices without going through app stores. They are built using standard web technologies like HTML, CSS, and JavaScript but provide the same functionality as native apps. 
            Web Development Trends<a href="https://blog.hubspot.com/website/web-development-trends"> - Articles 1</a></li>
            <li> Artificial Intelligence (AI) is becoming more integrated with search engines through tools like Google’s MUM (Multitask Unified Model). MUM improves the understanding of complex queries and cross-lingual searches. 
Use structured data to provide context to your content.
Focus on natural language processing (NLP) by writing content that mirrors conversational search queries and intent.  Best Practices for SEO in 2024<a href="https://www.udemy.com/course/ultimate-seo-training-course/"> - Articles 2</a></li>
        <li> Blogging: Regularly publishing informative and engaging blog posts can help establish authority and improve SEO. 
        Video Content: Utilize platforms like YouTube and social media to share informative videos, tutorials, and behind-the-scenes content. Video content tends to have higher engagement rates.    
        Effective Digital Marketing Strategies<a href="https://blog.hubspot.com/marketing/digital-strategy-guide"> - Articles 3</a></li>
        <li> ocal by Flywheel: A popular local development environment for WordPress that simplifies setup and management.
XAMPP: A free and open-source cross-platform web server solution stack package for PHP and MySQL, which you can use to run WordPress locally.
MAMP: Similar to XAMPP, but primarily for macOS; MAMP provides a local server environment for WordPress development.   Devtools for Wordpress<a href="https://developer.wordpress.com/docs/developer-tools/"> - Articles 4</a></li>
        <li> Understand WordPress Basics,Learn HTML, CSS, and JavaScript,    Master PHP,   Theme Development,Plugin Development  mastering wordpress code<a href="https://www.pixelcrayons.com/blog/software-development/best-practices-for-mastering-wordpress-development/"> - Articles 5</a></li>
        </ul>
    </div>
    <div id="blog1">
        <img class="fade-in" src="istockphoto-966390882-612x612.jpg" alt="Blog Image">
    </div>
</section>


<!-- About Us Section -->
<section class="about-section fade-in" id="about">
    <div class="about-container">
        <div class="about-image">
            <img src="th (1).jpeg" alt="About Us Image" class="fade-in">
        </div>
        <div class="about-text fade-in">
            <h2>About Us</h2>
            <p>We are a team of passionate developers, marketers, and digital strategists.</p>
            <p>Our mission is to deliver innovative solutions that drive success for our clients.</p>
            <p> Our team of skilled WordPress developers, designers, and digital marketers are passionate about delivering high-quality services tailored to your specific needs. With years of experience in the industry, we understand the nuances of WordPress and leverage its powerful features to create custom solutions for every client.</p>
        </div>
    </div>
</section>

<!-- footer.php -->
<footer>
    <div class="footer-container">
        

        <div class="footer-links">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">List Layout</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>

        <div class="footer-contact">
            <p><strong>Contact Us:</strong></p>
            <p>BTM Layout 2nd Stage Water Tank</p>
            <p>+7026-968-845</p>
            <p><a href="patangechetan05@gmail.com">patangechetan05@gmail.com</a></p>
        </div>

        <div class="footer-social">
            <a href="#"><img src="facebook.png" alt="Facebook"></a>
            <a href="#"><img src="twitter.png" alt="Twitter"></a>
            <a href="https://www.linkedin.com/in/chetan-patange/"><img src="linkedin.png" alt="LinkedIn"></a>
            <a href="https://github.com/chetanpatange59"><img src="github.png" alt="GitHub"></a>
            <a href="https://www.instagram.com/this_is_chetan__/"><img src="instagram.png" alt="Instagram"></a>
        </div>

        <!-- <div class="footer-subscribe">
            <form>
                <input type="email" placeholder="Your email address">
                <button type="submit">Sign Up</button>
            </form>
        </div> -->
    </div>
    <div id="copywrite">
    <p>&copy; 2023. All rights reserved. Designed by @Chetan.</p>
</div>
</footer>
</body>
</html>

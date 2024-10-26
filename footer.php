<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<footer>
    <div class="footer-container">
        <div class="footer-links">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">List Layout</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>

        <div class="footer-contact">
            <p><strong>Contact Us:</strong></p>
            <p>BTM Layout 2nd Stage Water Tank </p>
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

<style>
   
html, body {
    height: 100%;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
}

body {
    min-height: 100vh; 
}

main {
    flex: 1; 
}


footer {
    background-color: #333;
    color: white;
    padding: 40px 20px;
    font-family: 'Roboto', sans-serif;
    text-align: center;
    margin-top: auto; 
    width: 100%;
}

.footer-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: flex-start;
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px 0;
    gap: 40px;
}

.footer-links, .footer-contact, .footer-social, .footer-subscribe {
    flex: 1;
    min-width: 200px;
}

.footer-links ul {
    list-style: none;
    padding: 0;
}

.footer-links ul li {
    margin-bottom: 10px;
}

.footer-links ul li a {
    color: #ccc;
    text-decoration: none;
    font-size: 16px;
    transition: color 0.3s;
}

.footer-links ul li a:hover {
    color: #ffcc00;
}

.footer-contact p {
    font-size: 14px;
    margin: 5px 0;
}

.footer-social a {
    display: inline-block;
    margin: 5px;
}

.footer-social a img {
    width: 24px;
    height: 24px;
}

.footer-subscribe form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.footer-subscribe input {
    padding: 10px;
    width: 100%;
    margin-bottom: 10px;
    font-size: 14px;
    border: none;
    border-radius: 4px;
}

.footer-subscribe button {
    padding: 10px;
    background-color: #ff6600;
    color: white;
    border: none;
    cursor: pointer;
    font-size: 14px;
    border-radius: 4px;
}

.footer-subscribe button:hover {
    background-color: #ffcc00;
}

#copywrite {
    margin-top: 20px;
    font-size: 12px;
    color: #ccc;
    text-align: center;
}

@media (max-width: 768px) {
    .footer-container {
        flex-direction: column;
        text-align: center;
    }
}

</style>

    
</body>
</html>
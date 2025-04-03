<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - IORA</title>
    <link rel="stylesheet" href="contact.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="shortcut icon" href="logo/nobglogo.png" type="image/x-icon">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="container">
            <div class="logo">
                <a href="index.php">
                    <img src="logo/nobglogo.png" alt="logo" width="75px" height="70px">
                </a>
            </div>
            <div class="mainmenu">
                <ul class="nav-links">
                    <li><a href="About Us.php">About Us</a></li>
                    <li><a href="news.php">News</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
                <div class="search-container">
                    <form action="search-results.html" method="GET">
                        <input type="text" id="search-bar" name="query" placeholder="Search..." />
                        <button type="submit" class="search-button">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>
                </div>
                <script>
                    // Simple client-side search function
                    document.getElementById("search-bar").addEventListener("input", function() {
                        const query = this.value.toLowerCase();
                        const items = document.querySelectorAll(".searchable-item");
                
                        items.forEach(item => {
                            const text = item.textContent.toLowerCase();
                            if (text.includes(query)) {
                                item.style.display = "block";
                            } else {
                                item.style.display = "none";
                            }
                        });
                    });
                </script>
                <div class="button">
                    <a class="btn btn-light" href="LogIn.html">
                        <i class="fas fa-user"></i> Log In
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
const navbar = document.querySelector(".navbar");

window.addEventListener("scroll", function () {
    if (window.scrollY > 50) { // Adjust scroll distance as needed
        navbar.classList.add("scrolled");
    } else {
        navbar.classList.remove("scrolled");
    }
});
});

    </script>
    <section class="contact-intro">
        <div class="intro-container">
            <h1>Contact Us</h1>
            <p>Have a question, suggestion, or issue? We'd love to hear from you! Fill out the form below, and we'll get back to you as soon as possible.</p>
        </div>
    </section>
    <section class="contact-form-section">
        <div class="contact-form-container">
            <form action="submit_contact.php" method="POST" class="contact-form">
                <label for="name">Your Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your full name" required>
                
                <label for="email">Your Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
                
                <label for="message">Your Message</label>
                <textarea id="message" name="message" placeholder="Write your message here..." rows="5" required></textarea>
                
                <button type="submit">Send Message</button>
            </form>
        </div>
    </section>
    <section class="contact-info">
        <div class="contact-info-container">
            <h2>Our Contact Details</h2>
            <p><i class="fas fa-envelope"></i> Email: support@ioragames.com</p>
            <p><i class="fas fa-phone-alt"></i> Phone: +1 800-123-4567</p>
            <p><i class="fas fa-map-marker-alt"></i> Address: 123 IORA Lane, Gametown, USA</p>
        </div>
    </section>
    <footer>
        <div class="footer-socials-container">
            <div class="footer-socials">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <p>&copy; 2024 IORA Games. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>

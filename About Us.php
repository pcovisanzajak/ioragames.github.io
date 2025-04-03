<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - IORA</title>
    <link rel="stylesheet" href="about.css">
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
    <section class="about-intro">
        <div class="about-intro-container">
            <h1>Welcome to IORA Games</h1>
            <p>
                Inspired by the vibrant Iora bird, we at IORA Games are passionate about creating immersive and dynamic gaming experiences that captivate players worldwide. Our mission is to combine innovation, creativity, and technology to deliver unforgettable moments for gamers of all ages.
            </p>
        </div>
    </section>
    <section class="about-details">
        <div class="about-detail-container">
            <div class="vision">
                <h2>Our Vision</h2>
                <p>
                    To become a global leader in the gaming industry by building a community where players, creators, and enthusiasts come together to celebrate the art of gaming.
                </p>
            </div>
            <div class="mission">
                <h2>Our Mission</h2>
                <p>
                    To craft high-quality games that inspire joy, challenge the mind, and bring people closer through shared adventures.
                </p>
            </div>
            <div class="team">
                <h2>Meet the Team</h2>
                <p>
                    Behind every great game is a talented team of developers, designers, artists, and storytellers. We take pride in our diverse and passionate team, working tirelessly to push the boundaries of gaming.
                </p>
            </div>
        </div>
    </section>
    <footer>
        <div class="footer-container">
            <div class="footer-socials">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="https://x.com/IoraGames"><i class="fab fa-x-twitter"></i></a>
                <a href="https://www.instagram.com/ioragames/"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <p>&copy; 2024 IORA Games. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
     
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News - IORA</title>
    <link rel="stylesheet" href="news.css">
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

    <!-- News Intro Section -->
    <section class="news-intro">
        <div class="container">
            <h1>IORA News & Updates</h1>
            <p>Stay informed with the latest news, game releases, and updates from the world of IORA Games.</p>
        </div>
    </section>

    <!-- News Articles Section -->
    <section class="news-articles">
        <div class="news-container">
            <!-- News Article 1 -->
            <div class="news-item">
                <img src="logo/release.png" alt="Game Release">
                <div class="news-content">
                    <h2>New Game Release: *Adventures of Iora*</h2>
                    <p>Experience the thrill of adventure with our latest release, "Adventures of Iora". Dive into a world of mystery, strategy, and excitement. Available now on all platforms!</p>
                    <a href="readmore1.html" class="read-more">Read More</a>
                </div>
            </div>

            <!-- News Article 2 -->
            <div class="news-item">
                <img src="logo/win.png" alt="Award Win">
                <div class="news-content">
                    <h2>IORA Wins Game of the Year 2024</h2>
                    <p>We are honored to receive the Game of the Year award for our groundbreaking title, *Shadowed Worlds*. Thank you to our fans for the support!</p>
                    <a href="award-news.html" class="read-more">Read More</a>
                </div>
            </div>

            <!-- News Article 3 -->
            <div class="news-item">
                <img src="logo/upadate.png" alt="Update Announcement">
                <div class="news-content">
                    <h2>Major Update Coming to *Shadowed Worlds*</h2>
                    <p>Prepare for new levels, exciting features, and gameplay enhancements. The update launches next month—stay tuned for more details!</p>
                    <a href="update-news.html" class="read-more">Read More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <div class="footer-container">
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

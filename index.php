<?php
session_start();
$loggedIn = isset($_SESSION['user_id']);
$username = $loggedIn ? $_SESSION['username'] : 'Guest';
?>

<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IORA</title>
    <script src="selecthomegame.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="logo/nobglogo.png" type="image/x-icon">
</head>
<body>
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

                <div class="user-menu">
                    <?php if (isset($_SESSION['username']) && !empty($_SESSION['username'])): ?>
                        <div class="dropdown">
                        <span class="dropdown-btn"><?php echo htmlspecialchars($_SESSION['username']); ?></span>
                            <div class="dropdown-content">
                                <a href="profile.php">Profile</a>
                                <a href="settings.php">Settings</a>
                                <a href="logout.php">Log Out</a>
                            </div>
                        </div>
                    <?php else: ?>
                        <a class="btn btn-light" href="LogIn.php">
                            <i class="fas fa-user"></i> Log In
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>

    <style>
        .dropdown {
            position: relative;
            display: inline-block;
        }
        .dropdown-btn {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        .dropdown-content a:hover {background-color: #f1f1f1;}
        .dropdown:hover .dropdown-content {display: block;}
        .dropdown:hover .dropdown-btn {background-color: #555;}
    </style>
                    <div class="video-overlay">
                        <video autoplay muted loop id="myVideo">
                            <source src="videos/lolvideo2.mp4" type="video/mp4">
                            Your browser does not support HTML5 video.
                        </video>
                        <div class="overlay-content">
                            <h1>Heading</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <a href="LogIn.html" class="play-btn">Play Now</a>
                        </div>
                    </div>
                </td>
            </tr>
        </table>

        <!-- Main Content -->
        <main>
            <section id="news">
                <h2 style="font-size: xxx-large;">Latest News</h2>
                <article class="searchable-item">
                    <h3>Patch 2.0 Released</h3>
                    <p>We're introducing new maps, characters, and a revamped ranking system.</p>
                </article>
                <article>
                    <h3>Community Event: Winter Festival</h3>
                    <p>Join us for a limited-time event filled with exclusive rewards and surprises!</p>
                </article>
            </section>
            <hr>

            <!-- Games Section -->
            <div class="game-select-section">
                <h2 style="font-size: xxx-large;">Games</h2>
                <div class="game-grid">
                    <div class="game-item seara">
                    <a href="track_click.php?game_id=1" onclick="redirectToGame('game1.php'); return false;">
                        <img src="logo/leagueoflegendshome.jpg" alt="League of Legends">
                    </a>   
                    </div>
                    <div class="game-item">
                    <a href="track_click.php?game_id=2" onclick="redirectToGame('game2.php'); return false;">
                    <img src="logo/valorantselect.jpg" alt="Valorant" class = "game-logo">
                        </a>
                    </div>
                    <div class="game-item">
                    <a href="track_click.php?game_id=3" onclick="redirectToGame('game4.php'); return false;">
                    <img src="logo/images.jpg" alt="Legends Of Zelda" class = "game-logo">
                        </a>
                    </div>
                    <div class="game-item">
                    <a href="track_click.php?game_id=4" onclick="redirectToGame('game3.php'); return false;">
                    <img src="logo/release.png" alt="Elden Ring" class = "game-logo">
                        </a>
                    </div>
                </div>
            </div>

            <script>
<script>
function redirectToGame(url) {
    setTimeout(function() {
        window.location.href = url;
    }, 100); // Wait 100ms before redirecting
}
</script>
        </main>
    </section>

    <!-- Footer Section -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-about">
                <h3>About Iora Games</h3>
                <p>
                    Iora Games is dedicated to creating exceptional gaming experiences that unite players worldwide.
                    Discover our games and join our community.
                </p>
            </div>

            <div class="footer-links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="About Us.html">About Us</a></li>
                    <li><a href="news.html">News</a></li>
                    <li><a href="LogIn.html">Log In</a></li>
                </ul>
            </div>

            <div class="footer-contact">
                <h3>Contact Us</h3>
                <ul>
                    <li>Email: <a href="mailto:support@ioragames.com">ioragamess@gmail.com</a></li>
                    <li>Phone: <a href="tel:+11234567890">+1 (123) 456-7890</a></li>
                    <li>Address: 123 Game Street, Gamer City, GC 12345</li>
                </ul>
            </div>

            <div class="footer-social">
                <h3>Follow Us</h3>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://x.com/IoraGames"><i class="fab fa-x-twitter"></i></a>
                    <a href="https://www.instagram.com/ioragames/"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2024 Iora Games. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>

<?php
session_start();
$loggedIn = isset($_SESSION['user_id']);
$username = $loggedIn ? $_SESSION['username'] : 'Guest';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="game1.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>League of Legends</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #2c2f3b;
            color: white;
            text-align: center;
        }
        header {
            background-color: #111;
            padding: 20px;
            font-size: 2em;
        }
        section {
            padding: 20px;
        }
        footer {
            background-color: #111;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .champions {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }
        .champion-card {
            background-color: #444;
            width: 200px;
            margin: 10px;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .champion-card img {
            width: 100%;
            border-radius: 5px;
        }
        .champion-card h3 {
            font-size: 1.5em;
            margin: 10px 0;
        }
        .champion-card p {
            font-size: 1em;
        }
        .about, .gameplay {
            background-color: #333;
            border-radius: 10px;
            padding: 20px;
            margin: 20px;
        }
        .about h2, .gameplay h2 {
            margin-bottom: 10px;
        }
    </style>
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
                    <li><a href="About Us.html">About Us</a></li>
                    <li><a href="news.html">News</a></li>
                    <li><a href="contact.html">Contact</a></li>
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

    <section class="about">
        <h2>About League of Legends</h2>
        <p>League of Legends (LoL) is a multiplayer online battle arena (MOBA) game developed by Riot Games. Released in 2009, it has become one of the most popular and competitive games in the world. Players control a "Champion" with unique abilities and engage in strategic team-based combat, aiming to destroy the enemy's Nexus.</p>
    </section>

    <section class="gameplay">
        <h2>Gameplay</h2>
        <p>League of Legends features 5v5 matches where two teams of players battle on a map called Summoner’s Rift. The objective is to destroy the opposing team's Nexus, located in their base. Players must work together, strategize, and master different champions to secure victory.</p>
    </section>

    <section class="champions">
        <h2>Popular Champions</h2>
        
        <div class="champion-card">
            <img src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Ahri_0.jpg" alt="Ahri">
            <h3>Ahri</h3>
            <p>The Nine-Tailed Fox. Ahri is a powerful mage with high mobility and burst damage, making her a deadly force on the battlefield.</p>
        </div>

        <div class="champion-card">
            <img src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Garen_0.jpg" alt="Garen">
            <h3>Garen</h3>
            <p>The Might of Demacia. Garen is a tanky fighter who excels at sustained battles and has a simple yet effective toolkit for beginners.</p>
        </div>

        <div class="champion-card">
            <img src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/LeeSin_0.jpg" alt="Lee Sin">
            <h3>Lee Sin</h3>
            <p>The Blind Monk. Lee Sin is a mobile and skilled jungler who thrives on fast-paced, high-skill plays with powerful combos.</p>
        </div>

    </section>

    <footer>
        <p>&copy; 2024 League of Legends - All Rights Reserved</p>
    </footer>

</body>
</html>

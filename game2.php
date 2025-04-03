<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="game2.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valorant</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #212121;
            color: white;
            text-align: center;
        }
        header {
            background-color: #111;
            padding: 20px;
            font-size: 2.5em;
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
        .agents {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }
        .agent-card {
            background-color: #444;
            width: 200px;
            margin: 10px;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .agent-card img {
            width: 100%;
            border-radius: 5px;
        }
        .agent-card h3 {
            font-size: 1.5em;
            margin: 10px 0;
        }
        .agent-card p {
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
                <a href="index.html">
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

    <section class="about">
        <h2>About Valorant</h2>
        <p>Valorant is a tactical first-person shooter (FPS) game developed by Riot Games, released in 2020. In Valorant, players assume the role of "Agents," each with unique abilities, and engage in strategic combat in 5v5 matches. The main objective is to either attack or defend bomb sites in various game modes.</p>
    </section>

    <section class="gameplay">
        <h2>Gameplay</h2>
        <p>Valorant features strategic, team-based gameplay where players use precise aim and tactical abilities to outsmart their opponents. One team attacks by planting a bomb (the "spike"), while the other defends. The round ends when the spike is planted and detonates, or if all enemies are eliminated.</p>
    </section>

    <section class="agents">
        <h2>Popular Agents</h2>
        
        <div class="agent-card">
            <img src="logo/feniks.jpg" alt="Phoenix">
            <h3>Phoenix</h3>
            <p>Phoenix is a self-sustaining Duelist known for his fire-based abilities. His healing fireball can give him an edge in close combat, while his ultimate allows him to revive himself after dying.</p>
        </div>

        <div class="agent-card">
            <img src="logo/sejdz.jpg" alt="Sage">
            <h3>Sage</h3>
            <p>Sage is a Radiant healer who can revive her teammates and slow enemies with her abilities. She can also place barriers to block or slow down opponents, making her essential for strategic plays.</p>
        </div>

        <div class="agent-card">
            <img src="logo/vajper.jpg" alt="Viper">
            <h3>Viper</h3>
            <p>Viper is a controller who specializes in area denial. She uses toxic abilities to control sightlines and force enemies into unfavorable positions, making her perfect for controlling key areas of the map.</p>
        </div>

    </section>

    <footer>
        <p>&copy; 2024 Valorant - All Rights Reserved</p>
    </footer>

</body>
</html>

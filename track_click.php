<?php
include('db_connection.php'); // Make sure this file exists

if (!isset($_GET['game_id'])) {
    die("Game ID is missing!");
}

$game_id = intval($_GET['game_id']);
echo "Game ID received: $game_id"; // Debug output

// Log the click into your database (make sure to create the query for this step)
$sql = "UPDATE Games SET Total_Clicks = Total_Clicks + 1 WHERE game_id = $game_id";

if (mysqli_query($conn, $sql)) {
    // Successfully logged the click, now redirect to the respective game page
    header("Location: game" . $game_id . ".php");
    exit(); // This stops the script execution after the redirect header
} else {
    // If there's an error logging the click, display it
    echo "Error logging click: " . mysqli_error($conn);
    exit();
}
?>


<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all fields are filled
    if (isset($_POST["gameName"]) && isset($_POST["imageUrl"]) && isset($_POST["gameUrl"])) {
        // Get form data
        $gameName = $_POST["gameName"];
        $imageUrl = $_POST["imageUrl"];
        $gameUrl = $_POST["gameUrl"];

        // You can perform validation or sanitization of the data here if needed

        // Now, you can save the game information to your database or file
        // For demonstration purposes, let's just print the data
        echo "Game Name: " . $gameName . "<br>";
        echo "Image URL: " . $imageUrl . "<br>";
        echo "Game URL: " . $gameUrl . "<br>";

        // You can redirect the user to a confirmation page or back to the admin panel
        // header("Location: admin_panel.php");
        // exit();
    } else {
        // If any field is empty, display an error message
        echo "All fields are required!";
    }
}
?>

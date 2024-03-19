<?php
// Receive latitude and longitude from the client
if(isset($_POST['latitude']) && isset($_POST['longitude'])) {
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];

    // Process the received data (e.g., perform calculations, interact with a database)
    // For demonstration, we'll simply output the received values
    echo "Latitude: $latitude, Longitude: $longitude";

    // You can also generate HTML with JavaScript to display a map using the received coordinates
    // Or, you can use a PHP library like Google Maps PHP API to generate map HTML
} else {
    echo "Error: Latitude or longitude not received.";
}
?>


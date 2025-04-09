<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name  = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    $entry = "Name: $name, Email: $email, Phone: $phone\n";

    file_put_contents("/var/www/html/userdata.txt", $entry, FILE_APPEND);
    echo "Data saved successfully!";
} else {
    echo "Invalid request.";
}
?>

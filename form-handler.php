<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize inputs
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    // Prepare data for storage
    $data = "Name: $name\nEmail: $email\nMessage: $message\n\n";

    // Attempt to write to the file
    if (file_put_contents('submissions.txt', $data, FILE_APPEND | LOCK_EX) === false) {
        echo "Error saving data.";
    } else {
        echo "Thank you, $name! Your message has been saved.";
    }
} else {
    echo "Invalid request.";
}
?>

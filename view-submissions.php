<?php
// Check if the submissions file exists
$file = 'submissions.txt';

if (file_exists($file)) {
    // Read the file contents
    $contents = file_get_contents($file);

    // Display the contents
    echo "<h1>Submitted Messages</h1>";
    echo "<pre>" . nl2br(htmlspecialchars($contents)) . "</pre>";
} else {
    echo "No submissions found.";
}
?>
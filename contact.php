<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $fname = $_GET["fname"];
    $lname = $_GET["lname"];
    $email = $_GET["email"];

    // Validate and sanitize the data if needed

    // Create a string with the user's data
    $user_data = "First Name: " . $fname . "\n" .
                 "Last Name: " . $lname . "\n" .
                 "Email: " . $email . "\n\n";

    // Specify the file to save the data
    $file_path = "contact_data.txt";

    // Open the file in append mode and save the data
    if (file_put_contents($file_path, $user_data, FILE_APPEND | LOCK_EX)) {
        echo "Data has been successfully submitted.";
    } else {
        echo "Error: Unable to save data.";
    }
} else {
    echo "Invalid request method.";
}
?>

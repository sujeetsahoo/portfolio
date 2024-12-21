<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $name = htmlspecialchars($_POST['mobile']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Validate the data (basic example)
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit;
    }

    // Example: Display the data (for testing purposes)
    echo "<h2>Form Submitted Successfully</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Message:</strong> $message</p>";

    // (Optional) Save the data to a database or send via email
    // Example: Sending an email (requires a configured mail server)
    $to = "kumarmakhan467@gmail.com";
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nMobile: $mobile\nEmail: $email\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<p>Email sent successfully!</p>";
    } else {
        echo "<p>Failed to send email.</p>";
    }
} else {
    echo "Invalid request method!";
}
?>

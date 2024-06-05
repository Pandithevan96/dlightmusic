<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Validate form data
    if (!empty($name) && !empty($email) && !empty($message) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Email configuration
        $to = "dwaynededvaq96@gmail.com"; // Replace with your email address
        $subject = "New message from contact form";
        $headers = "From: " . $email . "\r\n";
        $headers .= "Reply-To: " . $email . "\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

        // Email body
        $body = "<h2>Contact Form Submission</h2>";
        $body .= "<p><strong>Name:</strong> {$name}</p>";
        $body .= "<p><strong>Email:</strong> {$email}</p>";
        $body .= "<p><strong>Message:</strong><br>{$message}</p>";

        // Send email
        if (mail($to, $subject, $body, $headers)) {
            echo "Thank you for your message. It has been sent.";
        } else {
            echo "Sorry, there was an error sending your message. Please try again later.";
        }
    } else {
        echo "Please fill in all fields correctly.";
    }
} else {
    echo "Invalid request.";
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['contact-name']);
    $email = htmlspecialchars($_POST['contact-email']);
    $company = htmlspecialchars($_POST['contact-company']);
    $message = htmlspecialchars($_POST['contact-message']);

    // Set the recipient email address
    $to = "sayancodder731@gmail.com"; // Change this to your email address

    // Set the email subject
    $subject = "New Contact Form Submission from " . $name;

    // Build the email content
    $email_content = "Name: " . $name . "\n";
    $email_content .= "Email: " . $email . "\n";
    $email_content .= "Company: " . $company . "\n\n";
    $email_content .= "Message:\n" . $message . "\n";

    // Set the email headers
    $headers = "From: " . $name . " <" . $email . ">";

    // Send the email
    if (mail($to, $subject, $email_content, $headers)) {
        // Email sent successfully
        echo "Thank you! Your message has been sent.";
    } else {
        // Email sending failed
        echo "Oops! Something went wrong, and we couldn't send your message.";
    }
} else {
    // Invalid request method
    echo "There was a problem with your submission, please try again.";
}
?>

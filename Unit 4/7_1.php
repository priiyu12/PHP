<?php
$to_email = "priyashah.imca22@gmail.com";
$subject = "Test Email";
$body = "This is a test email sent from PHP.";
$headers = "From: priyashah.imca22@gmail.com";

// Send email
if (mail($to_email, $subject, $body, $headers)) {
    echo "Email sent successfully to $to_email";
} else {
    echo "Email sending failed...";
    $error_message = error_get_last()['message'];
    if ($error_message) {
        echo "<br>Error Message: $error_message";
    }
}
?>

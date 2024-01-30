<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "mariamsakeyan2@gmail.com"; // Replace this with the seller's email address
    $subject = "Message from Buyer";
    $name = $_POST['name'];
    $from_email = $_POST['email'];
    $message = $_POST['message'];
    
    $headers = "From: $name <$from_email>";
    
    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Your message has been sent. Thank you!";
    } else {
        echo "Failed to send the message. Please try again later.";
    }
} else {
    echo "Invalid request.";
}
?>

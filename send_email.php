<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Change the following variables to your desired values
    $recipient_email = "recipient@example.com";
    $subject = "New Message from $name";
    $headers = "From: $name <$email>\r\nReply-To: $email\r\n";

    // Send the email
    if (mail($recipient_email, $subject, $message, $headers)) {
        echo "<p>Your message has been sent successfully!</p>";
    } else {
        echo "<p>Sorry, there was an error sending your message.</p>";
    }
}
?>

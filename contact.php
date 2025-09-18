<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "info@palmaryventures.com"; // Change to your email
    $headers = "From: $name <$email>\r\n";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    if(mail($to, $subject, $body, $headers)){
        echo "Message sent successfully!";
    } else {
        echo "Message failed to send.";
    }
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['firstname'] . ' ' . $_POST['lastname'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = 'ardonis.shalaj@outlook.com'; // replace with your email
    $subject = 'New message from your website';
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    $body = "You have received a new message from your website contact form.\n\n".
            "Here are the details:\n\n".
            "Name: $name\n\n".
            "Email: $email\n\n".
            "Message:\n$message\n";

    if(mail($to, $subject, $body, $headers)) {
        echo 'Message sent successfully';
    } else {
        echo 'Message could not be sent';
    }
}
?>

<?php
    $nome = $_POST["name"];
    $email = "nivaspimenta@gmail.com";
    $message = $_POST["message"];
    $subject = "Reaction";
    $headers = 'From: '.$email.' '       . "\r\n" .
                 'Reply-To: '.$email.' ' . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();
    mail($email, $subject, $message, $headers);

    header("Location: /index.htm");
    exit();
?>
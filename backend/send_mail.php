<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "amanmirza0408@gmail.com"; // change
    $subject_line = "New message from Portfolio: " . $subject;

    $body = "
        Name: $name\n
        Email: $email\n
        Phone: $phone\n
        Subject: $subject\n
        Message:\n$message
    ";

    $headers = "From: $email";

    if(mail($to, $subject_line, $body, $headers)){
        echo "SUCCESS";
    } else {
        echo "ERROR";
    }
}
?>

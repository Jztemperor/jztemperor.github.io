<?php
//Check if form is posted
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];

    $error = false;

    //Check for empty fields
    if (empty($name) || empty($email) || empty($msg)) {
        echo "Please fill in all fields!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid e-mail address!";
    } else {
        $to = 'cegifo5869@sc2hub.com';
        $subject = 'Subject';
        $message = $msg;
        $headers = "From: " . $email;

        mail($to, $subject, $message, $headers);
    }
}

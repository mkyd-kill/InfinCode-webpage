<?php
    $message_sent = false;
    /* Write a program that will send fullname, 
    * email and query of the user as an email to the admin's email
    * in php
    */

    if(isset($_POST['email']) && $_POST['email'] != '') {
        // Validation
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {
            // Variable declaration
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $messageSubject = $_POST['messageSubject'];
            $comment = $_POST['comment'];

            // Adding a to-where the email is to be sent
            $to = "romeomureithi@gmail.com";
            $body = "";

            // Concatinating the email message
            $body .= "From: ".$fullname. "\r\n";
            $body .= "Email: ".$email. "\r\n";
            $body .= "Message: ".$comment. "\r\n";

            // Sending the mail with the mail() funtion
            mail($to, $messageSubject, $body);

            $message_sent = true;
        }
        else {
            $invalid_class_name = "form-invalid";
        }
    }
    
?>
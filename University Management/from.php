<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_from= 'tanvirahmmid@gmail.com';
$email_subject='New From Submission';
$email_body="User Name: $name.\n";
            "User Email: $visitor_email.\n";
            "Subject: $subject.\n";
        "User Message: $message.\n";


        $to='tanvirahmmid@gmail.com';
        $headers="From: $email_from \r\n";
        $headers="reply-to: $visitor_email\r\n" ;

        mail($to,$email_subject,$email_body,);

        header("Location: contact.html");



?>
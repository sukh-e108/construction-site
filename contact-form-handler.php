<?php

$name = $_Post['name'];

$visitor_email = $_Post['email'];

$phone_number = $_Post['pnumber'];

$message = $_Post['message'];

$email_from = 'BJKManagement.com';

$email_subject = "New Form Submission";

$email_body = "User Name: $name.\n".
                    "User Email: $email.\n".
                         "User Message: $message.\n".
                              "User Phone No: $pnumber.\n";

                

$to = "therisinglord000@gmail.com";

$headers = "From $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location:contact-us");
?>


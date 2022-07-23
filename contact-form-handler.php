<?php

$name = $_POST['name'];

$visitor_email = $_POST['email'];

$phone_number = $_POST['pnumber'];

$message = $_POST['message'];

$email_from = 'BJKManagement.com';

$email_subject = "New Form Submission";

$email_body = "User Name: $name. \n".
                    "User Email: $visitor_email. \n".                         
                              "User Phone No: $phone_number. \n".
                                   "User Message: $message. \n";

                

$to = "bjkmanagementltd@hotmail.com";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location:contact-us.html");

?>


<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];

$email_from = 'info@satyug.edu.in';

$email_subject =' New Form Submission';

$email_body ="User Name: $name.\n".
              "User email: $visitor_email.\n".
                "subject: $subject.\n";
                
 $to='shivang.cse20@satyug.edu.in';
 
 $headers = "From: $email_from\r\n";

 $headers.= "Reply-To: $visitor_email \r\n";

 mail($to,$email_subject,$email_body,$headers);

 header("Location: contact.html");

?>
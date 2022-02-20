<?php
 $name = $_POST['name'];
 $visitor_number= $_POST['number'];
 $visitor_email = $_POST['email'];
 $post_applying = $_POST['post_applying'];
 $department= $_POST['department'];
 $highest_qualification = $_POST['highest_qualification'];
 $experience = $_POST['experience'];
 $salary = $_POST['salary'];

 $email_from ='info@satyug.edu.in';

 $email_subject ='Form Submission';

 $email_body ="User Name: $name.\n".
 "User number: $visitor_number.\n".
 "User email: $visitor_email.\n".
 "post applying: $post_applying.\n".
 "department: $department.\n".
 "highest qualification: $highest_qualification.\n".
 "experience: $experience.\n".
 "salary: $salary.\n";

 $to='shiavng.cse20@satyug.edu.in';

 $headers ="from: $email_from\r\n";

 $headers ="Reply-to: $visitor_form\r\n";

 mail($to,$email_subject,$email_body,$headers);

 header("Location: careers.html");

?>







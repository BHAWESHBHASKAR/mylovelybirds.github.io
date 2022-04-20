<?php
$Name=$_post['Name'];
$Email=$_post['Email'];
$Comment=$_post['Comment'];
$email_from ='website email.com';
$email_subject='new submission';
$email_body ="user name: $name.\n".
               "user Email: $visitor_emil.\n".   
               "comment: $comment.\n";

$to='michelmasked001@gmail.com';

$headers= "From: $email_from \r\n";

$headers .="Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("location: blog.html");
?>
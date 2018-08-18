<?php 



$email='rishabhchauhan9760@gmail.com';
$to = $email;
$subject = "My subject";
$txt ='aaaaaaaaaaaaaaaaaaaaaaaaaaaa';
$headers = "From: webmaster@example.com" . "\r\n" .


mail($to,$subject,$txt,$headers);
echo "mail sent sucessfully!";











?>
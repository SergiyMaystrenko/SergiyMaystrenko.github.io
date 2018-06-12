<?php
$whatever = $_POST['whatever'];
$username = $_POST['user_name'];
$email = $_POST['user_email'];
$user_messege = $_POST['user_messege'];

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail ->CharSet = 'utf-8';

//$mail -> SMTPDebug = 3;             // Enable verbose debug  output 
 $mail ->isSMTP();                    
 $mail ->Host = 'smtp.googlemail.com';
 $mail ->SMTPAuth = true;
 $mail ->Username = 'maystrenko33@gmail.com';
 $mail ->Password = 'maistr241281';
 $mail ->SMTPSecure = 'none';
 $mail ->Port = 587;
 $mail ->setFrom('maystrenko33@gmail.com', Sergiy);
 $mail ->addAddress('simonova.svet@gmail.com', Svitlana);
 $mail ->isHTML(true);
 $mail ->Sudjec = 'Тема письма';
 $mail ->Body = 'Сообщение';
 $mail ->AltBody = 'Сообщение в формате plain text';

 if(!$mail->send()) {
 	echo 'Message could not be sent.';
 	echo 'Mailer Error:'. $mail ->ErroreInfo;  
 }
 else {
 	header('location: thanks.html');
 }

?>

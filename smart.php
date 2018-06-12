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
 $mail ->Host = 'smtp.meta.ua';
 $mail ->SMTPAuth = true;
 $mail ->Username = 'sss615@meta.ua';
 $mail ->Password = '516sss';
 $mail ->SMTPSecure = 'ssl';
 $mail ->Port = 587;
 $mail ->setFrom('sss615@meta.ua', sveta simonova);
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

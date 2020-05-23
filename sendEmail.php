<?php 
include "class.phpmailer.php";  
include "class.smtp.php";  

$email=$_POST['email'];

$mail = new PHPMailer();  
$mail->IsSMTP();   
$mail->Host = "smtp.gmail.com"; 
$mail->Port = 465;   
$mail->SMTPAuth = true;    
$mail->SMTPSecure = 'ssl';   
$mail->Username = "nguyendangbinhminh2605@gmail.com";   
$mail->Password = "pass";
$from = "Cakes&Sweets"; 
$to="$email";    
$name="ITLC";   
$mail->From = $from;   
$mail->FromName="Cakes&Sweets";
$mail->AddAddress($to,$name);   
$mail->AddReplyTo($from,"ITLC");   
$mail->WordWrap = 50;   
$mail->IsHTML(true); 
$mail->Subject = "Cakes&Sweets";   
$mail->Body = "Mail nay duoc goi bang phpmailer class.";  
$mail->AltBody = "Mail nay duoc goi bang phpmailer class.";  
//$mail->SMTPDebug = 2;   
if(!$mail->Send())   
{   
    echo "  
Loi mail: " . $mail->ErrorInfo . '  

';   
}   
else   
{   
	echo 'Gui thanh cong';
  
} 

?>

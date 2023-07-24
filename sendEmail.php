<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Excepiton.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';


if(isset($_POST["send"])){

$mail = new PHPMailer(true) ;
$mail->isSMTP() ;
$mail->Host = 'smtp.gmail.com' ;
$mail->SMTPAuth = true ;
$mail->Username = 'mohdbukhari03@gmail.com' ;
$mail->Username = 'xzlzlnzpxqxxkmua' ;
$mail->SMTPSecure = 'ssl' ;
$mail->Port = 465 ;


$mail->setFrom('mohdbukhari03@gmail.com');
$mail->addAddress($_POST["contactEmail"]) ;
$mail->isHTML(true) ;
$mail->Body = $_POST["contactSubject"] ;
$mail->Subject = $_POST["contactMessage"] ;

$mail->send();

echo "
<script>
alert(Sent Succesfully') ;
document.location.href = 'index.html' ; 
</script> ";

}
?>
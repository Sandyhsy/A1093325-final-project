<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPmailer/src/Exception.php';
require 'PHPmailer/src/PHPMailer.php';
require 'PHPmailer/src/SMTP.php';
require 'productpage.php';

$email=$_POST["email"];
$name=$_POST["name"];
$mail = new PHPMailer(true);
try {
    $SQL="SELECT password FROM accvip WHERE mail='$email'";
    $result=mysqli_query($link,$SQL);
    $row=mysqli_fetch_assoc($result);

    $mail->SMTPDebug = 0;                                 //Enable verbose debug output
    $mail->isSMTP();                                      //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                 //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                             //Enable SMTP authentication
    $mail->Username   = 'hungfish0118@gmail.com';         //SMTP username
    $mail->Password   = 'qmhrhjpxkdflstya';               //SMTP password
    $mail->Port       = 465;  
    $mail->SMTPSecure = 'ssl';                            //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->Charset='UTF-8';
    $mail->setFrom('hungfish0118@gmail.com', 'Cat Lovers');
    $mail->addAddress($email, $name);
    $mail->isHTML(true);
    $mail->Subject = "=?utf-8?B?".base64_encode("Sandy Studio 會員忘記密碼")."?=";
    $message= $name." 會員您好，您的密碼為:".$row."<br><br>";
    $mail->send();
    echo"<meta http-equiv='Refresh' content='0; url=登入.php'>";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
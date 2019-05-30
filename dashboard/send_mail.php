<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php
 	 $mailto = $_POST['mail_to'];
    $mailSub = $_POST['mail_sub'];
    $mailMsg = $_POST['mail_msg'];
 	require 'PHPMailer/PHPMailerAutoload.php';

 	$mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // bon edhe 587
   $mail ->IsHTML(true);
   $mail ->Username = "clannad.lang@gmail.com";
   $mail ->Password = "pwdpwd123";
   $mail ->SetFrom("clannad.lang@gmail.com");
   $mail ->Subject = $mailSub;
   $mail ->Body =  $mailMsg;
   $mail ->AddAddress($mailto);

   if(!$mail->Send())
   {
       echo "Email Not Sent";
   }
   else
   {

   	
 echo "";


   }

   ?>


<div class="quiz">
        <?php include('../components/header.php') ?>
        <div><h3>Email sent successfully. Send another<a href="contactus.php"> Email.</h3>





        </div>
        <?php include('../components/footer.php') ?>
    </div>
</body>
</html>

<style>
body,html{
	height: 100%;
	box-sizing: border-box;
	margin:0;
}
.quiz{
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    text-align: center;
}
</style>
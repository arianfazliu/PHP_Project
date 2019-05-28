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
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "arianfazliu.aa@gmail.com";
   $mail ->Password = "lovenihon123";
   $mail ->SetFrom("arianfazliu.aa@gmail.com");
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($mailto);

   if(!$mail->Send())
   {
       echo "Mail Not Sent";
   }
   else
   {
 echo "Mail Sent";
   }

   ?>
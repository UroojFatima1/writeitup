<?php
    $email=$_POST['email'];
    $message=$_POST['message'];
    $email_from="writeitup help"
    $to="uroojfatima1518@gmail.com"
    $subject="Need help"
    $txt="Email= " . $email . "\r\nMessage=" . $message;
    $headers="From: noreply@writeitup.com"
    if($message!=NULL){
     mail($to,$subject,$txt,$headers);
    }
?>
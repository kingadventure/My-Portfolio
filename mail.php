<?php 
if (isset($POST['sumbmit'])){
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $subject = $_POST['subject'];

    $mailTo = "kaelin@kingadventure.com";
    $headers = "From: ".$email;
    $txt ="You have received an email from ".$name.".n\n"/$message;

mail($mailTo, $subject, $txt, $headers);
header("Location: contact.php?mailsend");
}
?>
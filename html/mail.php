<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "ecell.dvsgi@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . $phone . "\r\n Message =" . $message;
$headers = "From:ecell.dvsgi@gmail.com" . "\r\n" .
"CC:ecell.dvsgi@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thank-you.html");
?>
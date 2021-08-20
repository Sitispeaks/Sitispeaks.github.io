

<?php
//get data from form  
$name = $_POST['first_name'];
$email= $_POST['email'];
$message= $_POST['message'];
$sub  = strip_tags($_POST['sub']);
$to = "sitikanta.panigrahi.2000@mail.com";
// $subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$sub,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>
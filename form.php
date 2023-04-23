<?php
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$msg=$_POST['msg'];
$to_email = "shriyashjadhav007@gmail.com";
$subject = "Enquiry Form";
$body = "Name : $name \n E-mail : $email \n Contact No. : $phone \n My Message : $msg";
$headers = "From: kingjd2484@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    // echo "Email successfully sent to $to_email...";
    header ("Location: index.php");

} else {
    echo "Email sending failed...";
   //  header ("Location: index.php");
    

}
?>
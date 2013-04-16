<?php
if(isset($_POST['email']) && isset($_POST['name']) && isset($_POST['message'])) {
$email = $_POST['email'];
$fullname = $_POST['name'];
$message = $_POST['message'];
$email_subject = "TTX website contact Message";
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$header="From: ".$email;
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
//echo "Regsiteration request sent. U would be contacted shortly";
if(mail('samuel.i.okoroafor@gmail.com, tofunmibabatunde@gmail.com, detan@iqubebase.com', $email_subject, $message,$header))
{
echo "Contact information sent!";
}
}
}
?>
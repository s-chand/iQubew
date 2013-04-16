<?php
if (!$_POST)
	exit ;

if (isset($_POST['email']) && isset($_POST['fname']) && isset($_POST['phone'])) {
	$email = $_POST['email'];
	$fullname = $_POST['fname'];
	$phone = $_POST['phone'];
	$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

		$admin_email = "samuel.i.okoroafor@gmail.com, tofunmibabatunde@gmail.com, detan@iqubebase.com";
		$subject = "TTx Registration";
		$message = "The following is the details for a TTX registration.\n";
		$message .= "Fullname: " . $fullname . "\n";
		$message .= "Email: " . $email . "\n";
		$message .= "Phone: " . $phone . "\n";
		$message .= "This mail was sent from the TTX website. The information supplied should be logged appropriately";
		$headers = 'From: noreply@iqubebase.com';
		if (mail($admin_email, $subject, $message, $headers)) {
			if (mail($email, "iQube's TTX Registration", "Thank you for registering for TTX2013 Programming++.TTX Pricing: For trainees / students #4000 for 1 day and #6000 for 2 days and for professionals / graduates it costs #7000 for 1 day & #10,000 for 2 days  You can choose to pay online at http://afritickets.com/site/events/803/TTX/ or directly to: Account name: Oluwadetan Oyedele, Account Number: 491/450555/1590 or 0037165472, Bank:GTBank.  See you at TTX!", $headers)) {
				echo 'Message sent! Please check your mail for details.';
			}

		} else {
			echo 'ERROR! Message not sent.';
		}
	}
} else
	echo "Incomplete info";
				?>

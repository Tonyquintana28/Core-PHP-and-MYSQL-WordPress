<?php

if (isset($_SERVER['HTTP_X_REQUESTED_WITH']))
{
	error_reporting(0);

	$name = trim($_POST['name']);
	$address = trim($_POST['address']);
	$city = trim($_POST['city']);
	$email = trim($_POST['email']);
	$phone = trim($_POST['phone']);
	$when = trim($_POST['when']);
	$size = trim($_POST['size']);
	$message = trim($_POST['message']);
	$time = trim($_POST['time']);
	$day = trim($_POST['day']);

	if(empty($name))
	{
		$output = '<span class="error">*Your first and last name are required.</span>';
	}
	else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
	{
		$output = '<span class="error">*A valid email address is required.</span>';
	}
	else if(empty($phone) || (!preg_match("/^[0-9]{1,}$/", $phone)) )
	{
		$output = '<span class="error">*Please enter your phone number (no parenthesis, spaces, or hyphens).</span>';
	}
	else if(empty($message))
	{
		$output = '<span class="error">*Please enter your comments or questions.</span>';
	}
	else
	{
		$to = ' Chad@rossmgt.com';
		$headers['from'] = "$name <$email>";
		$headers['to'] = $to;
		$headers['subject'] = "Contact form submission from $name | Iron Guard Housing";

		$body = "Name: $name\r\n";
		$body.= "Email: $email\r\n";
		$body.= "Phone: $phone\r\n";
		$body.= "Address: $address\r\n";
		$body.= "City: $city\r\n";
		$body.= "Day: $day\r\n";
		$body.= "Time: $time\r\n";
		$body.= "When will you need space?: $when\r\n";
		$body.= "What size space do you need? $size\r\n";
		$body.= "Message: $message\r\n";

		$params['host'] = 'ssl://secure.emailsrvr.com';
		$params['port'] = '465';
		$params['auth'] = true;
		$params['username'] = 'smtp@ironguardhousing.com';
		$params['password'] = 'Storage1!';

		require_once 'Mail.php';
		
		$smtp = Mail::factory('smtp', $params);
		$mail = $smtp->send($to, $headers, $body);
		
		if (PEAR::isError($mail))
		{
			$output = '<span class="error">' . $mail->getMessage() . '</span>';
		}
		else
		{
			$output = '<span class="success">Message sent! One of our sales associates will respond to you within 24 hours. Thank you!</span>';
		}
	}

	echo $output;
}
<?php	
	if(empty($_POST['name_9862']) && strlen($_POST['name_9862']) == 0 || empty($_POST['email_9862']) && strlen($_POST['email_9862']) == 0 || empty($_POST['message_9862']) && strlen($_POST['message_9862']) == 0)
	{
		return false;
	}
	
	$name_9862 = $_POST['name_9862'];
	$email_9862 = $_POST['email_9862'];
	$message_9862 = $_POST['message_9862'];
	$optin_9862 = $_POST['optin_9862'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\n".
				  "Name_9862: $name_9862 \nEmail_9862: $email_9862 \nMessage_9862: $message_9862 \nOptin_9862: $optin_9862 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $email_9862";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>
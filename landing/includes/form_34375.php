<?php	
	
	
	$input_1368 = $_POST['input_1368'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from landing.";
	$email_body = "You have received a new message. \n\n".
				  "Input_1368: $input_1368 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $input_1368";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>
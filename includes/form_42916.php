<?php	
	
	
	$input_2187 = $_POST['input_2187'];
	$input_10 = $_POST['input_10'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from landing.";
	$email_body = "You have received a new message. \n\n".
				  "Input_2187: $input_2187 \nInput_10: $input_10 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $input_2187";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>
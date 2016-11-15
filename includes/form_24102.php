<?php	
	
	
	$input_616 = $_POST['input_616'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from landing.";
	$email_body = "You have received a new message. \n\n".
				  "Input_616: $input_616 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $input_616";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>
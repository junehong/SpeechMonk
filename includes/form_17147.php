<?php	
	
	
	$input_977 = $_POST['input_977'];
	$input_1370 = $_POST['input_1370'];
	$input_736 = $_POST['input_736'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from landing.";
	$email_body = "You have received a new message. \n\n".
				  "Input_977: $input_977 \nInput_1370: $input_1370 \nInput_736: $input_736 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $input_977";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>
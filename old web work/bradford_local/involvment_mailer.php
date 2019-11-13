<?php
if(isset($_POST['submit'])) {

	// prepare email headers
		$to = "east.westbradfordgop@gmail.com"; 
		$subject = "Website Involvment";

	// collect form data
		$name_field = $_POST['name'];
		$email_field = $_POST['email'];
		
if($_POST['volunteer']) {
		foreach($_POST['volunteer'] as $value) {
			$volunteer .= "Checked: $value\n";
		}
		
		} else {
			$volunteer = "Nothing Checked";
		}

		$other_field = $_POST['other'];
	


	// build email body content
		$body = "From:\n $name_field\n\n Email: \n $email_field\n\n Would Like to:\n $volunteer\n\n Other:\n $other_field\n\n";

	// send email
		mail($to, $subject, $body);

	// page redirect
		header('location:thankyou.html');
	
} else {
	echo "Error in php email attempt!";
}
?>


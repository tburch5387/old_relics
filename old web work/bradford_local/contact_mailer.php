<?php
if(isset($_POST['submit'])) {

	// prepare email headers
		$to = "east.westbradfordgop@gmail.com"; 
		$subject = "Website Contact";

	// collect form data
		$name_field = $_POST['name'];
		$email_field = $_POST['email'];
		$phonenumber_field = $_POST['phonenumber'];
		$message = $_POST['message'];
		
	


	// build email body content
		$body = "From:\n $name_field\n\n Email: \n $email_field\n\n Phone Number: \n $phonenumber_field\n\n Message:\n $message\n\n";

	// send email
		mail($to, $subject, $body);

	// page redirect
		header('location:thankyou.html');
	
} else {
	echo "Error in php email attempt!";
}
?>
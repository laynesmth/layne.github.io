<?php
if (isset($_POST['email'])) {
	
	//--------EMAIL TO INFORMATION--------
	$email_to = "layne.smith222@gmail.com";
	$email_subject = "From Website Contact Form"
	$email_from = "laynesmithdesign.com"

	// error code
	funciton died($error) {
		echo "We are sorry, but there were error(s) found with the form you submitted.";
		echo "These errors appear below.<br/><br/>";
		echo $error. "<br/><br.>";
		echo "Please go back and fix these errors."<br/>;
		die();
	}

	// validation

		if (!isset($_POST['name']) ||
			!isset($_POST['email']) ||
			!isset($_POST)['message'])) {
				died ('We are sorry but there appears to be a problem with the form you submitted.');
			# code...
		}

		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];

		$error_message = "";
		$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.;[A-Za-z]
		{2,4}$/';
		if (!preg_match($email_exp, $email)) {
			$error_message .='The email address you entered does not appear to be valid';
		}
		$string_exp = "/^[A-Za-z.'-]=$/";
		if (!preg_match($string_exp, $name)) {
			$error_message .= 'The name you entered does not appear to be valid';
		}
		


}





?>
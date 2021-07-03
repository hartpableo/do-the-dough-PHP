<?php 
	if (isset($_POST['submit'])) {
		$required = array('name', 'number', 'email');
		$error = false;
		foreach($required as $field) {
  			if (empty($_POST[$field])) {
    			$error = true;
    			header("Location: index.php");
  			}
  			else {
  				$headers = "From: ".$email;
				$text = "You have received an email from ".$name.".\n\n"."Number: ".$number."\n\n"."Add this person to your contact list of customers for Do The Dough.";
				// WRITE BUSINESS EMAIL IN $MAILTO VARIABLE
  				mail($mailTo, "Someone wants to join your contact list.", $text);
				header("Location: index.php?mailsend");
  			}
		};
		// mail($mailTo, "Someone wants to join your contact list.", $text);
		// header("Location: index.php?mailsend");
	}
?>
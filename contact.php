<?php

/* Get variables from contact.html*/

$yourname = $_POST['yourname'];
$email = $_POST['email'];
$comments = $_POST['comments'];

/* Message that will be sent in email */
$message = "Hello!

You have received an email from:

Name: $yourname
Email: $email
Comments: $comments";


/* Send the message using mail() function */
mail("theadrianwilliams08@gmail.com", "A new message", $message);

/* Redirect visitor to the thank you page */
header('Location: index_2.html');
exit();

?>

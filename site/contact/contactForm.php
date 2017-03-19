<?php
session_start();
function generateFormToken($form) {
	$token = md5(uniqid(microtime(), true));
	$_SESSION[$form.'_token'] = $token;
	return $token;
}
function verifyFormToken($form) {
	if (!isset($_SESSION[$form.'_token'])) {
		return false;
	}
	if (!isset($_POST['token'])) {
		return false;
	}
	if ($_SESSION[$form.'_token'] !== $_POST['token']) {
		return false;
	}
	return true;
}
if (verifyFormToken('form1')) {
	$myemail = 'mail@justinneeb.com';
	$name = check_input($_POST['name'], "Enter your name.");
	$email = check_input($_POST['email']);
	$comments = check_input($_POST['comments']);
	$subject = "Freelance Work";

	if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
	{
	    show_error("E-mail address not valid");
	}

	$message = "Name: $name
	Email: $email
	Message: $comments";

	mail($myemail, $subject, $message);
	header('Location: thanks.html');
	exit();

	function check_input($data, $problem='')
	{
	    $data = trim($data);
	    $data = stripslashes($data);
	    $data = htmlspecialchars($data);
	    if ($problem && strlen($data) == 0)
	    {
	        show_error($problem);
	    }
	    return $data;
	}
	function show_error($myError)
	{
	?>
	    <html>
	    <body>

	    <b>Please correct the following error:</b><br />
	    <?php echo $myError; ?>

	    </body>
	    </html>
	<?php
	exit();
}
} else {
	echo "Error.";
}
?>

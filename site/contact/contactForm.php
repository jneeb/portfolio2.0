<?php
$myemail = "neebjustin@gmail.com";
$name = check_input($_POST["name"]);
$email = check_input($_POST["email"]);
$comments = check_input($_POST["comments"]);
$subject = "Freelance Work";
$message = "Name: $name
Email: $email
Message: $comments";

mail($myemail, $subject, $message);
header("Location: ./index.html");
?>

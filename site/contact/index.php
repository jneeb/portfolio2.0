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
	<b>Please correct the following test error:</b><br />
	<?php echo $myError; ?>
	</body>
	</html>
<?php
exit();
}
if (verifyFormToken('form1')) {
	$myemail = 'mail@justinneeb.com';
	$name = check_input($_POST['name'], "Enter your name.");
	$email = check_input($_POST['email']);
	$comments = check_input($_POST['comments'], "Please include a message.");
	$subject = "Freelance Work";
	if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
	{
	    show_error("E-mail address not valid");
	}
	$message = "Name: $name
	Email: $email
	Message: $comments";
	mail($myemail, $subject, $message);
	header('Location: formComplete.html');
	exit();
} else {
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Justin Neeb | Toronto Front-End Developer</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="/css/main.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" href="/img/favicon.ico">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,600|Neuton|Pacifico" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-94009407-1', 'auto');
			ga('send', 'pageview');
		</script>
	</head>
	<?php
	$newToken = generateFormToken('form1');
	?>
	<body>
		<header id="nav">
			<div id="desktopNav">
				<div id="mobileBurger">
					<span></span>
				</div>
				<div id="siteLogo">
					<a href="/"><img src="/img/jLogoWhite2.png" alt="Logo"></a>
				</div>
				<ul>
					<li><a href="/#work">WORK</a></li>
					<li><a href="/about">ABOUT</a></li>
					<li><a href="/contact">CONTACT</a></li>
				</ul>
				<div class="socialLogos">
					<a href="https://www.linkedin.com/in/justin-neeb-a283b7a3/"><img src="/img/In-White-121px-TM.png" alt="LinkedIn"></a>
					<a href="https://codepen.io/Jneeb/"><img src="/img/codePenWhite.png" alt="CodePen"></a>
					<a href="https://github.com/jneeb"><img src="/img/GitHub-Mark-Light-120px-plus.png" alt="GitHub"></a>
				</div>
			</div>
			<div id="mobileNav">
				<ul>
					<li><a id="mobileHomeLink" href="/"><i class="fa fa-home" aria-hidden="true"></i>HOME</a></li>
					<li><a id="mobileWorkLink" href="/#work"><i class="fa fa-floppy-o" aria-hidden="true"></i>WORK</a></li>
					<li><a id="mobileAboutLink" href="/about"><i class="fa fa-user" aria-hidden="true"></i>ABOUT</a></li>
					<li><a id="mobileContactLink" href="/contact"><i class="fa fa-paper-plane-o" aria-hidden="true"></i>CONTACT</a></li>
				</ul>
				<div class="mobileLogos">
					<a href="https://www.linkedin.com/in/justin-neeb-a283b7a3/"><img src="/img/In-White-121px-TM.png" alt="LinkedIn"></a>
					<a href="https://codepen.io/Jneeb/"><img src="/img/codePenWhite.png" alt="CodePen"></a>
					<a href="https://github.com/jneeb"><img src="/img/GitHub-Mark-Light-120px-plus.png" alt="GitHub"></a>
				</div>
			</div>
		</header>

		<section id="contact">
			<div class="contactFlex">
				<div class="contactText">
					<h2>Let's start your project today.</h2>
					<p>
						I'm always available via Email, but you can reach me at: <span>519 580 6062</span> if you'd prefer.
					</p>
				</div>
				<div class="contactForm">
					<form action="index.php" id="form" method="post">
						<input type="hidden" name="token" value="<?php echo $newToken; ?>">
						<input type="text" name="name" placeholder="Full Name">
						<input type="text" name="email" placeholder="Email">
						<textarea name="comments" placeholder="Message" id="" cols="30" rows="10"></textarea>
						<button type="submit" name="submit">Send</button>
					</form>
				</div>
			</div>
		</section>
		<div id="map"></div>
		<footer>
			<p>&copy;2017 Justin Neeb</p>
		</footer>
		<script src="./functions/functions.js" type="text/javascript"></script>
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtOHi-D41sqHHFyKormXrD3gmeM8vIbXs&callback=initMap">
		</script>
	</body>
</html>

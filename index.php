<?php require('scripts/login.inc.php'); ?>   
<?php include('dbconnect.php'); ?>       
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Sheridan IXD Job Board</title>
	<link rel="stylesheet" href="css/foundation.css" />
	<link rel="stylesheet" href="css/foundation.min.css" />
	<link rel="stylesheet" href="css/app.css" />
	<link rel="stylesheet" href="css/base.css" />
</head>

<body class="tealBg">
	<div class="section">
		<div class="row text-center">
			<div class="large-6 large-offset-3 columns">
				<h2 class="white">Sheridan IXD Job Board</h2>
				<p class="white">A job board dedicated to students in the <br>Bachelor of Interaction Design program</p>
			</div>
		</div>
		<div class="break"></div>
		<div class="row">
			<div class="large-4 large-offset-4 columns">
				<div class="expanded button-group">
				  <a class="button btnRound" href="register.php">Register</a>
				  <a class="button btnRound" href="login.php">Log In</a>
				</div>
			</div>
		</div>
	</div>
	<?php include('footer.php'); ?>  
</body>
</html>

<!DOCTYPE html>

<html lang="en">
	<head>
		<title>Sign In: Best Hearthstone Articles</title>
		<meta charset="utf-8">
		
		<!--Google sign in-->
		<meta name="google-signin-scope" content="profile email">
		<meta name="google-signin-client_id" content="873542508587-pp9p5e6gnrga7hid15r8lrg55n1rr573.apps.googleusercontent.com">
		
		
		<!--CSS-->
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<link rel="stylesheet" type="text/css" href="css/header.css">
		<link rel="stylesheet" type="text/css" href="css/footer.css">
		
		<!--JS-->
		
		<script type="text/javascript" src="signin.js"></script>
		<script src="https://apis.google.com/js/platform.js" async defer></script>
	</head>
	
	<body>
		
		<?php include "header.php"; ?>
		
		<main class="main" id="main">
			<h1>Sign In with Google</h1>
			
			<div class="g-signin2" data-onsuccess="onSignIn"></div>
		</main>
		
		<?php include "footer.php"; ?>
		
	</body>
</html>
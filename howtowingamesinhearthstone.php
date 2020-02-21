<?php
require_once 'HearthstoneCards.php';

function createCardLink($name){
	$cards = new HearthstoneCards();
	$cards->setData();
	$card = $cards->getCard($name);
	$id = "";
	if(isset($card->id)){
		$id = $card->id;
	}
	$html = "<a href=\"#\" class=\"hs-card-hover\" id=\"" . $id . "\">" . $name . "</a>";
	
	return $html;
}
?>

<!DOCTYPE html>

<html lang="en">
	<head>
		<title>Best Hearthstone Articles</title>
		<meta charset="utf-8">
		
		<!--Google sign in-->
		<meta name="google-signin-scope" content="profile email">
		<meta name="google-signin-client_id" content="873542508587-pp9p5e6gnrga7hid15r8lrg55n1rr573.apps.googleusercontent.com">
		<script src="https://apis.google.com/js/platform.js" async defer></script>
		
		<!--CSS-->
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<link rel="stylesheet" type="text/css" href="css/header.css">
		<link rel="stylesheet" type="text/css" href="css/footer.css">
		<link rel="stylesheet" type="text/css" href="css/post.css">
		
		<!--JS-->
		<script type="text/javascript" src="signin.js"></script>
		<script type="text/javascript" src="post.js"></script>
	</head>
	
	<body>
		
		<?php include "header.php"; ?>
		
		<?php
		$leeroyjenkinshtml = createCardLink("Leeroy Jenkins");
		$facelessmaniphtml = createCardLink("Faceless Manipulator");
		$fireballhtml = createCardLink("Fireball");
		$pyroblasthtml = createCardLink("Pyroblast");
		$barneshtml = createCardLink("Barnes");
		//$shadowstephtml = createCardLink("Shadowstep");
		//$bloodancientonehtml = createCardLink("Blood of the Ancient One");
		$yshaarjhtml = createCardLink("Y'Shaarj, Rage Unbound");
		?>
		
		<main class="main" id="main">
			<article class="article" id="article">
			
				<h1>How to win games in Hearthstone</h1>
				
				<div id="debug"></div>
				
				<div id="card-picture-box">
					<img id="card-picture" src="images/whitebox.png">
				</div>
			
				<div id="preview">
					<p>You should play cards like <?php echo $leeroyjenkinshtml; ?>
					and <?php echo $facelessmaniphtml; ?> to deal twelve damage in one turn!
					Then you just need to somehow deal 18 more damage to win the game.
					You can do just that with two <?php echo $fireballhtml; ?> and a
					<?php echo $pyroblasthtml; ?></p>
					
					<p>Or if you're a person of culture, you can play <?php echo $barneshtml; ?> on turn 4,
					summon <?php echo $yshaarjhtml; ?> when Y'Shaarj is the ONLY MINION IN THE WHOLE DECK,
					Then Y'Shaarj summons itself, then you can go face three times and win...<?php echo $leeroyjenkinshtml; ?>
					
					<p>Here's another paragraph with some more content.</p>
					
					<p>Here's another paragraph with some more content.</p>
					
					<p>Here's another paragraph with some more content.</p>
					
					<p>Here's another paragraph with some more content.</p>
					
					<p>Here's another paragraph with some more content.</p>
				</div>
				
				<div id="signin-prompt">
					Sign in to see the rest of this article!
				</div>
				
				<div id="signin-content">
					<p>Welcome, person who is logged in. Since you are logged in, you are able
					to see this additional content.</p>
					
					<p>Here's another paragraph with some more content.</p>
					
					<p>Here's another paragraph with some more content.</p>
					
					<p>Here's another paragraph with some more content.</p>
					
					<p>Here's another paragraph with some more content.</p>
					
					<p>Here's another paragraph with some more content.</p>
				</div>
			</article>
		</main>
		
		<?php include "footer.php"; ?>
		
	</body>
</html>
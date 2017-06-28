<?php

session_start();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Plaisir Personn'elle</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="icon" type="image/gif/png" href="img_layout/logo-icon.png">
</head>
<body>
	<header>
		<div class="Header Header-pages clearfix">
			<div class="Header-logo">
				<a href="index.php">
					<img src="img_layout/logo_noir.png">
				</a>
			</div>

			<nav class="Header-nav Dragees clearfix">
				<ul>
					<?php if(isset($_SESSION['auth'])): ?>
						<li>
							<a href="compte.php"><p><?= $_SESSION['auth']['username']; ?></p></a>
						</li>
						<li class="deconnexion"><a href="logout.php">Déconnexion</a></li>
					<?php else: ?>
						<li>
							<a href="login.php"><p>compte</p></a>
						</li>
					<?php endif; ?>
					<li>
						<a href="compte.php"><img src="img_layout/shopping-bag-noir.png"></a>
					</li>	
					<li>
						<img src="img_layout/france.png">
					</li>		
				</ul>
			</nav>
		</div>
	</header>
		<?php if(isset($_SESSION['flash'])): ?>
		<?php foreach ($_SESSION['flash'] as $type => $message): ?>
			<h4 class="<?= $type; ?>"><?= $message; ?></h4>
		<?php endforeach; ?>
		<?php unset($_SESSION['flash']); ?>
		<?php endif; ?>
<?php


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
	<div class="Header">
		<div class="Header-logo">
			<a href="index.php">
				<img src="img_layout/logo.png">
			</a>
		</div>

		<nav class="Header-nav clearfix">
			<ul>
				<?php if(isset($_SESSION['auth'])): ?>
					<li>
						<a href="compte.php"><p><?= $_SESSION['auth']['username']; ?></p></a>
					</li>
					<li class="deconnexion2"><a href="logout.php">Déconnexion</a></li>
				<?php else: ?>
					<li>
						<a href="login.php"><p>compte</p></a>
					</li>
				<?php endif; ?>
				<li>
					<a href="compte.php"><img src="img_layout/shopping-bag.png"></a>
				</li>
				<li>
					<img src="img_layout/france.png">
				</li>
			</ul>
		</nav>
	</div>
	<div class="carousel">
		<ul class="ul-carousel">
			<li class="li-carousel">
				<img src="img_content/carousel01.jpg" alt="">
				<div class="Content-carousel-01">
					<h2>Exigez le plaisir 3D</h2>
					<p>
						Ce nouveau concept vous permet de visualiser via la 3D vos achats pour le plaisir.
					</p>
					<a href="produit_berlingot.php"><h3>Découvrez par vous même</h3></a>
				</div>
			</li>
			<li class="li-carousel">
				<img src="img_content/carousel04.jpg" alt="">
				<div class="Content-carousel-01">
					<h2>Le produit phare</h2>
					<p>
						Sextoy vibrant pour clitoris. Ce masturbateur de clitoris ultra puissant, est le wang le plus fantastique pour procurer des orgasmes clitoridien puissants. Grâce a 8 vitesses...
					</p>
					<a href="produit_arlequin.php"><h3>Lire la suite</h3></a>
				</div>
			</li>
			<li class="li-carousel">
				<img src="img_content/carousel03.jpg" alt="">
				<div class="Content-carousel-01">
					<h2>Petit plaisir</h2>
					<p>
						Stimulateur anal unisexe en silicone. Appelé également Plug, il s'introduit complètement et reste coincé grâce à sa forme spéciale. Vous le portez en toute sécurité grâce à sa base...
					</p>
					<a href="produit_loukoum.php"><h3>Lire la suite</h3></a>
				</div>
			</li>
		</ul>

		<div class="container-next">
				<span class="next">
					<img src="img_layout/angle-blanc.svg">
				</span>
		</div>

		<div class="container-prev">
				<span class="prev">
					<img src="img_layout/angle-blanc.svg">
				</span>
		</div>

	</div>

	<div class='dots'>
		<ul class="clearfix dots-ul">
			<li class="dots-li active"></li>
			<li class="dots-li"></li>
			<li class="dots-li"></li>
		</ul>
	</div>

</header>
<main class="Home-main clearfix">
	<?php if(isset($_SESSION['flash'])): ?>
		<?php foreach ($_SESSION['flash'] as $type => $message): ?>
			<h4 class="<?= $type; ?>"><?= $message; ?></h4>
		<?php endforeach; ?>
		<?php unset($_SESSION['flash']); ?>
	<?php endif; ?>

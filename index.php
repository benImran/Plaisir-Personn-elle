<?php

session_start();

require_once 'connect.php';
require_once "functions.php";
require_once "header_carousel.php";

?>

	<div class="Title">
		<h1>Nos gourmandises</h1>
	</div>

	<article class="Product clearfix">
		<div class="Image">
			<img src="img_content/Homepage/berlingot.png">
		</div>
		<div class="Description">
			<h2>Le berlingot</h2>
			<h3>Une onctuosité délicieuse</h3>
			<p>Vibromasseur sensuel en silicone. Très maniable, il a un profil arrondi afin d'assurer une stimulation en grande douceur. Revêtu d'un silicone très soyeux, son corps glisse sur les zones sensibles en procurant une délicieuse progression. Sensations garanties grâce à la tête de bon gabarit. Vibrations puissantes...</p>
			<a href="produit_berlingot.php" class="Product-page">
				<p>Voir le produit</p>
				<img src="img_layout/angle.svg"></a>
		</div>
	</article>

	<article class="Product clearfix">
		<div class="Image">
			<img src="img_content/Homepage/arlequin.png">
		</div>
		<div class="Description">
			<h2>L'Arlequin</h2>
			<h3>Un vibromasseur réactif et fidèle</h3>
			<p>Sextoy vibrant pour clitoris. Ce masturbateur de clitoris ultra puissant, est le wang le plus fantastique pour procurer des orgasmes clitoridien puissants. Grace a 8 vitesses...</p>
			<a href="produit_arlequin.php" class="Product-page">
				<p>Voir le produit</p>
				<img src="img_layout/angle.svg"></a>
		</div>
	</article>

	<article class="Product clearfix">
		<div class="Image">
			<img src="img_content/Homepage/dragees.png">
		</div>
		<div class="Description">
			<h2>Les dragées</h2>
			<h3>Des boules de geisha au plaisir gourmand</h3>
			<p>Boules de geisha en silicone ultra douces. Encore plus chics, encore plus douces, encore plus stimulantes, ces nouvelles boules de geisha sont nervurées en finesse pour caresser le vagin à merveille. Renfermant une petite bille, chaque boule reproduit la sensation...</p>
			<a href="produit_dragees.php" class="Product-page"><p>Voir le produit</p><img src="img_layout/angle.svg"></a>
		</div>
	</article>

	<article class="Product clearfix">
		<div class="Image">
			<img src="img_content/Homepage/loukoum.png">
		</div>
		<div class="Description">
			<h2>Le loukoum</h2>
			<h3>Découvrir de nouveaux plaisirs</h3>
			<p>Stimulateur anal unisexe en silicone. Appelé également Plug, il s'introduit complètement et reste coincé grâce à sa forme spéciale. Vous le portez en toute sécurité grâce à sa base qui joue un rôle de butée. La dilatation qu'il procure est un excellent préliminaire au rapport anal. Débutez en anal avec...</p>
			<a href="produit_loukoum.php" class="Product-page"><p>Voir le produit</p><img src="img_layout/angle.svg"></a>
		</div>
	</article>
</main>

<?php
require_once "footer.php";
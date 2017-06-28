<?php

require_once 'connect.php';
require_once "functions.php";
require_once "header.php";

$sql = "SELECT
                `username`,
                `email`,
                `password`
            FROM users 
            WHERE username = :username";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':username', $_POST['username'], PDO::PARAM_STR);
$stmt->execute(['username' => $_POST['username']]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

$date=date_create($_SESSION['auth']['confirmed_at']);

?>
	<main class="Account-main clearfix">
		<h2 class="Title">Mon compte</h2>
		<div class="Infos">
			<h3>Coordonnées</h3>
			<p>Nom: <?= $_SESSION['auth']['username'] ?></p>
			<p>Adresse mail: <?= $_SESSION['auth']['email'] ?></p>
			<p>Date d'inscription: <?= date_format($date,"d/m/Y") ?></p>
		</div>
		<div class="Infos-modify clearfix">
			<form>
				<input type="submit" name="" value="Modifier">
			</form>
			<img src="img_layout/engrenage.png">
		</div>
		<div class="Adresses clearfix">
			<h3>Carnet d'adresses</h3>
			<table>
				<tr>
					<th><p>Lieu</p></th>
					<th><p>Adresse</p></th>
					<th><p>Facturation</p></th>
					<th><p>Livraison</p></th>
				</tr>
				<tr>
					<td><p>Domicile</p></td>
					<td><p>114 Avenue Charles de Gaulle, Neuilly-sur-seine, 92200</p></td>
					<td><input type="radio" name="" value="" checked></td>
					<td><input type="radio" name="" value=""></td>
				</tr>
				<tr>
					<td><p></p></td>
					<td><p></p></td>
					<td><p></p></td>
					<td><p></p></td>
				</tr>
				<tr>
					<td><p></p></td>
					<td><p></p></td>
					<td><p></p></td>
					<td><p></p></td>
				</tr>
				<tr>
					<td><p></p></td>
					<td><p></p></td>
					<td><p></p></td>
					<td><p></p></td>
				</tr>
			</table>
		</div>
		<div class="Adresses-modify clearfix">
			<form>
				<input type="submit" name="" value="Ajouter / Modifier">
			</form>
			<img src="img_layout/engrenage.png">
		</div>
		<div class="Commands clearfix">
			<h3>Commandes</h3>
			<table>
				<tr>
					<th><p>Commande n°</p></th>
					<th><p>Date de commande</p></th>
					<th><p>Statut</p></th>
					<th><p>Date de commande</p></th>
					<th><p>Détail de commande</p></th>
				</tr>
				<tr>
					<td><p></p></td>
					<td><p></p></td>
					<td><p></p></td>
					<td><p></p></td>
					<td><p></p></td>
				</tr>
				<tr>
					<td><p></p></td>
					<td><p></p></td>
					<td><p></p></td>
					<td><p></p></td>
					<td><p></p></td>
				</tr>
				<tr>
					<td><p></p></td>
					<td><p></p></td>
					<td><p></p></td>
					<td><p></p></td>
					<td><p></p></td>
				</tr>
				<tr>
					<td><p></p></td>
					<td><p></p></td>
					<td><p></p></td>
					<td><p></p></td>
					<td><p></p></td>
				</tr>
			</table>
		</div>
		<div class="Payment clearfix">
			<h3>Mode de paiement</h3>
			<table>
				<tr>
					<th><p>Visa</p></th>
					<th><p>**** **** **** 5667</p></th>
				</tr>
				<tr>
					<td><form><button><img src="img_layout/plus.png"></button></form></td>
					<td><p>Ajouter une nouvelle carte</p></td>
				</tr>
			</table>
		</div>
	</main>
<?php require_once "footer.php";
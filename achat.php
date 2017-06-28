<?php

require_once 'connect.php';
require_once "functions.php";
not_log();


// AFFICHER LES ENTREES DE LA BDD ( READ )

$sql = "SELECT `id`, `user`, `produits`, `quantite`, `taille`, `couleur`, `gravure` FROM `achat`";

$orders = $pdo->query($sql); // On prépare la requete SQL

$orders->execute(); // On éxécute la requete SQL

require_once "header4.php"; ?>

    <h2 class="title-achats">Panel Admin - Achats</h2>
     <table class="table-achats">
         <tr>
            <th>id achat</th>
            <th>utilisateur</th>
            <th>produits</th>
            <th>quantité</th>
            <th>taille</th>
            <th>couleur</th>
            <th>gravure</th>
            <th>X</th>
         </tr>
         
        
            <?php
            while($row = $orders->fetch(PDO::FETCH_ASSOC)):?>
                 <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['user'] ?></td>
                    <td><?= $row['produits'] ?></td>
                    <td><?= $row['quantite'] ?></td>
                    <td><?= $row['taille'] ?></td>
                    <td><?= $row['couleur'] ?></td>
                    <td><?= $row['gravure'] ?></td>
                    <td><a href="">X</a></td>
                </tr>
            <?php endwhile; ?>
       
     </table>

<?php require_once "footer.php";






<?php
require_once 'connect.php';
require_once "functions.php";
//not_log();
require_once "header4.php";


// AFFICHER LES ENTREES DE LA BDD ( READ )

$sql = "SELECT `id`, `categorie` FROM `commentaire`";

$tab = $pdo->prepare($sql); // On prépare la requete SQL

$tab->execute(); // On éxécute la requete SQL

?>

<h2 class="title-achats">Panel Admin - Commentaires</h2>
     <table class="table-achats">
         <tr>
            <th>id</th>
            <th>categories</th>
         </tr>
         
        
            <?php
            while($row = $tab->fetch(PDO::FETCH_ASSOC)):?>
                 <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['categorie'] ?></td>
                </tr>
            <?php endwhile; ?>
       
     </table>


<?php
require_once "footer.php";
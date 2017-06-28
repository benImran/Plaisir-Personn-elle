<?php

if(!empty($_POST) && !empty($_POST['username']) && !empty($_POST['password'])) {
    require_once "connect.php";
    require_once "functions.php";
    $sql = "SELECT
                `id`,
                `username`,
                `email`,
                `password`,
                `confirmed_at`
            FROM users 
            WHERE username = :username";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':username', $_POST['username'], PDO::PARAM_STR);
    $stmt->execute(['username' => $_POST['username']]);
    $user = $stmt->fetch();

    if(password_verify($_POST['password'], $user['password'])) {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
//        $token == $user['confirmation_token'];
        $_SESSION['auth'] = $user;
        $_SESSION['flash']['success'] = "Vous êtes maintenant connecté.";
        header("Location: compte.php");
        exit();
    } else {
        $_SESSION['flash']['danger'] = "Identifiant ou mot de passe incorrect.";
    }
}


require_once 'connect.php';
require_once "functions.php";
require_once "header.php"; ?>

    <h2 class="title_admin">Connexion</h2>
    <div>
        <form class="panel_admin" action="" method="POST">
            <label for="username">login</label>
            <input class="input_log" type="text" name="username">

            <label for="password">password</label>
            <input class="input_log" type="password" name="password">

            <input class="connect_admin" type="submit" value="Se connecter">
            <a class="lien" href="inscription.php">Inscrivez-vous !</a>
        </form>
    </div>
<?php
//require_once "footer.php";
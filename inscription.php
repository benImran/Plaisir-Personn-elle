<?php
require_once "connect.php";
require_once "functions.php";


if(!empty($_POST)) {

    $error = array();

    if(empty($_POST['username']) || !preg_match_all('/[a-zA-Z0-9_]+$/', $_POST['username'])) {
        $error['username']  = "Votre prenom n'est pas valide !";
    } else {
        $sql = "SELECT id FROM users WHERE username = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array($_POST['username']));
        $user = $stmt->fetch();
        if($user) {
            $error['username'] = "Votre pseudo est déja prit !";
        }
    }

    if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $error['email']  = "Votre email n'est pas valide !";
    } else {
        $sql = "SELECT id FROM users WHERE email = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array($_POST['email']));
        $user = $stmt->fetch();
        if($user) {
            $error['email'] = "Votre email est déja prit !";
        }
    }

    if(empty($_POST['password']) || $_POST['password'] != $_POST['password_confirm']) {
        $error['password']  = "Vous devez rentrer un mot de passe valide";
    }

    if(empty($error)) {
        require_once "connect.php";
        $sql = "INSERT INTO `users` SET username = ?, email = ?, password = ?, confirmation_token = ?";
        $stmt = $pdo->prepare($sql);
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $token = str_rand(60);
        $stmt->execute(array($_POST['username'], $_POST['email'], $password, $token));
        $user_id = $pdo->lastInsertId();
        mail($_POST['email'], 'Confirmation de votre compte', "Afin de valider votre compte merci de cliquer sur ce lien\n\nhttp://localhost:8888/conf.php?id=$user_id&token=$token");
        header('Location: login.php?id=$user_id&token=$token');
//        header("Location: conf.php?id=$user_id&token=$token");
        exit();
    }
    debug($error);
}
require_once "header.php";
?>   

     <h2 class="title_admin">Inscription</h2>
    <div>
        <form class="panel_admin" action="" method="POST">
            <?php if (!empty($error)) : ?>
                <p class="erreur">Vous n'avez pas remplis le formulaire correctement.</p>
            <?php foreach ($error as $errors) : ?>
                <li class="erreur"><?= $errors; ?></li>
            <?php endforeach; ?>
            <?php endif; ?>
            <label for="username">login</label>
            <input class="input_log" type="text" name="username">

            <label for="email">e-mail</label>
            <input class="input_log" type="text" name="email">

            <label for="password">password</label>
            <input class="input_log" type="password" name="password">

            <label for="password_confirm">confirmation password</label>
            <input class="input_log" type="password" name="password_confirm">

            <input class="connect_admin" type="submit" value="S'inscrire">
            <a class="lien" href="login.php">Vous avez déjà un compte ?</a>
        </form>
    </div>


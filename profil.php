<?php include 'config/db.php' ?>
<?php session_start(); ?>
<?php
//Verifiie si utilisateur est connecté sinon redirige vers page connexion
if (!$_SESSION['user']['connected'] == true) {
    header("location: connexion.php");
}

//Si action boutton et formulaire non vide rempli
if (isset($_POST['submit']) && !empty($_POST['login']) && !empty($_POST['password'])) {
//    Secur entrée utilisateur
    $newLogin = htmlspecialchars($_POST['login']);
    $newPassword = htmlspecialchars($_POST['password']);
    $newPassword = password_hash($newPassword, CRYPT_BLOWFISH);
    $id_user = $_SESSION['user']['id_user'];

//    Requete PDO change info user dans DB
    $sql = "UPDATE utilisateurs SET login=?,password=? WHERE id=?";
    $stmt = $connexion->prepare($sql);
    //Execute prend un tableau en parametre pour executer la requete TOUJORUS RESPECTER L'ORDRE DES PARAMETRE PASSE AU TABLEAU
    $stmt->execute(array($newLogin,$newPassword,$id_user));
    $_SESSION['user']['login'] = $newLogin;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Profil</title>
</head>
<body>
<?php require 'header.php'; ?>
<div class="container-fluid p-5">
    <div class="container-fluid">
        <article class="mx-auto border border-dark p-3 col-5">
            <h1 class="text-primary font-italic">Modifies tes information!</h1>
            <p class="font-italic font-weight-bold my-5">Tu as envie de changer de mot de passe, ou tu souhaites
                modifier ton identifiant? pas de problème
                saisit tes nouvelles information dans le formulaire de moficiation des informations de connexion!</p>
        </article>
        <form action="" method="post" class="mx-auto col-lg-4 col-md-6 col-sm-6 my-5  p-5 rounded">
            <fieldset>
                <legend class="my-5 text-center">Modifier mes informations de connexion</legend>

                <div class="form-group">
                    <label for="login">New Login</label>
                    <input type="text" class="text-center form-control" id="login" aria-describedby="loginHelp"
                           placeholder="Enter votre nouveau Login"
                           name="login">

                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">New Password</label>
                    <input type="password" class="text-center form-control" id="exampleInputPassword1"
                           placeholder="Entrez votre nouveau Password"
                           name="password">
                </div>
                <div class="form-group">
                    <button class="btn btn-success " type="submit" name="submit">Envoyer</button>
                </div>
            </fieldset>
        </form>
    </div>
</div>
<?php require 'footer.php'; ?>
</body>
</html>
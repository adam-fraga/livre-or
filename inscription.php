<?php require 'config/db.php' ?>
<?php
//Initialisatiuon des variables
$user = htmlspecialchars($_POST['login']);
$password = htmlspecialchars($_POST['password']);
$confirm_password = htmlspecialchars($_POST['confPassword']);
$login_check = NULL;
$password_check = NULL;

//Verif Login user
if (strlen($user) <= 50 && !empty($user)) {
    $login_check = true;
} else {
    $login_check = false;
}

//Verif password user
if (strlen($password >= 8 && $password == $confirm_password)) {
    $password_check = true;
    $password = password_hash($password, CRYPT_BLOWFISH);
} else {
    $password_check = false;
}

//Query si action boutton et login + pass verifié
if (isset($_POST['submit'])):
    if ($password_check == true && $login_check == true) {
//    Initialisation reqête
        $sql = "INSERT INTO utilisateurs (login,password) VALUES ('$user','$password')";
//        Envoi de la requete avec PDO
        $result = $connexion->query($sql);
        header("location:connexion.php");
    }
endif;
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.css">
    <title></title>
</head>
<body>
<?php require 'header.php'; ?>
<div class="container-fluid p-5">
    <div class="container-fluid">
        <article class="mx-auto border border-dark p-3 col-5">
            <h1 class="text-primary font-italic">Rejoins nous vite!</h1>
            <p class="font-italic font-weight-bold my-5">Une fois ton login et ton mot de passe choisit clique sur le
                boutton envoyer pour créer ton compte.
                Une fois que tu auras créé ton compte tu sera automatiquement redirigé vers la page de connexion!</p>
        </article>
        <form action="" method="post" class="mx-auto col-lg-4 col-md-6 col-sm-6 my-5  p-5 rounded">
            <fieldset>
                <legend class="my-5 text-center">Formulaire d'inscription</legend>

                <div class="form-group">
                    <label for="login">Login</label>
                    <input type="text" class="text-center form-control" id="login" aria-describedby="loginHelp"
                           placeholder="Enter votre nouveau Login"
                           name="login">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="text-center form-control" id="exampleInputPassword1"
                           placeholder="Entrez votre nouveau Password"
                           name="password">
                </div>
                <div class="form-group">
                    <label for="confpassword">Confirmer Password</label>
                    <input type="password" class="text-center form-control" id="confpassword"
                           placeholder="Entrez votre nouveau Password"
                           name="confPassword">
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
<?php include 'config/db.php' ?>
<?php session_start(); ?>
<?php if (!$_SESSION['user']['connected'] == true) {
    header("location:connexion.php");
} ?>

<?php
//Check remplissage du post et action boutton
if (isset($_POST['submit']) && !empty($_POST['login']) && !empty($_POST['commentaire'])) {
//    Secure saisit utilisateur
    $commentaire = htmlspecialchars($_POST['commentaire']);
    $id_user = $_SESSION['user']['id_user'];
//    Creation variable requete insertion value + date
    $sql = "INSERT INTO commentaires (commentaire, id_utilisateur, date) VALUES (?, ? , NOW())";
//  Prepa requete PDO
    $stmt = $connexion->prepare($sql);
//    Execute requete PDO
    $stmt->execute(array($commentaire, $id_user));
    //redirection sur la page afin de purger rquete http et eviter nouvel envoi en cas d'actualisation
    header("location:commentaire.php");
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
    <title>Header</title>
</head>
<body>
<?php require 'header.php'; ?>
<div class="container-fluid p-5">
    <div class="container-fluid">
        <article class="mx-auto border border-dark p-3 col-5">
            <h1 class="text-primary font-italic">Publie ton message!</h1>
            <p class="font-italic font-weight-bold my-5">Participe à la conversation et interagis avec les autres,
                n'oublie pas d'indiquer ton identifiant!</p>
        </article>
        <form action="" method="post" class="mx-auto col-lg-4 col-md-6 col-sm-6 my-5  p-5 rounded">
            <fieldset>
                <legend class="text-center">Envoi ton commentaire</legend>

                <div class="form-group">
                    <label for="login">Login</label>
                    <input type="text" class="form-control" id="login" aria-describedby="loginHelp"
                           name="login">
                </div>
                <div class="form-group">
                    <label for="exampleTextarea">Ton commentaire</label>
                    <textarea class="form-control" id="exampleTextarea" rows="6" name="commentaire"></textarea>
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
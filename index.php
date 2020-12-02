<?php

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
<div class="jumbotron">
    <h1 class="display-3">Bienvenue à toi visiteur!</h1>
    <p class="lead">Inscris toi pour échanger sur notre livre d'or! </p>
    <hr class="my-4">
    <p>Pour t'inscrire rien de plus simple rendez-vous sur la page d'inscription en cliquant sur le boutton ci-dessous!</p>
    <p class="lead">
        <a class="btn btn-primary btn-lg" href="inscription.php" role="button">Inscription</a>
    </p>
</div>
<?php require 'footer.php'; ?>
</body>
</html>
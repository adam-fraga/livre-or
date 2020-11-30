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
        <h1 class="">Rejoins nous vite!</h1>
        <form action="connexion.php" method="post" class="mx-auto col-lg-4 col-md-6 col-sm-6 my-5  p-5 rounded">
            <fieldset>
                <legend class="my-5 text-center">Formulaire d'inscription</legend>

                <div class="form-group">
                    <label  for="login">Login</label>
                    <input type="text" class="text-center form-control" id="login" aria-describedby="loginHelp"
                           placeholder="Enter votre nouveau Login"
                           name="login">

                </div>
                <div class="form-group">
                    <label  for="exampleInputPassword1">Password</label>
                    <input type="password" class="text-center form-control" id="exampleInputPassword1" placeholder="Entrez votre nouveau Password"
                           name="password">
                </div>

                <div class="form-group">
                    <label  for="confpassword">Confirmer Password</label>
                    <input type="password" class="text-center form-control" id="confpassword" placeholder="Entrez votre nouveau Password"
                           name="confpassword">
                </div>
                <div class="form-group">
                    <button class="btn btn-success " type="submit" name="connexion">Envoyer</button>
                </div>
            </fieldset>
        </form>
    </div>
</div>
<?php require 'footer.php'; ?>
</body>
</html>
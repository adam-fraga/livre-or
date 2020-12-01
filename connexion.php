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
            <h1 class="text-primary font-italic">Connecte toi et rejoins nous!</h1>
            <p class="font-italic font-weight-bold my-5">C'est ici que tu vas pouvoir te connecter! entre tes informations d'inscription et participe toi aussi à la conversation!</p>
        </article>
        <form action="connexion.php" method="post" class="mx-auto col-lg-4 col-md-6 col-sm-6 my-5  p-5 rounded">
            <fieldset>
                <legend class="text-center">Connexion</legend>

                <div class="form-group">
                    <label for="login">Login</label>
                    <input type="text" class="form-control" id="login" aria-describedby="loginHelp"
                           placeholder="Enter Login"
                           name="login">
                    <small id="loginlHelp" class="form-text text-muted">We'll never share your login or password with
                        anyone
                        else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"
                           name="password">
                </div>
                <div class="form-group">
                    <button class="btn btn-success" type="submit" name="connexion">Connexion</button>
                </div>
            </fieldset>
        </form>
    </div>
</div>
<?php require 'footer.php'; ?>
</body>
</html>
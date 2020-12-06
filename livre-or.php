<?php include 'config/db.php' ?>
<?php
session_start();
//        Requete multi table recup date, logi et comm trié par date
$sql = "SELECT login, commentaire, date FROM utilisateurs INNER JOIN commentaires ON utilisateurs.id = commentaires.id_utilisateur ORDER BY date DESC ";
//        Requete pdo
$sth = $connexion->query($sql);
//        Capture resultat de ma requete et crée un tableau indexé de tableau associatif
$resultat = $sth->fetchAll(PDO::FETCH_ASSOC);


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Livre d'or</title>
</head>
<body>
<?php require 'header.php'; ?>
<section class=" flex">
    <h1 class="text-center my-5">Livre d'or</h1>
    <div class="flex-column container col-6 col-sm-8  p-5 ">
<!--        Repete $resultat pour obtenir tout les comm-->
        <?php foreach ($resultat as $value): ?>
            <article class="card mx-auto text-white bg-primary col-sm-8 mb-3 rounded mr-5">
                <h4 class="card-header"><?php echo $value['login'] ?></h4>
                <div class="card-body">
                    <small><?php echo $value['date'] ?></small>
                    <p class="card-text"><?php echo $value['commentaire'] ?></p>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<?php require 'footer.php'; ?>
</body>
</html>
<!--CONNEXION PDO-->
<?php
$dsn = 'mysql:host=localhost;dbname=livreor';
$username = 'root';
$password = '';

//Tentative de connexion
try{
    $connexion = new PDO($dsn, $username, $password);
    //On définit le mode d'erreur de PDO sur Exception
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
    /*On capture les exceptions si une exception est lancée et on affiche
     *les informations relatives à celle-ci*/
catch(PDOException $e){
    echo "Erreur : " . $e->getMessage();
}
?>
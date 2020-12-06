<?php

//Fonction permettant de decrypt pass avec valeur index tableau en dur renvoi un boléen
function check_pass($password_user, $password_db)
{
    $result = password_verify($password_user, $password_db);
    return $result;
}


//Recup infos utilisateur dans db et la retourne sous forme de tableau associatif
function fetch_user_from_DB(string $str)
{

    include 'db.php';
//        Requete permet de selectionner le champ ou se trouve le login user
    $sql = "SELECT * FROM utilisateurs WHERE login = '$str'";
//        Requete pdo
    $sth = $connexion->query($sql);
//        Capture resultat de ma requete et crée un tableau indexé de tableau associatif
    $resultat = $sth->fetchAll(PDO::FETCH_ASSOC);
//        Stock mon tableau associatif dans une variable
    $assoc_user = $resultat[0];
//    Retourne le tableau associatif contenant les donnée utilisateur
    return $assoc_user;
}

/*function fetch_comment_from_DB(string $str)
{

    include 'db.php';

}*/

?>
<!--CONNEXION PDO-->
<?php
$DB_DSN = 'mysql:host=localhost;dbname=livreor';
$DB_user = 'root';
$DB_password = '';

$PDO = new PDO($DB_DSN,$DB_user,$DB_password);
?>
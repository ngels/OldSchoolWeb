<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=shevent;charset=utf8', 'root', '');
    // $bdd = new PDO('sqlite:db/contactmessages');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>

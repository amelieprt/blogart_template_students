<?php


// print_r($_POST); voir si on a bien reçu l'infos

require_once $_SERVER['DOCUMENT_ROOT']. '/config.php';
print_r($_POST);
$libMotCle = $_POST['libMotCle'];
sql_insert('MOTCLE','libMotCle',"'$libMotCle'");

header('Location: ../../views/backend/keywords/list.php');
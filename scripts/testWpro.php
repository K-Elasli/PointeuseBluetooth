<?php
    include ("dbConnect.php");
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $sens = $_POST["sens"];
    $date = date(d)."/".date(m)."/".date(y);
    $heure = date(H).":".date(i).":".date(s);
// requete préparée pour entrer un champs dans la BDD
$req = $bdd->prepare('INSERT INTO testhistorique(nom , prenom , date , heure , sens) VALUES (:nom, :prenom, :date, :heure, :sens)');
$req->execute(array(
    'nom' => $nom,
    'prenom' => $prenom,
    'date' => $date,
    'heure' => $heure,
    'sens' => $sens
));
// on redirige
header('Location: ../testRead.php');
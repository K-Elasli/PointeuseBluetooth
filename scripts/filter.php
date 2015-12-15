<?php
    include('dbConnect.php');
    $date = date(d)."/".date(m)."/".date(y);
    $heure = date(H).":".date(i).":".date(s);
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $filDate = $_POST['date'];
    $sens = $_POST['sens'];
    $nbLigne = $_POST['nbligne'];
    if (!empty($nom) AND !empty($prenom) AND !empty($filDate) AND !empty($nbLigne)){
        $url = "../pannel/consult.php?nom=".$nom."&prenom=".$prenom."&filDate=".$filDate."&nbligne".$nbLigne;
    }
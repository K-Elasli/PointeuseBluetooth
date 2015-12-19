<?php
    include('dbConnect.php');
    $date = date(d)."/".date(m)."/".date(y);
    $heure = date(H).":".date(i).":".date(s);
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $filDate = $_POST['date'];
    $sens = $_POST['sens'];
    $nbLigne = $_POST['nbligne'];
    $url = "../pannel/consult.php?";
    if ($sens == "3"){
        $sens = "";
    }
    if (!empty($nom) OR !empty($prenom) OR !empty($filDate) OR !empty($sens) OR !empty($nbLigne)){
        if (!empty($nom)){
            $url = $url."nom=".$nom;
        }
        if (!empty($prenom)){
            if (!empty($nom)){
                $url = $url."&prenom=".$prenom;
            }
            else{
                $url = $url."prenom=".$prenom;
            }
        }
        if (!empty($filDate)){
            if (!empty($nom OR $prenom)){
                $url = $url."&date=".$filDate;
            }
            else{
                $url = $url."date=".$filDate;
            }
        }
        if (!empty($sens)){
            if (!empty($nom OR $prenom OR $filDate)) {
                $url = $url . "&sens=" . $sens;
            }
            else{
                $url = $url . "sens=" . $sens;
            }
        }
        if (!empty($nbLigne)){
            if (!empty($nom OR $prenom OR $filDate OR $sens)) {
                $url = $url . "&nbLigne=" . $nbLigne;
            }
            else{
                $url = $url . "nbLigne=" . $nbLigne;
            }
        }
    }
    else{
    $url = "../pannel/consult.php";
    }
header("Location: ".$url);
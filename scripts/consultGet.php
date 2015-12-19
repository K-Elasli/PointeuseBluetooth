<?php
if(isset($_GET['nom'])){
    $gNom =$_GET['nom'];
}
else{
    $gNom ="";
}

if(isset($_GET['prenom'])){
    $gPrenom = $_GET['prenom'];
}
else{
    $gPrenom ="";
}

if(isset($_GET['date'])){
    $gDate = $_GET['date'];
}
else{
    $gDate ="";
}

if(isset($_GET['sens'])){
    $gSens = $_GET['sens'];
}
else{
    $gSens ="";
}

if(isset($_GET['nbLigne'])){
    $gNbLigne = $_GET['nbLigne'];
}
else{
    $gNbLigne ="";
}
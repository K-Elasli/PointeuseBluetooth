<?php
$quer = "SELECT * FROM testhistorique";
if (!empty($gNom) OR !empty($gPrenom) OR !empty($Date) OR !empty($gSens) OR !empty($gNbLigne)){
    if (!empty($gNom)){
        $quer = $quer." WHERE nom = '".$gNom."'";
    }

    if (!empty($gPrenom)){
        if(!empty($gnom)){
            $quer = $quer." prenom = '".$gPrenom."'";
        }else{
            $quer = $quer." WHERE prenom = '".$gPrenom."'";
        }
    }

    if (!empty($gDate)){
        if(!empty($gNom) OR !empty($gPrenom)){
            $quer = $quer." date = '".$gDate."'";
        }else{
            $quer = $quer." WHERE date = '".$gDate."'";
        }
    }

    if (!empty($gSens)){
        if($gSens == "1"){
            $qSens = "0";
        }
        if($gSens == "2"){
            $qSens = "1";
        }
        if(!empty($gNom) OR !empty($gPrenom) OR !empty($gDate)){
            $quer = $quer." sens = '".$qSens."'";
        }else{
            $quer = $quer." WHERE sens = '".$qSens."'";
        }

    }

    if (!empty($gNbLigne)){
        $quer = $quer." ORDER BY id DESC LIMIT 0,".$gNbLigne;
    }
    else{
        $quer = $quer." ORDER BY id DESC LIMIT 0,10";
    }
}
else{
    $quer = "SELECT * FROM testhistorique ORDER BY id DESC LIMIT 0,10";
}
//affiche la requete pour tester
// echo '<p style="text-align: center">'.$quer.'</p>';
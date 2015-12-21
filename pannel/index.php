<?php
include('../scripts/dbConnect.php');
$date = date(d)."/".date(m)."/".date(y);
$heure = date(H).":".date(i).":".date(s);
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="">

        <title>Tableau de bord</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">

        <!-- Custom style  -->
        <link href="../css/StylePannel.css" rel="stylesheet">
    </head>

    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"> <span class="glyphicon glyphicon-dashboard"></span> Panneau d'administration</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
                        <li><a href="consult.php">Consultation</a></li>
                        <li><a href="member.php">Gestion employés</a></li>
                        <li><a href="#">Aide</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <!-- /Navigation -->
        <!-- Contenu -->
        <div class="container">
            <!-- Vue d'ensemble -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 class="panel-title">Vue d'ensemble</h1>
                </div>
                <div class="panel-body">
                    <div class="row" style="text-align: center">
                        <div class="col-md-4">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><span class="glyphicon glyphicon-save"></span> Passages aujourd'hui</h3>
                                </div>
                                <div class="panel-body" style="font-size: 46px">
                                    <?php
                                    //script pour afficher le nb de passages
                                    $reponse = $bdd->query('SELECT * FROM testhistorique');
                                    $nbPassages = 0;
                                    while ($donnees = $reponse->fetch())
                                    {
                                        if ($donnees['date'] == $date){
                                            $nbPassages = $nbPassages + 1;
                                        }
                                    }
                                    $reponse->closeCursor(); // Termine le traitement de la requête
                                    echo $nbPassages;
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><span class="glyphicon glyphicon-thumbs-up"></span> Employés présents</h3>
                                </div>
                                <div class="panel-body" style="font-size: 46px">
                                    <?php
                                    //script pour afficher le nb de présent
                                    $reponse = $bdd->query('SELECT * FROM testhistorique');
                                    $nbPresents = 0;
                                    while ($donnees = $reponse->fetch())
                                    {
                                        if ($donnees['date'] == $date){
                                            if ($donnees['sens'] == "0"){
                                                $nbPresents = $nbPresents + 1;
                                            }
                                            else{
                                                $nbPresents = $nbPresents - 1;
                                            }
                                        }
                                    }
                                    $reponse->closeCursor(); // Termine le traitement de la requête
                                    echo $nbPresents;
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-danger">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><span class="glyphicon glyphicon-thumbs-down"></span> Employés absents</h3>
                                </div>
                                <div class="panel-body" style="font-size: 46px">
                                    <?php
                                    //script pour afficher le nb d'absents
                                    $reponse = $bdd->query('SELECT * FROM testhistorique');
                                    while ($donnees = $reponse->fetch())
                                    {
                                        $nbAbsents = 4 - $nbPresents; // remplacer 4 par variable du script qui cmpt les membres
                                    }
                                    $reponse->closeCursor(); // Termine le traitement de la requête
                                    echo $nbAbsents;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Vue d'ensemble -->
            <!-- résumé passages -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Résumé des 10 derniers passages</h3>
                </div>
                <div class="panel-body" style="text-align: center">
                    <table class="table">
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Date</th>
                        <th>Heure</th>
                        <th>Type</th>
                        <?php
                        //script pour afficher les 10 derniers passages
                        $reponse = $bdd->query('SELECT * FROM testhistorique ORDER BY id DESC LIMIT 0,10');
                        while ($donnees = $reponse->fetch())
                        {
                            if ($donnees['sens'] == "0"){
                                $typeA = "alert-success";
                                $sens = "Entrée";
                            }
                            else{
                                $typeA = "alert-warning";
                                $sens = "Sortie";
                            }
                            echo '<tr class="'.$typeA.'">'.
                            '<td>'.$donnees['nom'].'</td>'.
                            '<td>'.$donnees['prenom'].'</td>'.
                            '<td>'.$donnees['date'].'</td>'.
                            '<td>'.$donnees['heure'].'</td>'.
                            '<td>'.$sens.'</td>'
                            ;
                        }
                        $reponse->closeCursor(); // Termine le traitement de la requête
                        ?>
                    </table>
                </div>
            </div>
            <!-- /résumé passages -->
        </div>
        <!-- /Contenu -->
    </body>
</html>

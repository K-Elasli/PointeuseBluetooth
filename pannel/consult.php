<?php
include('../scripts/dbConnect.php');
$date = date(d)."/".date(m)."/".date(y);
$heure = date(H).":".date(i).":".date(s);
//On récupère les données d'url
include('../scripts/consultGet.php')
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="">

    <title>Consultation</title>
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
                    <li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
                    <li class="active"><a href="#">Consultation</a></li>
                    <li><a href="member.php">Gestion employés</a></li>
                    <li><a href="#">Aide</a></li>
                </ul>
                <ul class="nav navbar-right">
                    <li><a href="consult.php" class="btn btn-sm btn-default" style="margin-top: 5px">Remettre par défaut le filtre</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
<!-- /Navigation -->

<!-- Contenu -->
    <div class="container">
        <!--Partie Filtre-->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title" style="text-align: left">Filtre</h3>
            </div>
            <div class="panel-body">
                <form action="../scripts/filter.php" method="post">
                    <div class="row">
                        <div class="col-lg-2 col-md-2">
                            <div class="input-group">
                                <span class="input-group-addon">Nom</span>
                                <input type="text" name="nom" class="form-control" style="font-size: 12px" value="<?php echo $gNom;?>">
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2">
                            <div class="input-group">
                                <span class="input-group-addon">Prénom</span>
                                <input type="text" name="prenom" class="form-control" style="font-size: 12px" value="<?php echo $gPrenom;?>">
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2">
                            <div class="input-group">
                                <span class="input-group-addon" id="sizing-addon2">Date</span>
                                <input type="date" name="date" class="form-control" placeholder="JJ/MM/AAAA" style="font-size: 12px" value="<?php echo $gDate;?>">
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2">
                            <select class="form-control" name="sens">
                                    <option value="3">Sens de passage</option>
                                    <option value="1">Entrée</option>
                                    <option value="2">Sortie</option>
                            </select>
                        </div>
                        <div class="col-lg-2 col-md-2">
                            <div class="input-group">
                                <span class="input-group-addon" id="sizing-addon2">Nb</span>
                                <input type="text" name="nbligne" class="form-control" placeholder="lignes à afficher" style="font-size: 12px" value="<?php echo $gNbLigne;?>">
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2">
                            <input type="submit" value="Valider" class="form-control btn btn-success">
                        </div>
                </form>
                </div>
            </div>
        </div>
            <!--Partie Passages-->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Historique</h3>
                </div>
                <div class="panel-body">
                    <table class="table" style="text-align: center">
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Date</th>
                        <th>Heure</th>
                        <th>Type</th>
                        <?php
                        //script pour afficher l'historique selons les filtres
                        include('../scripts/consultQuery.php');

                        $reponse = $bdd->query($quer);
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
    </div>
</body>
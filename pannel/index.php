<?php
include('scripts/dbConnect.php');
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
                        <li><a href="#">Consultation</a></li>
                        <li><a href="#">Gestion employés</a></li>
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
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><span class="glyphicon glyphicon-thumbs-up"></span> Employés présents</h3>
                                </div>
                                <div class="panel-body" style="font-size: 46px">
                                     0
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-danger">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><span class="glyphicon glyphicon-thumbs-down"></span> Employés absents</h3>
                                </div>
                                <div class="panel-body" style="font-size: 46px">
                                   0
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
                    <h3 class="panel-title">Résumés des passages</h3>
                </div>
                <div class="panel-body" style="text-align: center">
                    <table class="table">
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Date</th>
                        <th>Heure</th>
                        <th>Type</th>

                        <tr class="alert-success">
                            <td>El asli</td>
                            <td>Karim</td>
                            <td>14/12/15</td>
                            <td>08:15:42</td>
                            <td>Entrée</td>
                        </tr>
                        <tr class="alert-warning">
                            <td>El asli</td>
                            <td>Karim</td>
                            <td>14/12/15</td>
                            <td>17:54:23</td>
                            <td>Sortie</td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- /résumé passages -->
        </div>
        <!-- /Contenu -->
    </body>
</html>

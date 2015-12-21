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

    <title>Membres</title>
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
                <li><a href="consult.php">Consultation</a></li>
                <li class="active"><a href="#">Gestion employés</a></li>
                <li><a href="#">Aide</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<!-- /Navigation -->
    <div class="container">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Informations d'un employé</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <form action="#" method="post"></form>
                    <div class="col-lg-12">
                       <select class="form-control" name="memberSel">
                            <option value="3">(Sélectionnez un employé)</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
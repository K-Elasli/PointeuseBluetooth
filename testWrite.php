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

    <title>Test écrire</title>

    <!-- Custom styles  -->
    <link href="" rel="stylesheet">
</head>

<body>
<?php

?>
<form action="scripts/testWpro.php" method="post">
    Nom:<br>
    <input type="text" name="nom" value="">
    <br>
    Prenom:<br>
    <input type="text" name="prenom" value="">
    <br>
    Sens:<br>
    <input type="text" name="sens" value="">
    <br><br>
    <input type="submit" value="Valider">
</form>

</body>
</html>

<?php
    include('scripts/dbConnect.php')
?>
<!doctype html>
    <head>
    <html lang="fr">
        <meta charset="utf-8">
        <link rel="stylesheet" href="./css/styleSc.css"/>
        <title>test lire logs</title>
    </head>
    <body>
        <table style="border: 1px solid black">
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Date</th>
                    <th>Heure</th>
                </tr>
                <?php
                $reponse = $bdd->query('SELECT * FROM testhistorique');
                while ($donnees = $reponse->fetch())
                {
                    echo "<tr>";
                    echo "<td>".$donnees['nom']."</td>";
                    echo "<td>".$donnees['prenom']."</td>";
                    echo "<td>".$donnees['date']."</td>";
                    echo "<td>".$donnees['heure']."</td>";
                    echo "</tr>";
                }

                $reponse->closeCursor(); // Termine le traitement de la requête
                ?>
        </table>
    <p><a href="testRead.php" style="width: 100%">Rafraichir</a></p>
    <?php
    include('testWrite.php')
    ?>
    </body>
</html>
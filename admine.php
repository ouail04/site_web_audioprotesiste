<?php
session_start();
include('home2.html');
?>
<?php
if (!isset($_SESSION['vrai'])) {
    echo "<script> type='text/javascript'>
window.location.replace('login.php');
</script>";
    exit;
}
?>

<?php
$connexion = mysqli_connect("localhost", "id20795759_neurouaudition", "ZOUINAouail_04");
if (!$connexion) {
    die("Desolé, connexion à localhost impossible : " . mysqli_connect_error());
}
if (!mysqli_select_db($connexion, 'id20795759_neurouaudition')) {
    die("Désolé, accès à la base de données impossible : " . mysqli_error($connexion));
}
$requete = "select nom,prenom,age,telephone,raison,raison2,raison3,explication,id,date from client";
$resultat = mysqli_query($connexion, $requete);
if (!$resultat) {
    die("Erreur lors de la requête SELECT : " . mysqli_error($connexion));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMINE-NUREU AUDITION</title>
    <style>
        table.info { border-collapse: collapse; width: 100%; }

        table.info th, table.info td { border: 1px solid black; padding: 8px; text-align: left; }

        table.info th { background-color: #f2f2f2; text-align: center; }

        table.info tr:nth-child(even) { background-color: #f2f2f2; }
    </style>
</head>
<body>
<table class="info">
    <tr>
        <th>NOM</th>
        <th>PRENOM</th>
        <th>AGE</th>
        <th>TELEPHON</th>
        <th>RAISON</th>
        <th>EXPLICATION</th>
        <th>RENDZE-VOUS</th>
    </tr>
    <?php
    while ($ligne = mysqli_fetch_row($resultat)) {
        echo "<tr><td>$ligne[0]</td><td>$ligne[1]</td><td>$ligne[2]</td><td>$ligne[3]</td><td><ul>";
        if ($ligne[4] != 'F') {
            echo "<li>$ligne[4]</li>";
        }
        if ($ligne[5] != 'F') {
            echo "<li>$ligne[5]</li>";
        }
        if ($ligne[6] != 'F') {
            echo "<li>$ligne[6]</li>";
        }
        echo "</ul></td><td>$ligne[7]</td>";
        if ($ligne[9] == NULL) {
            echo "<td><form action='ajouter_date.php' method='post'> <input type='date' name='date'><input type='submit' value='ERG'><input type='hidden' name='id' value='$ligne[8]'> </form></td>
                <td><form action='supprimer_ligne.php' method='post'><input type='submit' value='SPPR'><input type='hidden' name='id' value='$ligne[8]'></form></td></tr>";
        } else {
            echo "<td>$ligne[9] </td><td><form action='supprimer_ligne.php' method='post'><input type='submit' value='SPPR'><input type='hidden' name='id' value='$ligne[8]'></form></td></tr>";
        }
    }
    ?>
</table>
</body>
</html>

<?php include('pie_de_page.html') ?>

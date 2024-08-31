<?php
session_start();
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier si le champ date a été rempli
    if (isset($_POST['date']) && !empty($_POST['date'])) {
        $date = $_POST['date'];
        $id = $_POST['id']; // Récupérer l'ID de la ligne sélectionnée depuis le formulaire précédent

        // Connexion à la base de données
        $connexion = mysqli_connect("localhost", "id20795759_neurouaudition", "ZOUINAouail_04", "id20795759_neurouaudition");
        if (!$connexion) {
            die("Désolé, connexion à localhost impossible : " . mysqli_connect_error());
        }

        // Utiliser une requête préparée pour mettre à jour la date dans la base de données
        $requete_preparee = $connexion->prepare("UPDATE client SET date = ? WHERE id = ?");
        $requete_preparee->bind_param("si", $date, $id);

        if (!($requete_preparee->execute())) {
            echo "Erreur lors de l'enregistrement de la date : " . $requete_preparee->error; exit;
        }

        // Fermer la requête préparée et la connexion à la base de données
        $requete_preparee->close();
        mysqli_close($connexion);
    } else {
        echo "Veuillez remplir le champ de la date.";
    }
}
$_SESSION['vrai'] = "tous passe bien";
header("location:admine.php");
?>

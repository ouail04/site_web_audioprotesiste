<?php
session_start();
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier si le champ ID a été rempli
    if (isset($_POST['id']) && !empty($_POST['id'])) {
        $id = $_POST['id'];

        // Connexion à la base de données
        $connexion = mysqli_connect("localhost", "id20795759_neurouaudition", "ZOUINAouail_04", "id20795759_neurouaudition");
        if (!$connexion) {
            die("Désolé, connexion à localhost impossible : " . mysqli_connect_error());
        }

        // Utiliser une requête préparée pour supprimer la ligne de la base de données
        $requete_preparee = $connexion->prepare("DELETE FROM client WHERE id = ?");
        $requete_preparee->bind_param("i", $id);

        if (!($requete_preparee->execute())) {
            echo "Erreur lors de la suppression de la ligne : " . $requete_preparee->error;
        }

        // Fermer la requête préparée et la connexion à la base de données
        $requete_preparee->close();
        mysqli_close($connexion);
    } else {
        $id = 0;

        // Connexion à la base de données
        $connexion = mysqli_connect("localhost", "id20795759_neurouaudition", "ZOUINAouail_04", "id20795759_neurouaudition");
        if (!$connexion) {
            die("Désolé, connexion à localhost impossible : " . mysqli_connect_error());
        }

        // Utiliser une requête préparée pour supprimer la ligne de la base de données
        $requete_preparee = $connexion->prepare("DELETE FROM client WHERE id = ?");
        $requete_preparee->bind_param("i", $id);

        if ($requete_preparee->execute()) {
            echo "Ligne avec l'ID : $id a été supprimée avec succès.";
        } else {
            echo "Erreur lors de la suppression de la ligne : " . $requete_preparee->error;
        }

        // Fermer la requête préparée et la connexion à la base de données
        $requete_preparee->close();
        mysqli_close($connexion);
    }
}
$_SESSION['vrai'] = "tous passe bien";
header("location:admine.php");

?>

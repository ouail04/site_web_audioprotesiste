<?php
session_start();
$login = $_POST['login'];
$passwd = $_POST['passwd'];
$connexion = mysqli_connect("localhost","id20795759_neurouaudition","ZOUINAouail_04","id20795759_neurouaudition");
if (!$connexion) {
    die("Désolé, connexion à localhost impossible : " . mysqli_connect_error()); exit;
}
$requete = "select login,password from login";
$resultat = mysqli_query($connexion,$requete);
$ligne = mysqli_fetch_row($resultat);
if ($login == $ligne[0] && $passwd == $ligne[1])
{
    $_SESSION['vrai'] = "tous passe bien";
    header("location:admine.php");
}
else
{
    $_SESSION['faux'] = "ne passe pas bien";
    header("location:login_es.php");
}
?>
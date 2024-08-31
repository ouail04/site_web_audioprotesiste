<?php session_start(); ?>
<?php
include("home2.html"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN-NEURO AUDITION</title>
    <style>
        form[action="passwd.php"]{  width: 100%; height: 400px; display: flex; justify-content: center; align-items: center;font-size: 20px ;}
        table.login input { font-size: 40px ; margin-left: 30px; }
         td.button{ text-align: center ; }
         input#annuler,input#envoyer { font-size:30px;}
         td.erreur{ color :red ; font-size: 20px; text-align:center; display:none;}
         div.div12 { background-color:#D0D3D4; text-align:center; margin-top: -1cm;}
         div.div12 h1 { font-size: 50px;}
         div.div12 p { font-family : serif; font-size : 30px;}
         div.div77 { text-align: left;  position: fixed; top: 0; left: 0; }
    </style>
</head>
<body>
<div class="div12">
<header>
        <h1>Bienvenue sur le site de l'administration</h1>
        <p>Ce lien est réservé à l'administration.</p>
    </header>
    <form action="passwd.php" method="post" class="login">  
    
    <table class="login">
        <tr><th>LOGIN</th><td><input type="text" name="login"></td></tr>
        <tr><th>MOT DE PASSE</th><td><input type="password" name="passwd"></td></tr>
        <tr><td ></td><td class='erreur' id="ere">Mot de passe ou login incorect </td></tr>
        <tr><td colspan="2" class="button" ><input type="reset" value="Annuler" id='annuler'><input type="submit" value="Envoyer" id='envoyer'></td></tr>
    </table>
        <?php
        
        if(isset($_SESSION['faux']))
        {
            echo "<script> document.getElementById('ere').style.display='block'; </script> ";
        }
        $_SESSION = array();
        session_destroy();
        ?>
        
    
    </form>
</div>
    
    
</body>
</html>
<?php include('pie_de_page.html') ?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
   $connex = mysqli_connect('localhost', 'root', '', 'gestion_librairie');

   //Affichage d'un message en cas d'erreurs 
   if(!$connex) 
   { 
       echo "<script type=text/javascript>"; 
       echo "alert('Connexion impossible à la base')</script>"; 
   } 
   else 
   {
    $ISBN = $_POST["isbn"];
    $Titre_livre = $_POST["titre"];
    $Theme_livre = $_POST["theme"];
    $Nbr_pages_livre = $_POST["page"];
    $Format_livre = $_POST["format"];
    $Nom_auteur = "TEST";
    $Prenom_auteur = "TEST";
    $Editeur = "TEST";
    $Annee_edition = 2022;
    $Prix_vente = 50;
    $Langue_livre = "Français";


    $requete ="INSERT INTO livres (`ISBN`, `Titre_livre`, `Theme_livre`, `Nbr_pages_livre`, `Format_livre`, `Nom_auteur`, `Prenom_auteur`, `Editeur`, `Annee_edition`, `Prix_vente`, `Langue_livre`) VALUES('$ISBN','$Titre_livre','$Theme_livre','$Nbr_pages_livre','$Format_livre','$Nom_auteur','$Prenom_auteur','$Editeur','$Annee_edition','$Prix_vente','$Langue_livre')";

    $result = mysqli_query($connex,$requete);
    if(!$result){
        echo "<script type=text/javascript>"; 
        echo "alert('Problème, ajout impossible')</script>";
    }
    else{
        echo "<script type=text/javascript>"; 
        echo "alert('Livre ajouté');
        window.location=document.referrer;
        </script>";
    }

   }
   mysqli_close($connex);
   ?>
</body>
</html>
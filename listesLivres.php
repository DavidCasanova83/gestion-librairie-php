<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/942fcbebdd.js" crossorigin="anonymous"></script>
    <title>Ma librairie</title>
</head>
<body>
<header>
        <h1>
            <i class="fa-solid fa-book"></i>
            <a href="./index2.html">Ma Librairie</a>
        </h1>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              Livres
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="./listesLivres.php">Liste des livres</a></li>
              <li><a class="dropdown-item" href="./formLivre.html">Ajouter un livre</a></li>
            </ul>
          </div>
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              Fournisseurs
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="./listesFournisseurs.php">Liste de fournisseurs</a></li>
              <li><a class="dropdown-item" href="#">Ajouter un fournisseur</a></li>
            </ul>
          </div>
            <!-- <ul>
                <li class="categorie1"><h2>Livres</h2>
                    <ul>
                        <li><a href="./listesLivres.php">Listes des livres</a></li>
                        <li><a href="./formLivre.html">Ajouter un livre</a></li>
                    </ul>
                </li>
                <li class="categorie2"><h2>Fournisseurs</h2>
                    <ul>
                        <li><a href="./listesFournisseurs">Listes des fournisseurs</a></li>
                        <li><a href="#">Ajouter un fournisseur</a></li>
                    </ul>
                </li>
            </ul> -->
    </header>
    <main>
        <div class="container-global">
            <div class="liste" class="table-responsive-sm">
                <?php
                    try{
                        $db = new PDO('mysql:host=localhost;dbname=gestionlibrairie2','root','');
                        $db->query("SET NAMES'utf8'");
                        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                    }
                    catch(PDOException $e){
                        die("<p> Echec de connexion. Erreur[".$e->getCode()."] : ".$e->getMessage()."</p>");
                    }
                    //Affichage d'un message en cas d'erreurs 
                    if(!$db) 
                    { 
                        echo "<script type=text/javascript>"; 
                        echo "alert('Connexion impossible à la base')</script>"; 
                    } 
                    else 
                    {
                        $requete= $db->prepare('SELECT * FROM livres');
                        $requete->execute();
                            
                    
                        echo "<div class='table-responsive'>"; 
                        echo "<H1> Liste des Livres</H1>\n";
                        echo "<TABLE class='table table-dark'>\n";
                        echo "<thead class='table-dark'> <TH>ISBN</TH><TH>Titre Livre</TH><TH>Theme</TH><TH>Pages</TH><TH>Format</TH><TH>Nom Auteur</TH>";
                        echo "<TH>Prenom Auteur</TH><TH>Editeur</TH><TH>Année d édition</TH>";
                        echo "<TH>Prix de vente</TH><TH>Langue du livre</TH></thead>\n";
                        // Connexion Fetch assoc
                        /*
                        while($donnees = $requete->fetch (PDO::FETCH_ASSOC))
                            {
                                
                                echo "<TR><TD>".$donnees['ISBN']."</TD>";
                                echo "<TD>".$donnees['Titre_livre']."</TD>";
                                echo "<TD>".$donnees['Theme_livre']."</TD>";
                                echo "<TD>".$donnees['Nbr_pages_livre']."</TD>";
                                echo "<TD>".$donnees['Format_livre']."</TD>";
                                echo "<TD>".$donnees['Nom_auteur']."</TD>";
                                echo "<TD>".$donnees['Prenom_auteur']."</TD>";
                                echo "<TD>".$donnees['Editeur']."</TD>";
                                echo "<TD>".$donnees['Annee_edition']."</TD>";
                                echo "<TD>".$donnees['Prix_vente']."</TD>";
                                echo "<TD>".$donnees['Langue_livre']."</TD></TR>\n";
                                
                            
                            }

                        */


                            // Connexion avec Feth Obj
                            while($donnees = $requete->fetch (PDO::FETCH_OBJ))
                            {
                                
                                echo "<TR><TD>".$donnees->ISBN."</TD>";
                                echo "<TD>".$donnees->Titre_livre."</TD>";
                                echo "<TD>".$donnees->Theme_livre."</TD>";
                                echo "<TD>".$donnees->Nbr_pages_livre."</TD>";
                                echo "<TD>".$donnees->Format_livre."</TD>";
                                echo "<TD>".$donnees->Nom_auteur."</TD>";
                                echo "<TD>".$donnees->Prenom_auteur."</TD>";
                                echo "<TD>".$donnees->Editeur."</TD>";
                                echo "<TD>".$donnees->Annee_edition."</TD>";
                                echo "<TD>".$donnees->Prix_vente."</TD>";
                                echo "<TD>".$donnees->Langue_livre."</TD></TR>\n";
                                
                            
                            }
                            // Connexion avec Feth Num
                            while($donnees = $requete->fetch (PDO::FETCH_OBJ))
                            {
                                
                                echo "<TR><TD>".$donnees->ISBN."</TD>";
                                echo "<TD>".$donnees."</TD>";
                                echo "<TD>".$donnees."</TD>";
                                echo "<TD>".$donneesges_."</TD>";
                                echo "<TD>".$donnees_."</TD>";
                                echo "<TD>".$donneesteur."</TD>";
                                echo "<TD>".$donnees_auteur."</TD>";
                                echo "<TD>".$donneesr."</TD>";
                                echo "<TD>".$donneesedition."</TD>";
                                echo "<TD>".$donneesente."</TD>";
                                echo "<TD>".$donnees_."</TD></TR>\n";
                                
                            
                            }
                    }
                        
                        echo "</TABLE>\n";

                    echo "</div>";
                ?>
            </div>
        </div>
    </main>
    <footer>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
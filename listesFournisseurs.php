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
                    $connex = mysqli_connect('localhost', 'root', '', 'gestionlibrairie2');
                    //Affichage d'un message en cas d'erreurs 
                    if(!$connex) 
                    { 
                        echo "<script type=text/javascript>"; 
                        echo "alert('Connexion impossible à la base')</script>"; 
                    } 
                    else 
                    {
                        $requete="SELECT * FROM fournisseurs";
                        $result = mysqli_query($connex, $requete);
                        $nb = mysqli_num_rows($result);
                        echo '<h2 class="nb">' . $nb . ' Fournisseurs</h2>';

                    echo "<div class='table-responsive'>";
                    echo "<H1> Liste des Fournisseurs</H1>\n";
                    echo "<TABLE class='table table-dark'>\n";
                    echo "<TR> <TH>Code Fournisseur</TH><TH>Raison Sociale</TH><TH>Rue</TH><TH>Code Postal</TH><TH>Ville</TH><TH>Pays</TH><TH>Téléphone</TH><TH>URL Fournisseur</TH><TH>Email</TH>
                    <TH>Fax</TH></TR>\n";
                            while($donnees = mysqli_fetch_assoc($result))
                                {
                                    echo "<TR><TD>".$donnees['Code_fournisseur']."</TD>";
                                    echo "<TD>".$donnees['Raison_sociale']."</TD>";
                                    echo "<TD>".$donnees['Rue_fournisseur']."</TD>";
                                    echo "<TD>".$donnees['Code_postal']."</TD>";
                                    echo "<TD>".$donnees['Localite']."</TD>";
                                    echo "<TD>".$donnees['Pays']."</TD>";
                                    echo "<TD>".$donnees['Tel_fournisseur']."</TD>";
                                    echo "<TD>".$donnees['Url_fournisseur']."</TD>";
                                    echo "<TD>".$donnees['Email_fournisseur']."</TD>";
                                    echo "<TD>".$donnees['Fax_fournisseur']."</TD></TR>\n";
                                }
                                echo "</TABLE>\n";

                    }
                    echo "</div>";
                    mysqli_close($connex);

                    
                ?>
                </div>
            </div>
        </div>
    </main>
    <footer>
        
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
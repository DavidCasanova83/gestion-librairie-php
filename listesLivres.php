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
        <nav>
            <ul>
                <li class="categorie1"><h2>Livres</h2>
                    <ul>
                        <li><a href="#" class="active">Listes des livres</a></li>
                        <li><a href="./formLivre.html">Ajouter un livre</a></li>
                    </ul>
                </li>
                <li class="categorie2"><h2>Fournisseurs</h2>
                    <ul>
                        <li><a href="./listesFournisseurs">Listes des fournisseurs</a></li>
                        <li><a href="#">Ajouter un fournisseur</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="container-global">
            <div class="liste" class="table-responsive-sm">
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
                        $requete="SELECT * FROM livres";
                        $result = mysqli_query($connex, $requete);
                        $nb = mysqli_num_rows($result);
                        echo '<h2 class="nb">' . $nb . ' Livres disponible</h2>';
                    echo "<div class='table-responsive'>"; 
                    echo "<H1> Liste des Livres</H1>\n";
                    echo "<TABLE class='table table-dark'>\n";
                    echo "<thead class='table-dark'> <TH>ISBN</TH><TH>Titre Livre</TH><TH>Theme</TH><TH>Pages</TH><TH>Format</TH><TH>Nom Auteur</TH><TH>Prenom Auteur</TH><TH>Editeur</TH><TH>Année d'édition</TH>
                    <TH>Prix de vente</TH><TH>Langue du livre</TH></thead>\n";
                    while($donnees = mysqli_fetch_assoc($result))
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
                        echo "</TABLE>\n";

                    }
                    echo "</div>";
                    mysqli_close($connex);
                ?>
            </div>
        </div>
    </main>
    <footer>

    </footer>
</body>
</html>
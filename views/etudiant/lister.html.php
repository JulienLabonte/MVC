<?php
    require "../views/commun/entete.html.php";
?>
<!doctype html>
<html>
	<head>
		<title>Page Liste Etudiants</title>
        <link rel="stylesheet" href="css/listeStyle.css">
	</head>
	<body>
		<h1>Liste etudiants</h1>
        <table>
		<?php
            echo "<tr><TH>Nom</TH> <TH>Prenom</TH><TH>Code Permanent</TH><TH>NAS</TH><TH>Cours</TH>
                <TH>Modifier</TH> <TH><a>Supprimer</a></TH></tr>";
            foreach ($_SESSION["tab"] as $t){
                echo "<tr>";
                foreach (array_slice($t,1) as $ele){
                    echo "<td>$ele</td>";
                }
            echo "<td><a href='?controller=etudiant&action=modifier&id=".$t['id']."'>Modifier</a></td>";
            echo "<td><a href='?controller=etudiant&action=supprimer&id=".$t['id']."'>Supprimer</a></td>";
            echo "</tr>";
            }
		?>
        </table>    
        <p><a href="?controller=etudiant&action=inserer">Insérer</a> <a href="?">Retour à l'acceuil</a></p>
	</body>
<html>
<?php
    require "../views/commun/pied.html.php";
?>

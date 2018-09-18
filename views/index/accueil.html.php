<?php
    require "../views/commun/entete.html.php";
?>
<!doctype html>
<html>
	<head>
		<title>Page Accueil</title>
        <link rel="stylesheet" href="css/acceuilStyle.css">
	</head>
	<body>
		<div class="flex-container">
            <div id="menu">
                <p><a href="?controller=etudiant&action=lister">Etudiant</a></p>
                <p><a href="?controller=enseignant&action=lister">Enseignant</a></p>
            </div>
            <div id="autreDiv">
                <p>MVC</p>
            </div>
        </div>
	</body>
<html>
<?php
    require "../views/commun/pied.html.php";
?>
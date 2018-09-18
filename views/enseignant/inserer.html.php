<?php
    require "../views/commun/entete.html.php";
?>
<!doctype html>
<html>
	<head>
		<title>Pqge Liste Etudiants</title>
		<script type="text/javascript" src="js/ajax.js"></script>
	
	</head>
	<body>
		<h1>Insérer un enseignant</h1>

		<form method="post" action=""> 
			<div> 
				 <p> Nom<input type="text" name="nom" id="nom"/> </p> 
				<p> Prenom<input type="text" name="prenom" id="prenom"/> </p> 
				<p> NAS<input type="text" name="nas"/> </p> 
				<p> Cours<input type="text" name="cours"/> </p> 				
				
				

				  <p> <input type="submit" name="envoyer" value="envoyer"/> 
			
			</div>
		</form>
         <p><a href="?controller=enseignant&action=lister">Retour à la liste</a> <a href="?">Retour à l'acceuil</a></p>

	</body>
<html>
<?php
    require "../views/commun/pied.html.php";
?>
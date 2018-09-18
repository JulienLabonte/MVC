<?php
    require "../views/commun/entete.html.php";
?>
<!doctype html>
<html>
	<head>
		<title>Page modification Etudiants</title>
	
	</head>
	<body>
		<h1>Modifier un étudiant</h1>

		<form method="post" action=""> 
			<div> 
				 <p> Nom<input type="text" name="nom" value="<?php echo $tab["nom"] ?>"/></p> 
				<p> Prenom<input type="text" name="prenom" value="<?php echo $tab["prenom"] ?>"/> </p> 
				<p> NAS<input type="text" name="nas" value="<?php echo $tab["nas"] ?>"/> </p> 
				<p> code Permanent<input type="text" name="codePermanent" id="codePermanent" value="<?php echo $tab["codePermanent"] ?>"/> 
				<span id="resultat"></span></p>
				<p> Cours<input type="text" name="cours" value="<?php echo $tab["cours"] ?>"/> </p> 				
				
				

				  <p> <input type="submit" name="envoyer" value="envoyer"/> 
			
			</div>
		</form>
         <p><a href="?controller=etudiant&action=lister">Retour à la liste</a> <a href="?">Retour à l'acceuil</a></p>

	</body>
<html>
<?php
    require "../views/commun/pied.html.php";
?>
<!-- création d'une lien de decoonnextion appellent "deconection.php" -->

<ul>
	<?php
		  $id = $_SESSION['idVisiteur'];
	      echo "bonjour $id <a href='Deconnexion.php' >Deconnexion</a>";

	?>
</ul>

<div class ="erreur">
	<ul>
		<?php 
		//pourchaque element du request['erreurs'] on l'afiche dans une liste html
			foreach($_REQUEST['erreurs'] as $erreur)
			{
	  	    	echo "<li>$erreur</li>";
			}
		?>
	</ul>
</div>

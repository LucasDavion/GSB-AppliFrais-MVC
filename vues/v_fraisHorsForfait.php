<?php
//On initialisation le montant
$montant =0;
?>
	<table class="listeLegere">
		<caption>Descriptif des éléments hors forfait
		</caption>
		<tr>
			<th class="date">Date</th>
			<th class="libelle">Libellé</th>  
			<th class="montant">Montant</th>  
			<th class="action">&nbsp;</th>              
		</tr>
		  
		<?php 
		//On parcourt la liste lesFraisHorsForfait
		foreach( $lesFraisHorsForfait as $unFraisHorsForfait) 
		{
			//On récupère libelle
			$libelle = $unFraisHorsForfait['idfraishorsforfait'];
			//On récupère date
			$date = $unFraisHorsForfait['date'];
			//On récupère montant
			$montant=$unFraisHorsForfait['montant'];
			//On récupère id
			$id = $unFraisHorsForfait['id'];
		?>		
			<tr>
				<!-- On affiche la date -->
				<td> <?php echo $date ?></td>
				<!-- On affiche le libelle -->
				<td><?php echo $libelle ?></td>
				<!-- On affiche le montant -->
				<td><?php echo $montant ?></td>
				<!-- Suppression du frais -->
				<td><a href="index.php?uc=gererValidant&action=supprimerFHF&idFrais=<?php echo $id ?>" 
				onclick="return confirm('Voulez-vous vraiment supprimer ce frais?');">Supprimer ce frais</a></td>
			 </tr>
		<?php		 
		  
		}
		?>	                                           
	</table>
</div>
  


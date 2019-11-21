
			<div>
		<table class="listeLegere">
		<!-- On affiche le nombre de justifiactifs -->
		<caption>Descriptif des frais</caption>
		<tr>
			
			<th class="date">Mois</th>
			<th class="libelle">Nombre de Justificatifs</th>
			<th class='montant'>Montant Validé</th>     
			<th class='montant'>Date de Modification</th>             
		</tr>
		<?php
		//On parcourt la liste lesFraisHorsForfait    
		
		foreach ($lesEtatsFicheFrais as $unEtatFicheFrais) 
		{
			
			$numMois = $unEtatFicheFrais['numMois'];
			$numAnnee = $unEtatFicheFrais['numAnnee'];
			
			$nbJustificatifs = $unEtatFicheFrais['nbJustificatifs'];
			$montantValide = $unEtatFicheFrais['montantValide'];
			$dateModif = $unEtatFicheFrais['dateModif'];

			

			?>
			<tr>
				<!-- On affiche la date -->
				<td><?php echo $numMois . " " . $numAnnee ?></td>
				<!-- On affiche le libelle -->
				<td><?php echo $nbJustificatifs ?></td>
				<!-- On affiche le montant -->
				<td><?php echo $montantValide ?> €</td>
				<td><?php echo $dateModif ?></td>
			</tr>
		<?php 
		}
		?>
	</table>
		</div>
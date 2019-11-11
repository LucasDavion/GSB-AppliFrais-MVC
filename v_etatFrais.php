<!-- On affiche le mois et l'année -->
<h3>Fiche de frais du mois <?php echo $numMois."-".$numAnnee?> : </h3>
<?php
//On initialisation le montant
$montant = 0;
?>
<div class="encadre">
	<p>
		<!-- On affiche la date de la dernière modification et du montant qui a été validé -->
		Etat : Dernière modif : <?php echo $dateModif?> <br> Montant validé : <?php echo $montantValide?>
			  				 
	</p>
	<table class="listeLegere">
		<caption>Eléments forfaitisés </caption>
		<tr>
			<?php
			//On parcourt la liste lesFraisForfait
			foreach ( $lesFraisForfait as $unFraisForfait ) {
				//On récupère le libelle
				$libelle = $unFraisForfait['libelle'];
				?>
				<!-- On affiche le libelle -->
				<th> <?php echo $libelle?></th>
			 <?php
			}
			?>
		</tr>
		<tr>
			<?php
			//On parcourt la liste lesFraisForfait
			foreach ( $lesFraisForfait as $unFraisForfait ) {
				//On récupère la quantite
				$quantite = $unFraisForfait['quantite'];
				?>
				<!-- On affiche la quantite -->
				<td class="qteForfait"><?php echo $quantite?> </td>
			 <?php
			}
			?>
		</tr>
	</table>
	<table class="listeLegere">
		<!-- On affiche le nombre de justifiactifs -->
		<caption>Descriptif des éléments hors forfait -<?php echo $nbJustificatifs ?> justificatifs reçus -
		</caption>
		<tr>
			<th class="date">Date</th>
			<th class="libelle">Libellé</th>
			<th class='montant'>Montant</th>                
		</tr>
		<?php
		//On parcourt la liste lesFraisHorsForfait     
		foreach ( $lesFraisHorsForfait as $unFraisHorsForfait ) 
		{
			//On récupère la date
			$date = $unFraisHorsForfait['date'];
			//On récupère lae libelle
			$libelle = $unFraisHorsForfait['libelle'];
			?>
			<tr>
				<!-- On affiche la date -->
				<td><?php echo $date ?></td>
				<!-- On affiche le libelle -->
				<td><?php echo $libelle ?></td>
				<!-- On affiche le montant -->
				<td><?php echo $montant ?></td>
			</tr>
		<?php 
		}
		?>
	</table>
</div>
 














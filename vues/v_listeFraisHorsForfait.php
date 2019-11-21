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

			$supp = $unFraisHorsForfait['supp']
		?>		
			<tr>
				<!-- On affiche la date -->
				<td> <?php echo $date ?></td>
				<!-- On affiche le libelle -->
				<td><?php echo $libelle ?></td>
				<!-- On affiche le montant -->
				<td><?php echo $montant ?></td>
				<!-- Suppression du frais -->
				<?php if($supp=='N'){?>
				<td><a href="index.php?uc=gererFrais&action=supprimerFrais&idFrais=<?php echo $id ?>" 
				onclick="return confirm('Voulez-vous vraiment supprimer ce frais?');">Supprimer ce frais</a></td>
				<?php
				}else{
					?>
					<td><a>Ce frais à été supprimer</a></td>
					<?php
				}
				?>
			 </tr>
		<?php		 
		  
		}
		?>	                                           
	</table>
	<form action="index.php?uc=gererFrais&action=validerCreationFrais" method="post">

		<div class="corpsForm">
			<fieldset>
				<legend>Nouvel élément hors forfait</legend>
				<p>
				  	<!-- On demande à l'utilisateur de saisir la date -->
				  <label for="txtDateHF">Date (jj/mm/aaaa) : </label>
				  <input type="text" id="txtDateHF" name="dateFrais" size="10" maxlength="10" value=""  />
				</p>
				<p>
					<!-- On demande à l'utilisateur de saisir le libelle -->
				  <label for="lstLibelleHF">Libellé : </label>
				  <select id="lstLibelleHF" name="lstLibelle">
				  <?php
				//On parcourt la liste lesTypesFraisHorsForfait
				foreach ($lesTypesFraisHorsForfait as $unFraisH)
				{
					//On récupère idfrais
					$idFrais = $unFraisH['idfraisH'];
					//On récupère libelle
					$libellefrais = $unFraisH['libellefraisH'];
					?>

					<option value=<?php echo $idFrais ?>><?php echo $libellefrais ?></option>
						<?php
						}
						?>
				  </select>
				</p>
				<p>
					<!-- On demande à l'utilisateur de saisir le montant -->
				  <label for="txtMontantHF">Montant : </label>
				  <input type="text" id="txtMontantHF" name="montant" size="10" maxlength="10" value="" />
				</p>
			</fieldset>
		</div>
		<div class="piedForm">
			<p>
				<!-- Bouton ajouter -->
				<input id="ajouter" type="submit" value="Ajouter" size="20" />
				<!-- Bouton effacer -->
				<input id="effacer" type="reset" value="Effacer" size="20" />
			</p> 
		</div>
			
	</form>
</div>
  


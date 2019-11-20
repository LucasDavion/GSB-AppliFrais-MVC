 <div id="contenu">
	<h2>Consultation de l'etat des frais hors forfait.</h2>
	<h3>Mois à sélectionner : </h3>
	<form action="index.php?uc=etatFHFRb&action=consultationEtatFHFRb" method="post">
		<div class="corpsForm">
			<p>
				<label for="lstMois" accesskey="n">Mois : </label>
				<!-- Liste déroulante lstMois -->
				<select id="lstMois" name="lstMois">
					<?php
					//On parcourt la liste lesMois
					foreach ($lesMois as $unMois)
					{
						//On récupère mois
						$mois = $unMois['mois'];
						//On récupère numAnnee
						$numAnnee =  $unMois['numAnnee'];
						//On récupère numMois
						$numMois =  $unMois['numMois'];
						//Si le mois est = au moi selectionner
						if($mois == $moisASelectionner){
						?>
						<!-- On affiche le mois/annee -->
						<option selected value="<?php echo $mois ?>"><?php echo  $numMois."/".$numAnnee ?> </option>
						<?php 
						}
						else{ ?>
							<!-- On affiche le mois/annee -->
						<option value="<?php echo $mois ?>"><?php echo  $numMois."/".$numAnnee ?> </option>
						<?php 
						}
					
					}
				   ?>    	
				</select>
				<br>

				<label for="lstLibelleHF" accesskey="n">Libelle : </label>
				<!-- Liste déroulante lstLibelleHF -->
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
		</div>
		<div class="piedForm">
			<p>
				<!-- Bouton valider -->
				<input id="ok" type="submit" value="Valider" size="20" />
				<!-- Bouton effacer -->
				<input id="annuler" type="reset" value="Effacer" size="20" />
			</p> 
		</div>
	</form>
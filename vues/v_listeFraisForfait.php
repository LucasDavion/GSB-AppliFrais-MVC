<div id="contenu">
	<!-- On affiche le mois et l'année -->
	<h2>Renseigner ma fiche de frais du mois <?php echo $numMois."-".$numAnnee ?></h2>
         
	<form method="POST"  action="index.php?uc=gererFrais&action=validerMajFraisForfait">
		<div class="corpsForm">
			<fieldset>
				<legend>Eléments forfaitisés
				</legend>
				<?php
				//On parcourt la liste lesFraisForfait
				foreach ($lesFraisForfait as $unFrais)
				{
					//On récupère idfrais
					$idFrais = $unFrais['idfrais'];
					//On récupère libelle
					$libelle = $unFrais['libelle'];
					//On récupère quantite
					$quantite = $unFrais['quantite'];
					?>
					<p>
						<!-- On affiche le libelle -->
						<label for="idFrais"><?php echo $libelle ?></label>
						<!-- On affiche la quantite -->
						<input type="text" id="idFrais" name="lesFrais[<?php echo $idFrais?>]" size="10" maxlength="5" value="<?php echo $quantite?>" >
					</p>

				<?php
				}
				?>
			</fieldset>
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
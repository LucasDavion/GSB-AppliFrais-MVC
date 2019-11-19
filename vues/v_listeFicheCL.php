<div id="contenu">
    <form method="POST"  action="index.php?uc=gererValidant&action=selectionnerFicheFrais">
    <select>
    </select name="lstFicheFrais">
        <?php			 
			foreach ($lesFichesFraisCL as $uneFiche)
			{
				
                $idFicheFrais =$uneFiche['idVisiteur']." ".$uneFiche['mois'];
				
                $nomVisiteur =$uneFiche['nom'];

                $prenomVisiteur =$uneFiche['prenom'];
				?>

				<option value=<?php echo $idFicheFrais ?>><?php echo $nomVisiteur." ".$prenomVisiteur ?></option>
				<?php
			}
		?>
	</select>
    </form>
	<form method="POST"  action="index.php?uc=gererValidant&action=validerMajFraisForfait">
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
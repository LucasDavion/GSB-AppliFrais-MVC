<form action="index.php?uc=etatFFRb&action=consultationMontantFFRb" method="post">

		<div class="corpsForm">
			<fieldset>
				<legend>Voir le montant total des frais forfaitisés</legend>
				<p>
				  	<!-- On demande à l'utilisateur de saisir la date -->
            <label for="lblDate">Date :</label>
            <select id="lstDate" name="lstDate">
              <?php
    				//On parcourt la liste lesDates
    				foreach ($lesMois as $uneDate)
    				{
    					//On récupère le mois
    					$idDate = $uneDate['mois'];
    					//On récupère libelle
    					$libelleDate = $uneDate['numMois'] . " " . $uneDate['numAnnee'];
    					?>
    					<option value=<?php echo $idDate ?>><?php echo $libelleDate ?></option>
    						<?php
    						}
    						?>
            </select>
				</p>
				<p>
					<!-- On demande à l'utilisateur de saisir le libelle -->
				  <label for="lstGrade">Grade : </label>
				  <select id="lstGrade" name="lstGrade">
				  <?php
				//On parcourt la liste lesGrades
				foreach ($lesGrades as $unGrade)
				{
					//On récupère idGrade
					$idGrade = $unGrade['id'];
					//On récupère libelle
					$libelleGrade = $unGrade['libelle'];
					?>

					<option value=<?php echo $idGrade ?>><?php echo $libelleGrade ?></option>
						<?php
						}
						?>
				  </select>
				</p>
			</fieldset>
		</div>
		<div class="piedForm">
			<p>
				<!-- Bouton ajouter -->
				<input id="selectoinner" type="submit" value="Selectionner" size="20" />
			</p>
		</div>

	</form>
  <div>
    <p>Le montant des frais forfaitaire est de <?php echo "$totalMontantFF"; ?> €</p>
  </div>

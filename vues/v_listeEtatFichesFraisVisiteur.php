<div id="contenu">
	<h2>Mes fiches de frais</h2>
	<h3>Etat à sélectionner : </h3>
	<form action="index.php?uc=consultEtatFraisVisiteur&action=voirEtatFichesFrais" method="post">
		<div class="corpsForm">
			<p>
				<label for="lstEtat" accesskey="n">Etat : </label>
				<!-- Liste déroulante lstMois -->
				<select id="lstEtat" name="lstEtat">
                    <?php 
                    
					//On parcourt la liste lesMois
					foreach ($lesEtats as $unEtat)
					{
						//On récupère mois
						$etat = $unEtat['id'];
						//On récupère numAnnee
						$libelle =  $unEtat['libelle'];
						//On récupère numMois
						
						//Si le mois est = au moi selectionner
						if($etat == $etatASelectionner){
						?>
						<!-- On affiche le mois/annee -->
						<option selected value="<?php echo $etat ?>"><?php echo  $libelle ?> </option>
						<?php 
						}
						else{ ?>
							<!-- On affiche le mois/annee -->
						<option value="<?php echo $etat ?>"><?php echo  $libelle ?> </option>
						<?php 
						}
					
					}
				   ?>    	
				</select>
			</p>
		</div>
		
		<div class="piedForm">
			<p>
				<!-- Bouton valider -->
				<input id="ok" type="submit" value="Valider" size="20" />
				
			</p> 
		</div>
	</form>
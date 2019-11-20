<div id="contenu">
    <form method="POST"  action="index.php?uc=gererValidant&action=affichageFF_FHF">
    <select name="lstFicheFrais" onchange="this.form.submit();">
      <option value="0">Aucune fiche de frais</option>
        <?php
			foreach ($lesFichesFraisCL as $uneFiche)
			{

                $idFicheFrais =$uneFiche['idVisiteur']."-".$uneFiche['mois'];

                $nomVisiteur =$uneFiche['nom'];

                $prenomVisiteur =$uneFiche['prenom'];
				?>
				<option value="<?php echo $idFicheFrais ?>"><?php echo $nomVisiteur." ".$prenomVisiteur ?></option>
				<?php
			}
		?>
	</select>
    </form>

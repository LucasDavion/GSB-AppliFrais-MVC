<form method="POST"  action="index.php?uc=gererValidant&action=validerFF">
<div class="corpsForm">
  <fieldset>
    <legend>Eléments forfaitisés
    </legend>
    <h2>Fiche de frais de <?php echo $idFicheFrais[0]." ".$idFicheFrais[1] ?></h2>
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

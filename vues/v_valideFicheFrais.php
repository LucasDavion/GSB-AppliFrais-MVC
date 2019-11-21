
    <form method="POST"  action="index.php?uc=gererValidant&action=validerFicheFrais">
    <input id="ok" type="submit" value="Valider la fiche de frais" size="20" />
    <input name="idVisiteurValid" type="hidden" value="<?php echo $idVisiteur?>">
    <input name="moisValid" type="hidden" value="<?php echo $mois?>">
    <input name="lstFicheFrais" type="hidden" value="<?php echo $lstFicheFrais?>">
    </form>
    </div>

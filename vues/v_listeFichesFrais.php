<div id="contenu">
    <!-- On affiche le mois et l'année -->
    <h2>Liste des fiches de frais en etat CR</h2>

    <form method="POST" action="index.php?uc=consultFrais&action=valideMajFraisEtat">
        <div class="corpsForm">
            <fieldset>
                <legend>Eléments forfaitisés
                </legend>
                <table class="table">
                    <thead>
                        <tr>

                            <th scope="col">IdVisiteur</th>
                            <th scope="col">Nombre Justificatif</th>
                            <th scope="col">MontantValide</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //On parcourt la liste lesFraisForfait
                        foreach ($lesFraisForfait as $unFrais) {
                            //On récupère idfrais
                            $idVisiteur = $unFrais['idVisiteur'];
                            //On récupère libelle
                            $nbJustificatifs = $unFrais['nbJustificatifs'];
                            //On récupère quantite
                            $montantValide = $unFrais['montantValide'];
                            ?>

                            <tr>

                                <td><?php echo $idVisiteur ?></td>
                                <td><?php echo $nbJustificatifs ?></td>
                                <td><?php echo $montantValide ?></td>

                            </tr>

                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </fieldset>
        </div>
        <div class="piedForm">
            
                    <!-- Bouton valider -->
                    <input id="ok" type="submit" value="Valider" size="20" />
                
        </div>
    </form>
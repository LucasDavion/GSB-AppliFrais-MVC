<div id="contenu">
    <!-- On affiche le mois et l'année -->
    <h2>Liste des fiches de frais en etat CR</h2>

    <form method="POST" action="index.php?uc=consultFrais&action=valideMajFraisEtat">
        <div class="corpsForm">
            <fieldset>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nom Prénom</th>
                            <th scope="col">Nombre Justificatif</th>
                            <th scope="col">Montant validé</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //On parcourt la liste lesFraisForfait
                        foreach ($lesFraisForfait as $unFrais) {
                            $idVisiteur = $unFrais['idVisiteur'];
                            $prenom = $unFrais['nom'];
                            $nom = $unFrais['prenom'];
                            $nbJustificatifs = $unFrais['nbJustificatifs'];
                            $montantValide = $unFrais['montantValide'];
                            ?>
                            <tr>
                                <td><?php echo $nom . " " . $prenom ?></td>
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
            <input id="ok" type="submit" value="Cloturer toutes les fiches de frais" size="20" />
        </div>
    </form>
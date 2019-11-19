<?php
//On inclue v_sommaire.php
include("vues/v_sommaire.php");
//On récupère l'action selectionner
$action = $_REQUEST['action'];
//On récupère l'id du visiteur
$idVisiteur = $_SESSION['idVisiteur'];

$action = $_REQUEST['action'];

switch ($action) {
    case 'affListNonCL':
    $lesFraisForfait = $pdo->getLesFichesFraisMoisPrecedentNonCloturer();
    include("vues/v_listeFichesFrais.php");
        break;

    case 'valideMajFraisEtat':
    try {
        $LaDate = getDateDernierJourMoisPrecedent();
        $pdo->majEtatFicheFraisCL($LaDate);
        $lesFraisForfait = $pdo->getLesFichesFraisMoisPrecedentNonCloturer();
        include("vues/v_listeFichesFrais.php");
    } catch (\Throwable $th) {
        ajouterErreur("Erreur lors de la modification : $th");
			include("vues/v_erreurs.php");
    }	
    break;

    case 'CLFicheNonCL':
    # code...
    break;
    
    default:
        # code...
        break;
}
?>

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
    if ($lesFraisForfait = $pdo->getLesFicheFraisCR()) {
        include("vues/v_listeFichesFrais.php");
    }else {
        $message = "Aucune fiche à cloturer";
        include("vues/v_etatFichesFrais.php");
       
    }
        break;

    case 'valideMajFraisEtat':
    try {
        $LaDate = getDateDernierJourMoisPrecedent();
        $LaDateAnglais = dateFrancaisVersAnglais($LaDate);
        $pdo->majFicheFraisCL($LaDateAnglais);
        if ($lesFraisForfait = $pdo->getLesFicheFraisCR()) {
            include("vues/v_listeFichesFrais.php");
        }else {
            $message = "Toutes les fiches de frais ont été clorturées";
            include("vues/v_etatFichesFrais.php");
            
        }

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

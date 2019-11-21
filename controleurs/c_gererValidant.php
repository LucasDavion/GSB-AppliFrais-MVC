<?php
// inclusion de la vue du sommaire
include("vues/v_sommaire.php");
// intitalisation des variable
$idVisiteur = $_SESSION['idVisiteur'];
$date = date("Y-m-d");
$action = $_REQUEST['action'];

// selection des diferante action a realiser en fonction de se qui se trouve dans $action et par exention dans $_request[action]
switch($action){
	// si action contrien saisireFrais alors, si c'est le premier frais du mois on cree une nouvelle lignes de frais
	case 'selectionnerFicheFrais':{
		$lesFichesFraisCL = $pdo->getLesInfosFicheCL();
		break;
	}
	case 'affichageFF_FHF':{
		$idFicheFrais=explode("-", $_REQUEST['lstFicheFrais']);

		$idVisiteur=$idFicheFrais[0];
  	$mois=$idFicheFrais[1];
		$lesFraisForfait= $pdo->getLesFraisForfaitValidant($idFicheFrais[0], $idFicheFrais[1]);
		$lesFraisHorsForfait= $pdo->getLesFraisHorsForfaitValidant($idFicheFrais[0], $idFicheFrais[1]);
		$lstFicheFrais=$_REQUEST['lstFicheFrais'];
		break;
	}
	// si action contien validerCrationFrais on intitalise des variable avec le $_get si il y a des erreur on appelle v_erreurs.php
	case 'validerFF':{
		$idVisiteurValid=$_REQUEST['idVisiteurValid'];
		$moisValid=$_REQUEST['moisValid'];
		$lesFrais = $_REQUEST['lesFrais'];
		$pdo->majFraisForfaitValidant($idVisiteurValid,$moisValid,$lesFrais,$date,$idVisiteur);
		echo "Les modifications ont été prises en compte";

	  break;
	}
	case 'supprimerFHF':{
		$idFrais = $_REQUEST['idFrais'];
			$pdo->supprimerFraisHorsForfaitValidant($idFrais);

			echo "Le frais hors forfait a été supprimé";
		break;
    }
    case 'validerFicheFrais':{
			$idVisiteurValid=$_REQUEST['idVisiteurValid'];
			$moisValid=$_REQUEST['moisValid'];
			$lstFicheFrais=$_REQUEST['lstFicheFrais'];
			$pdo->validerFicheFrais($idVisiteur,$idVisiteurValid,$moisValid);
			echo "La fiche de frais a été validée";
		break;
    }
}

$lesFichesFraisCL = $pdo->getLesInfosFicheCL();
include("vues/v_listeFicheCL.php");
if($action=='affichageFF_FHF'){
include("vues/v_fraisForfait.php");
include("vues/v_fraisHorsForfait.php");
include("vues/v_valideFicheFrais.php");
}
?>

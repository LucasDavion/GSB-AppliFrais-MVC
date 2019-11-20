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
		$lesFraisForfait= $pdo->getLesFraisForfaitValidant($idFicheFrais[0], $idFicheFrais[1]);
		$lesFraisHorsForfait= $pdo->getLesFraisHorsForfait($idFicheFrais[0], $idFicheFrais[1]);
		$lstFicheFrais=$_POST['lstFicheFrais'];
		break;
	}
	// si action contien validerCrationFrais on intitalise des variable avec le $_get si il y a des erreur on appelle v_erreurs.php
	case 'validerFF':{
		$idVisiteurValid=$_REQUEST['idVisiteurValid'];
		$moisValid=$_REQUEST['moisValid'];
		$lesFrais = $_REQUEST['lesFrais'];
		$pdo->majFraisForfaitValidant($idVisiteurValid,$moisValid,$lesFrais,$date,$idVisiteur);
	  break;
	}
	case 'supprimerFHF':{
		$idFrais = $_REQUEST['idFrais'];
			$pdo->supprimerFraisHorsForfaitValidant($idFrais);
		break;
    }
    case 'validerFicheFrais':{
			$pdo->validerFicheFrais($idVisiteur);
		break;
    }
}

$lesFichesFraisCL = $pdo->getLesInfosFicheCL();
include("vues/v_listeFicheCL.php");
if($action=='affichageFF_FHF'){
include("vues/v_fraisForfait.php");
include("vues/v_fraisHorsForfait.php");
}
?>

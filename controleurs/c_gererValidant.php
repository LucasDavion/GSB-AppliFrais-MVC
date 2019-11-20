<?php
// inclusion de la vue du sommaire
include("vues/v_sommaire.php");
// intitalisation des variable
$idVisiteur = $_SESSION['idVisiteur'];

$action = $_REQUEST['action'];

// selection des diferante action a realiser en fonction de se qui se trouve dans $action et par exention dans $_request[action]
switch($action){
	// si action contrien saisireFrais alors, si c'est le premier frais du mois on cree une nouvelle lignes de frais
	case 'selectionnerFicheFrais':{
		$lesFichesFraisCL = $pdo->getLesInfosFicheCL();
		break;
	}
	case 'affichageFF+FHF':{
		$idFicheFrais=explode(" ", $_REQUEST['lstFicheFrais']);
		$lesFraisForfait= $pdo->getLesFraisForfait($idFicheFrais[0], $idFicheFrais[1]);
		$lesFraisHorsForfait= $pdo->getLesFraisHorsForfait($idFicheFrais[0], $idFicheFrais[1]);
		break;
	}
	// si action contien validerCrationFrais on intitalise des variable avec le $_get si il y a des erreur on appelle v_erreurs.php
	case 'validerFF':{
		$idFicheFrais=explode(" ", $_REQUEST['lstFicheFrais']);
		$lesFrais = $_REQUEST['lesFrais'];
		$dateModif= date('Y-m-d');
		if(lesQteFraisValides($lesFrais)){
	  	 	$pdo->majFraisForfaitValif($idFicheFrais[0],$idFicheFrais[1],$lesFrais,$dateModif,$idVisiteur);
		}
		else{
			ajouterErreur("Les valeurs des frais doivent être numériques");
			include("vues/v_erreurs.php");
		}
	  break;
	}
	case 'supprimerFHF':{
		$idFrais = $_REQUEST['idFrais'];
	    $pdo->supprimerFraisHorsForfaitValidant($idFrais);
		break;
    }
    case 'validerFicheFrais':{

		break;
    }

}
if(isset($_REQUEST['lstFicheFrais'])==true){
	$lstFicheFrais=$_REQUEST['lstFicheFrais'];
}else{
	$lstFicheFrais=0;
}
$lesFichesFraisCL = $pdo->getLesInfosFicheCL();
include("vues/v_listeFicheCL.php");
if($action!='selectionnerFicheFrais'){
include("vues/v_fraisForfait.php");
include("vues/v_fraisHorsForfait.php");
}
?>

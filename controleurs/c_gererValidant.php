<?php
// inclusion de la vue du sommaire
include("vues/v_sommaire.php");
// intitalisation des variable
$idVisiteur = $_SESSION['idVisiteur'];

$action = $_REQUEST['action'];

$idFicheFrais=explode(" ", $_REQUEST['lstFicheFrais']);
// selection des diferante action a realiser en fonction de se qui se trouve dans $action et par exention dans $_request[action]
switch($action){
	// si action contrien saisireFrais alors, si c'est le premier frais du mois on cree une nouvelle lignes de frais
	case 'selectionnerFicheFrais':{
		$lesFraisForfait= $pdo->getLesFraisForfait($idFicheFrais[0], $idFicheFrais[1]);
		$lesFraisHorsForfait= $pdo->getLesFraisHorsForfait($idFicheFrais[0], $idFicheFrais[1]);
		break;
	}
	// si action contien validerCrationFrais on intitalise des variable avec le $_get si il y a des erreur on appelle v_erreurs.php
	case 'validerFF':{
		$lesFrais = $_REQUEST['lesFrais'];
		$dateModif= date('Y-m-d');
		if(lesQteFraisValides($lesFrais)){
	  	 	$pdo->majFraisForfait($idFicheFrais[0],$idFicheFrais[1],$lesFrais,$dateModif,$idVisiteur);
		}
		else{
			ajouterErreur("Les valeurs des frais doivent être numériques");
			include("vues/v_erreurs.php");
		}
	  break;
	}
	case 'supprimerFHF':{
		$idFrais = $_REQUEST['idFrais'];
	    $pdo->supprimerFraisHorsForfaitValidant($idFrais)
		break;
    }
    case 'validerFicheFrais':{
		
		break;
    }
    
}

// on recuperre les frais et on inclut les vue des frais
$$lesFichesFraisCL = $pdo->getLesInfosFicheCL();
include("vues/v_listeFicheCL.php");
include("vues/v_fraisHorsForfait.php");

?>
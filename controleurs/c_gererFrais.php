<?php
// inclusion de la vue du sommaire
include("vues/v_sommaire.php");
// intitalisation des variable
$idVisiteur = $_SESSION['idVisiteur'];
$idGrade = $_SESSION['idGradeVisiteur'];
$mois = getMois(date("d/m/Y"));
$numAnnee =substr( $mois,0,4);
$numMois =substr( $mois,4,2);
$action = $_REQUEST['action'];

var_dump($idGrade);

// selection des diferante action a realiser en fonction de se qui se trouve dans $action et par exention dans $_request[action]
switch($action){
	// si action contrien saisireFrais alors, si c'est le premier frais du mois on cree une nouvelle lignes de frais
	case 'saisirFrais':{
			$pdo->creeNouvellesLignesFrais($idVisiteur,$mois,$idGrade);
		}
		break;
	// si action contien validerMajFraisForfait on ajoute a $lesFrais le contenue de $_request['lesFrais'] et si lesQteFraisValides contien qqch on créer u obj pdo avec majFraisForfait
	case 'validerMajFraisForfait':{
		$lesFrais = $_REQUEST['lesFrais'];
		if(lesQteFraisValides($lesFrais)){
	  	 	$pdo->majFraisForfait($idVisiteur,$mois,$lesFrais);
		}
		else{
			ajouterErreur("Les valeurs des frais doivent être numériques");
			include("vues/v_erreurs.php");
		}
	  break;
	}
	// si action contien validerCrationFrais on intitalise des variable avec le $_get si il y a des erreur on appelle v_erreurs.php
	case 'validerCreationFrais':{
		var_dump($idGrade);
		$dateFrais = $_REQUEST['dateFrais'];
		$lstLibelle = $_REQUEST['lstLibelle'];
		$montant = $_REQUEST['montant'];
		valideInfosFrais($dateFrais,$lstLibelle,$montant);
		if (nbErreurs() != 0){
			include("vues/v_erreurs.php");
		}
		else{
			$pdo->creeNouveauFraisHorsForfait($idVisiteur,$mois,$lstLibelle,$dateFrais,$montant);
		}
		break;
	}
	case 'supprimerFrais':{
		$idFrais = $_REQUEST['idFrais'];
	    $pdo->supprimerFraisHorsForfait($idFrais);
		break;
	}
}

// on recuperre les frais et on inclut les vue des frais
$lesFraisHorsForfait = $pdo->getLesFraisHorsForfait($idVisiteur,$mois);
$lesFraisForfait= $pdo->getLesFraisForfait($idVisiteur,$mois);
//$lesTypesFraisHorsForfait = $pdo->getLesTypesFraisHorsForfait();
include("vues/v_listeFraisForfait.php");
include("vues/v_listeFraisHorsForfait.php");

?>

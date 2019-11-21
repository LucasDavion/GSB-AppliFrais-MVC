<?php 

	include("vues/v_Sommaire_EmpCompt.php");

	// intitalisation des variable
$idVisiteur = $_SESSION['idVisiteur'];
$mois = getMois(date("d/m/Y"));
$numAnnee =substr( $mois,0,4);
$numMois =substr( $mois,4,2);
$action = $_REQUEST['action'];

switch($action){
	// si action contrien saisireFrais alors, si c'est le premier frais du mois on cree une nouvelle lignes de frais
	case 'consultationEtatFHFRb':{

		$lesMois = $pdo->getTousLesMois();
		$lesTypesFraisHorsForfait = $pdo->getLesTypesFraisHorsForfait();
		include ("vues/v_listeMoisFHF.php");
		break;
	}
	//Si action = voirEtatFrais
	case 'voirEtatFHF':{

		//On récupère le mois selectionné
		$leMois = $_POST['lstMois'];
		$lelibelle =$_POST['lstLibelle'];


		$moisASelectionner = $leMois;
		$libelleASelectionner = $lelibelle;

		//On récupère la liste des mois
		$lesMois=$pdo->getTousLesMois();
		$lesTypesFraisHorsForfait = $pdo->getLesTypesFraisHorsForfait();
		$toutLesFHF = $pdo->getTousLesFHF($leMois, $lelibelle);

		//On inclue v_listeMois.php
		include("vues/v_listeMoisFHF.php");

		//On récupère la liste des frais hors forfait
		$lesFraisHorsForfait = $pdo->getTousLesFHF($leMois, $lelibelle);
		$montant=0;
		if ($lesFraisHorsForfait['montant'] != 0) {
			$montant = $lesFraisHorsForfait['montant'];
		}

		//On inclue v_etatFrais.php
		include("vues/v_etatFHFRb.php");
	}
}




?>
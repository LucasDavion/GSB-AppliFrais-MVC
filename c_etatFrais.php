<?php
//On inclue v_sommaire.php
include("vues/v_sommaire.php");
//On récupère l'action selectionner
$action = $_REQUEST['action'];
//On récupère l'id du visiteur
$idVisiteur = $_SESSION['idVisiteur'];
switch($action){
	//Si action = selectionnerMois
	case 'selectionnerMois':{
		$lesMois=$pdo->getLesMoisDisponibles($idVisiteur);
		// Afin de sélectionner par défaut le dernier mois dans la zone de liste
		// on demande toutes les clés, et on prend la première,
		// les mois étant triés décroissants
		$lesCles = array_keys( $lesMois );
		$moisASelectionner = $lesCles[0];
		//On inclue v_listeMois.php
		include("vues/v_listeMois.php");
		break;
	}
	//Si action = voirEtatFrais
	case 'voirEtatFrais':{
		//On récupère le mois selectionné
		$leMois = $_REQUEST['lstMois']; 
		//On récupère la liste des mois
		$lesMois=$pdo->getLesMoisDisponibles($idVisiteur);
		$moisASelectionner = $leMois;
		//On inclue v_listeMois.php
		include("vues/v_listeMois.php");
		//On récupère la liste des frais hors forfait
		$lesFraisHorsForfait = $pdo->getLesFraisHorsForfait($idVisiteur,$leMois);
		//On récupère la liste des frais forfait
		$lesFraisForfait= $pdo->getLesFraisForfait($idVisiteur,$leMois);
		//On récupère la liste des informations de la fiche des frais
		$lesInfosFicheFrais = $pdo->getLesInfosFicheFrais($idVisiteur,$leMois);
		$numAnnee =substr( $leMois,0,4);
		$numMois =substr( $leMois,4,2);	
		//On récupère le montant validé dans la liste lesInfosFicheFrais	
		$montantValide = $lesInfosFicheFrais['montantValide'];
		//On récupère le nombre de justifiactifs dans la liste lesInfosFicheFrais
		$nbJustificatifs = $lesInfosFicheFrais['nbJustificatifs'];
		//On récupère la date de la dernière modifiaction validé dans la liste lesInfosFicheFrais
		$dateModif =  $lesInfosFicheFrais['dateModif'];
		//Conversion de la date en format français
		$dateModif =  dateAnglaisVersFrancais($dateModif);
		//On inclue v_etatFrais.php
		include("vues/v_etatFrais.php");
	}
}
?>
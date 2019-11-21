<?php
//On inclue v_sommaire.php
include("vues/v_sommaire.php");
//On récupère l'action selectionner
$action = $_REQUEST['action'];
//On récupère l'id du visiteur
$idVisiteur = $_SESSION['idVisiteur'];
switch($action){
	//Si action = selectionnerMois
	case 'selectionnerEtat':{
		$lesEtats=$pdo->getLesEtatsDisponibles();
		// Afin de sélectionner par défaut le dernier mois dans la zone de liste
		// on demande toutes les clés, et on prend la première,
		// les mois étant triés décroissants
		
		//On inclue v_listeMois.php
		include("vues/v_listeEtatFichesFraisVisiteur.php");
		break;
	}
	//Si action = voirEtatFrais
	case 'voirEtatFichesFrais':{
		//On récupère le mois selectionné
		
		
		//On récupère la liste des mois
		$lesEtats=$pdo->getLesEtatsDisponibles();
		$etatASelectionner = $_REQUEST['lstEtat'];
		
		//On récupère la liste des frais hors forfait

		$lesEtatsFicheFrais = $pdo->getLesFichesFraisParVisiteur($idVisiteur,$etatASelectionner);
		

		include("vues/v_listeEtatFichesFraisVisiteur.php");
		include("vues/v_listFicheFraisParEtat.php");

	}
}
?>
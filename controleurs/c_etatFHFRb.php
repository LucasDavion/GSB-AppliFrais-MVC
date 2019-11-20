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

		$lesMois = $pdo->getLesMoisDisponibles($idVisiteur);

		

		include ("vues/v_listeMoisFHF.php");

		
		break;
	}
}




?>
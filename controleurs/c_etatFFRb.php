<?php
//On inclue v_sommaire.php
include("vues/v_sommaire_EmpCompt.php");
//On récupère l'action selectionner
$action = $_REQUEST['action'];
//On récupère l'id du visiteur
$idVisiteur = $_SESSION['idVisiteur'];
switch($action){
	//Si action = selectionnerMois
	case 'consultationMontantFFRb':{
		$lesGrades = $pdo->getLesGrades();
		$lesMois = $pdo->getLesMois();
		$leMois = $_REQUEST['lstDate'];
		$leGrade = $_REQUEST['lstGrade'];
		$resultatReq = $pdo->getLesFFRbEnFonctionDuGrade($leMois, $leGrade);
		$totalMontantFF = $resultatReq['0'];
		//On inclue v_listeMois.php
		include("vues/v_montantFFRb.php");
		break;
	}
}


?>

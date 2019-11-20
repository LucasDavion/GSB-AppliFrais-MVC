<?php 

	include("vues/v_Sommaire_EmpCompt.php");

	// intitalisation des variable
$idVisiteur = $_SESSION['idVisiteur'];
$mois = getMois(date("d/m/Y"));
$numAnnee =substr( $mois,0,4);
$numMois =substr( $mois,4,2);
$action = $_REQUEST['action'];




?>
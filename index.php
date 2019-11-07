<?php
//création d'une session
session_start();
//on inclue le fichier fct.inc.php
require_once("include/fct.inc.php");
//on inclue le fichier m_pdogsb.php
require_once("modeles/m_pdogsb.php");
//on inclue le v_entete.php
include("vues/v_entete.php") ;
//création d'un objet de la classe PdoGsb
$pdo = PdoGsb::getPdoGsb();
$estConnecte = estConnecte();
if(!isset($_REQUEST['uc']) || !$estConnecte){
     $_REQUEST['uc'] = 'connexion';
}	 
$uc = $_REQUEST['uc'];
switch($uc){
	case 'connexion':{
		include("controleurs/c_connexion.php");
		break;
	}
	case 'gererFrais' :{
		include("controleurs/c_gererFrais.php");
		break;
	}
	case 'etatFrais' :{
		include("controleurs/c_etatFrais.php");
		break; 
	}
}
include("vues/v_pied.php") ;
?>


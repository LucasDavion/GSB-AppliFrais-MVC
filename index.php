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
//
$estConnecte = estConnecte();

if(!isset($_REQUEST['uc']) || !$estConnecte){
     $_REQUEST['uc'] = 'connexion';
}	 
$uc = $_REQUEST['uc'];
switch($uc){
	//si uc = connexion
	case 'connexion':{
		//on inclue le c_connexion.php
		include("controleurs/c_connexion.php");
		break;
	}
	//si uc = gererFrais
	case 'gererFrais' :{
		//on inclue le c_gererFrais.php
		include("controleurs/c_gererFrais.php");
		break;
	}
	//si uc = etatFrais
	case 'etatFrais' :{
		//on inclue le c_etatFrais.php
		include("controleurs/c_etatFrais.php");
		break; 
	}
	case 'consultFrais' :{
		//on inclue le c_etatFrais.php
		include("controleurs/c_listeFichesFrais.php");
		break; 
	}
	case 'etatFHFRb' :{
		//on inclue le c_etatFrais.php
		include("controleurs/c_etatFHFRb.php");
		break; 
	}

}
include("vues/v_pied.php") ;
?>


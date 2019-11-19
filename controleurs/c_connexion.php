<?php
//Si la variable $_REQUEST['action'] n'existe pas alors on la cree avec demandeConnexion comme contenue
if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'demandeConnexion';
}
//On cree la variable $action avec le contenu de $_REQUEST['action']
$action = $_REQUEST['action'];
switch($action){
	//si action = demandeConnexion
	case 'demandeConnexion':{
		//on inclue le v_connexion.php
		include("vues/v_connexion.php");
		break;
	}
	//si action = valideConnexion
	case 'valideConnexion':{
		//On cree la variable $login avec le contenu de $_REQUEST['login']
		$login = $_REQUEST['login'];
		//On cree la variable $mdp avec le contenu de $_REQUEST['mdp']
		$mdp = $_REQUEST['mdp'];
		//
		$visiteur = $pdo->getInfosVisiteur($login,$mdp);
		//Si $visiteur n'est pas un tableau
		if(!is_array( $visiteur)){
			ajouterErreur("Login ou mot de passe incorrect");
			//on inclue le v_erreurs.php
			include("vues/v_erreurs.php");
			//on inclue le v_connexion.php
			include("vues/v_connexion.php");
		}
		//Si $visiteur et un tableau
		else{
			$id = $visiteur['id'];
			$nom = $visiteur['nom'];
			$prenom = $visiteur['prenom'];
			$idTypeUtilisateur= $visiteur['idTypeUtilisateur'];
			connecter($id,$nom,$prenom,$idTypeUtilisateur);
			if($idTypeUtilisateur == 1){
			//on inclue le v_sommaireVisiteur.php
			include("vues/v_sommaire_Utilisateur.php");
			}
			if($idTypeUtilisateur == 2){
			//on inclue le v_sommaireComptable.php
			include("vues/v_Sommaire_EmpCompt.php");
			}
			if($idTypeUtilisateur == 3){
			//on inclue le v_sommaireAdministrateur.php
			include("vues/v_Sommaire_DirCompt.php");
			}
			if($idTypeUtilisateur == 4){
			//on inclue le v_sommaireDirecteur.php
			include("vues/v_Sommaire_Admin.php");
			}
					//on inclue le v_accueil.php
			include("vues/v_accueil.php");
		}
		break;
	}
	//Si action n'est pas égale a valideConnexion ou demandeConnexion
	default :{
		//on inclue le v_connexion.php
		include("vues/v_connexion.php");
		break;
	}
}
?>
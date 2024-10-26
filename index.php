<?php
session_start();
include("vues/v_entete.php");
include("vues/v_bandeau.php");
include("util/fonctions.php");
if(!isset($_REQUEST['uc'])) {
    $uc = 'profil';
}
else {
	$uc = $_REQUEST['uc'];
}
switch($uc)
{
	case 'profil':
			include("vues/v_profil.php");
            break;
	case 'formation' :
			include("vues/v_formation.php");
            break;
	case 'projets' :
			include("vues/v_projets.php");
            break; 
	case 'veille' :
			include("vues/v_veille.php");
            break; 
    case 'contact' :
        include ("vues/v_contact.php");
}
include("vues/v_pieds.php");
?>
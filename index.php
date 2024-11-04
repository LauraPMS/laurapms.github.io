
<?php
  session_start();
  include("vues/v_entete.php") ;

  if(!isset($_REQUEST['uc'])) {
      $uc = 'accueil';
  }
  else {
    $uc = $_REQUEST['uc'];
  }

  switch($uc)
  {
    case 'profil':
        include("vues/v_profile.php");
              break;
    case 'formations' :
        include("vues/v_formations.php");
              break;
    case 'projets' :
        include("vues/v_projets.php");
              break; 
    case 'veille' :
        include("vues/v_veille.php");
              break; 
  }
  include("vues/v_pied.php");
?>


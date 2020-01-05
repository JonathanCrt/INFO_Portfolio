<?php
 $fic = "../js/filmoiid.json";
 $json = file_get_contents($fic);
 $tabPersonnages = json_decode($json,true);
 $longueur = sizeof($tabPersonnages["personnages"]);

 $tabPersonnages["personnages"][$longueur]["nom"] = $_POST["nom"];
 $tabPersonnages["personnages"][$longueur]["prenom"] = $_POST["prenom"];
 $tabPersonnages["personnages"][$longueur]["acteur"] = $_POST["acteur"];
 $tabPersonnages["personnages"][$longueur]["film"] = $_POST["film"];

 switch ($_POST["genre"]) {
  case 1:
   $tabPersonnages["personnages"][$longueur]["genre"] = "Action";
   break;
  case 2:
   $tabPersonnages["personnages"][$longueur]["genre"] = "Fantastic";
   break;
  case 3:
   $tabPersonnages["personnages"][$longueur]["genre"] = "Science-Fiction";
  case 4:
   $tabPersonnages["personnages"][$longueur]["genre"] = "Adventure";
   break;
 }

 $json = json_encode($tabPersonnages);
 file_put_contents($fic,$json);

 header ( "Location: ../read.php" );
 return;
?>

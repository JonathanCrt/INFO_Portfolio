<?php


$fic = "../js/filmoiid.json";
 $json = file_get_contents($fic);
 $tabPersonnages = json_decode($json,true);
 $longueur = sizeof($tabPersonnages["personnages"]);

 array_splice($tabPersonnages["personnages"],$_GET["info"],1);
 var_dump($tabPersonnages["personnages"]);

 $json = json_encode($tabPersonnages);
 file_put_contents($fic,$json);

 echo "";
?>

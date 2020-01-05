<?php
/* ------------------------------------------------------------------------
Crée le 24/07/2017 par Adelaide Donovan
---------------------------------------------------------------------------
Page 'connexion.php',  Connexion a la base de donnée de l'entreprise
---------------------------------------------------------------------------
L'utilisateur :

---------------------------------------------------------------------------

L'administrateur :

------------------------------------------------------------------------ */

  $host='mysql.hostinger.fr';
  $bd='u570509195_dunor';
  $login='u570509195_djona';
  $password='97gisbbc02';
  

      $pdo = new PDO('mysql:host='.$host.'; dbname='.$bd, $login, $password);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>

<?php
  include_once __DIR__ . "/connectaBD.php"; 
  include_once __DIR__."/models/consultaGraus.php";
  $connexio = connectaBD();
  $resultat_graus = consultaGraus($connexio);
  pg_close($connexio);
  include_once __DIR__."/../vistes/opcionsGraus.php";
?>
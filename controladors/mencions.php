<?php
  include_once __DIR__ . "/connectaBD.php"; 
  include_once __DIR__."/models/consultaGraus.php";
  $connexio = connectaBD();
  $grau = $_REQUEST['graus'] ?? 1;
  $resultat_mencions = consultaGraus($connexio, $grau);
  pg_close($connexio);

  include_once __DIR__."/../vistes/opcionsMencions.php";
?>
<?php
    //completa
    include_once __DIR__."./connectaBD.php";
    $con = connectaBD() or die("Error DB");
    $grau = (isset($_REQUEST['grau'])) ? $_REQUEST['grau'] : 1;
    $sql = "select * from mencions where grau=$grau";
    $result = pg_query($con, $sql);
    $rows = pg_fetch_all($result);
    foreach($rows as $row){
        echo "<option value = '{$row['id']}'>{$row['nom']}</option>";
    }
    pg_close($con);
?>
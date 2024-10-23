<?php 
// completa
    foreach($resultat_graus as $fila){
?>
    <option value="<?=$fila['id'] ?>"><?=$fila['nom']?></option>
<?php
}
?>
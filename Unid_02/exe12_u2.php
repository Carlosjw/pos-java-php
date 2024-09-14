<?php
$i = 1;
do{
    if($i % 2 == 1){
        echo "O número <b>$i</b> é <b>ÍMPAR</b>.<br>";
    }else{
        echo "O número <b>$i</b> é <b>PAR</b>.<br>";
    }
    $i++;
}while($i <= 10);
?>
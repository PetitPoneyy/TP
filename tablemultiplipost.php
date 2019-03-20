<?php

switch($i){
    case 0:
        $T1="Table1";
        $T1=array(1*1, 1*2, 1*3, 1*4, 1*5, 1*6, 1*7, 1*8, 1*9, 1*10);
        foreach ($T1 as $table1){
            echo $table1 . '<br />';}
        break;
    case 1:
        $T2="Table2";
        $T2=array(2*1, 2*2, 2*3, 2*4, 2*5, 2*6, 2*7, 2*8, 2*9, 2*10);
        foreach ($T2 as $table2){
            echo $table2 . '<br />';}
        break;
    case 2:
        $T3="Table3";
        $T3=array(3*1, 3*2, 3*3, 3*4, 3*5, 3*6, 3*7, 3*8, 3*9, 3*10);
        foreach ($T3 as $table3){
            echo $table3 . '<br />';}
        break;
}

?>

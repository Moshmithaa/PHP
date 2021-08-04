<?php 

function fact($num) {
    $fact = 1;
    for($i = 1; $i<=$num;$i++){
        if($fact != 0){
            $fact = $fact * $i;
            echo " $fact <br />";
        }else {
            echo "-1 ";
        }
    }
}


$num = 10;

$factorial = fact($num);

?>
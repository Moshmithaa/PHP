<?php 

function palin($val) {
    $rev = strrev($val);
    if($val == $rev) {
        echo "Palindrome";
    }else {
        echo "Not a palindrome";
    }
}

$string = "This";
$res = palin($string);


?>
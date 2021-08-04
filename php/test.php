<?php 

$text = "welcome, hello world!";
$array = array("This","is","a","string");

$rev = strrev($text);

$upper = strtoupper($text);

$length = strlen($text);

$word_count = str_word_count($text);

$arr_to_str = implode(" ",$array);

$lastchar =  substr($text, 0, -1);

echo " String = $text <br /> Reversed string = $rev <br />
        Upper case = $upper <br /> Length of the string = $length <br /> 
        Word count = $word_count <br /> Last character removed = $lastchar <br />";

echo "Array = ";

foreach($array as $value) {
    echo " $value";
}

echo "<br/>";

echo "Array to String = $arr_to_str";


?>



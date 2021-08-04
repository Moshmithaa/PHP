<?php 

  $colors = array("white","green","red");

  foreach($colors as $color) {
      print_r("$color ");
  }
  echo "<br />";
  echo $colors[1] . "<br />" . $colors[2] . "<br />" . $colors[0];


?>
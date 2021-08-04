<?php 
  
  function findLargestNum() {
      $num = array(12,56,90,35,1,76);
      echo  "Largest Number = " . max($num);
  }

  findLargestNum();

  echo "<br />";

  function findLargNum($val) {
      echo "Largest Number = " . max($val);
  }

  $num = array(45,12,34,75,0,65);
  findLargNum($num);

  echo "<br />";

  function LargNum($result) {
      return max($result);
  }

  $res = array(12,86,54,4,35,98);
  $final = LargNum($res);
  echo "Largest Number = $final";


?>
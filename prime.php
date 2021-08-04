<?php
function prime($val)
{
   if ($val == 1)
   return 0;
   for ($i = 2; $i <= $val/2; $i++)
   {
      if ($val % $i == 0)
      return 0;
   }
   return 1;
}
$val = 4;
$check = prime($val);
if ($check == 1)
   echo "$val is a prime number";
else
   echo "$val is not a prime number";
?>
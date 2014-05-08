<?php

/**
 * @file
 * Martina Radeva
 * Magic Square
 */

function magic_square($matrix) {
  $sum = array();
  $magic = 'False';
  for ($i=0; $i<count($matrix); $i++) {
    for ($j=0; $j<count($matrix); $j++) {
      $row += $matrix[$i][$j];
      $col += $matrix[$j][$i];
      
    }
    $main_d += $matrix[$i][$i];
    $sum[] = $row;
    $sum[] = $col;
    
    $row = 0;
    $col = 0;
    
    $sec_d += $matrix[$i][count($matrix)-($i+1)];
  }
  $sum[] = $main_d;
  $sum[] = $sec_d;
  
  $b = 0;
  while ($b < (count($sum)-1) && ($sum[$b] === $sum[$b+1])) {
    $b++;
    $magic = 'True';
  }
  
  return $magic;
}

print magic_square(array(array(1, 2, 3), array(4, 5, 6), array(7, 8, 9)));
print '<br />';
print magic_square(array(array(4, 9, 2), array(3, 5, 7), array(8, 1, 6)));
print '<br />';
print magic_square(array(array(7,12,1,14), array(2,13,8,11), array(16,3,10,5), array(9,6,15,4)));
print '<br />';
print magic_square(array(array(23, 28, 21), array(22, 24, 26), array(27, 20, 25)));
print '<br />';
print magic_square(array(array(16, 23, 17), array(78, 32, 21), array(17, 16, 15)));
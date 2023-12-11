<?php
function sumdiagonal($arr) {
    $summa = 0;
    $n = count($arr); 
  
    for ($i = 0; $i < $n; $i++) {
      $summa += $arr[$i][$i]; 
    }
  
    return $summa;
  }
  

  $matrix = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
  );
  

  echo "Сумма элементов главной диагонали: " . sumdiagonal($matrix);
  
?>
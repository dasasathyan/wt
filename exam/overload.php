<?php
class Addition {
  function compute($first, $second) {
    $total= $first+$second;
    return $total;
  }

  function compute($first, $second, $third=5) {
    $total= $first+$second+$third;
    return $total;
  }
}

$add=Addition::compute(2,3);
//$add1=Addition::compute(2,3);
echo $total;

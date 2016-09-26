<?php
function calculateAverage($a, $b, $c, $d) {
  try {
    $a_valid = $a >= 0 && $a <= 100;
    $b_valid = $b >= 0 && $b <= 100;
    $c_valid = $c >= 0 && $c <= 100;
    $d_valid = $d >= 0 && $d <= 100;
    if($a_valid && $b_valid && $c_valid && $d_valid) {
      return printf('%f', ($a + $b + $c + $d)/4);
    } else {
      throw new OutOfRangeException();
    }
  } catch (OutOfRangeException $e) {
    echo "Value(s) supplied is out of range of 0 - 100. " . $e->getMessage();
  }
}

echo (calculateAverage(28,245,64,47));
?>
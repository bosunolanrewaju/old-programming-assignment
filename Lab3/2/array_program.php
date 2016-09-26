<?php 
  function processArray ($arr) {
    for($i = 0; $i < count($arr); $i++){
      if($arr[$i] % 2 == 0){
        $arr[$i] = $arr[$i] / 2;
      } else {
        $arr[$i] = $arr[$i] * 3;
      }
    }
    return $arr;
  }
 

    $myarr = array(1,4,5,7,8,2,4,89,45,23,22);
    print_r(processArray($myarr));
 ?>
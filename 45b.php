<?
include('includes/functions.php');
ini_set('max_execution_time', 300);
//ini_set('memory_limit', '-1');
$time_start = microtime_float();


$start = 10000;
$end = $start * 10;
for ($i = $start; $i < $end; $i++) {
    $hehNumber = $i*(2*$i-1);
  //  echo $hehNumber.'<br>';
    // $isH = (int)$isH == $isH;
        $isP = isPentagonal($hehNumber);
        $isP = (int)$isP == $isP;
        if ($isP) {
            echo "Is Pentagonal! ".$isP." ".$i."<br>";
            $isT = isTriangle($hehNumber);
            $isT = (int)$isT == $isT;
            if ($isT) {
                var_dump($hehNumber);
                echo '<br>';
                var_dump(isTriangle($hehNumber));
                var_dump(isPentagonal($hehNumber));
                var_dump(isHexagonal($hehNumber));
                var_dump($i);
                die();     }
        }
      /*  if ($isT && $isP && $isH) {
          var_dump(isTriangle($i));
          var_dump(isPentagonal($i));
          var_dump(isHexagonal($i));
          var_dump($i);
          die();
      }*/
}
echo microtime(true)-$time_start.'<br>';
echo 'NOP!';
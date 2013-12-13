<?
include('includes/functions.php');
ini_set('max_execution_time', 300);
//ini_set('memory_limit', '-1');
$time_start = microtime_float();


$start = 180000000;
$end = $start + 10000000;
for ($i = $start; $i < $end; $i++) {
    $isH = isHexagonal($i);
   // $isH = (int)$isH == $isH;
    if ((int)$isH == $isH) {
        echo "Is Hexagonal! ".$isH." ".$i."<br>";
            $isP = isPentagonal($i);
        $isP = (int)$isP == $isP;
        if ($isP) {
            echo "Is Pentagonal! ".$isP." ".$i."<br>";
            $isT = isTriangle($i);
            $isT = (int)$isT == $isT;
            if ($isT) {
                var_dump(isTriangle($i));
                var_dump(isPentagonal($i));
                var_dump(isHexagonal($i));
                var_dump($i);
                die();     }
        }
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
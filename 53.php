<?
include('includes/functions.php');
ini_set('max_execution_time', 5);
//ini_set('memory_limit', '-1');
$time_start = microtime_float();
$results = array();
?>
<pre><?
$total = 0;
$max = 1000000;
$flag = true;
for ($n = 100; $n > 0 && $flag; $n--) {
    $flag = false;
    echo "===".$n.'<br>';
    for ($r = 1; $r < $n; $r++) {
        $nCr = nCr($n, $r);
    //    var_dump($nCr);
        if ($nCr >= $max) {
            $total++;
            $flag = true;
        }
    }
 //   $flag = $r == 0;
}
?>
<hr><?

var_dump($total);
?>
<hr><?
echo microtime(true) - $time_start . '<br>';
echo 'NOP!';
?></pre>
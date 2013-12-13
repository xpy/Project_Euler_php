<?
include('includes/functions.php');
ini_set('max_execution_time', 1);
//ini_set('memory_limit', '-1');
$time_start = microtime_float();
$results = array();
?>
<pre><?
$max = 0;
$num = 2;
while (strlen($num) < 5) {

    $pandigital = '';
    $mul = 1;
    while (strlen($pandigital) < 9) {
        $pandigital .= $num * $mul;
        $mul++;
    }
    if (strlen($pandigital )== 9 && isPandigital($pandigital)) {
        $max = max($pandigital,$max);
        var_dump($pandigital);
//        die();
    }
    $num++;
}

?><hr><?
var_dump($max);
?>
<hr><?
echo microtime(true) - $time_start . '<br>';
echo 'NOP!';
?></pre>
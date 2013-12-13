<?
include('includes/functions.php');
ini_set('max_execution_time', 1);
//ini_set('memory_limit', '-1');
$time_start = microtime_float();
$results = array();
?>
<pre><?
$max = 0;
$k = 0;
for ($i = 0; $i < 100; $i++) {
    for ($j = 0; $j < 100; $j++) {
        $pow = bcpow($i,$j);
       $num = sumOfDigits($pow);
        $max = max($num,$max);
        $k++;
        var_dump($num);
        echo '-----------'.$k.'<br>';
        echo '-----------'.$pow.'<br>';
    }
}

?>
<hr><?
var_dump($max);
?>
<hr><?
echo microtime(true) - $time_start . '<br>';
echo 'NOP!';
?></pre>
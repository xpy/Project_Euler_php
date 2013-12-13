<?
include('includes/functions.php');
ini_set('max_execution_time', 1);
//ini_set('memory_limit', '-1');
$time_start = microtime_float();
$results = array();
?>
<pre><?

$result = false;
$k = 10;
$num=1;
while (!$result && $num<200000) {
    $flag = true;
    for ($i = 2; $i <= 6 && $flag; $i++) {
        $res =  preg_replace('/['.$num.']/','',$i*$num);
    //    var_dump($res);
        $flag = $res === '';

    }
$result = $flag;
    $num++;
}
var_dump($num-1);
?>
<hr><?
echo microtime(true) - $time_start . '<br>';
echo 'NOP!';
?></pre>
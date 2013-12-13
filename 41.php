<?
include('includes/functions.php');
ini_set('max_execution_time', 300);
//ini_set('memory_limit', '-1');
$time_start = microtime_float();
$results = array();
?>
<pre><?
$pandigitals = [];
$num = 3;
do {
    $num = nextPrime($num);
   // var_dump($num);
    if(isPandigital($num)){
        $pandigitals[] = $num;
    };
} while (strlen($num) <= 9);

?>
<hr><?

?>
<hr><?
var_dump($num);
//var_dump($k);
?>
<hr><?
echo microtime(true) - $time_start . '<br>';
echo 'NOP!';
?></pre>
<?php
include('includes/functions.php');
ini_set('max_execution_time', 5);
ini_set('memory_limit', '-1');
$time_start = microtime_float();

$preFib  = '1';
$fib ='1';

$i=3;
function nextFib (){
global $preFib,$fib;
    $tmpFib = $preFib;
    $preFib = $fib;
    $fib = bcadd($tmpFib ,$fib);
    return $fib;
}
while(strlen(nextFib())<1000){$i++;};
?>
<pre><?php echo  '--'. $i .'--';?></pre>

<?php
$time_end = microtime_float();
$time = $time_end - $time_start;
echo $time;
?>
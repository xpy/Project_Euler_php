<?php
include('includes/functions.php');
ini_set('max_execution_time', 30);
ini_set('memory_limit', '-1');
$time_start = microtime_float();

$i= 1;
$triangleNum = 0;
$max = 0;
while(count(divisors($triangleNum)) <=300 ){
    $triangleNum += $i++;
}

?>
<pre><?php echo  '--'. $triangleNum .'--';?></pre>

<?php
$time_end = microtime_float();
$time = $time_end - $time_start;
echo $time;
?>
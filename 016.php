<?php
include('includes/functions.php');
ini_set('max_execution_time', 600);
$time_start = microtime_float();

?>
<pre><?php echo  '--'. sumOfDigits(bcpow('2','1000')) .'--';?></pre>

<?php
$time_end = microtime_float();
$time = $time_end - $time_start;
echo $time;
?>
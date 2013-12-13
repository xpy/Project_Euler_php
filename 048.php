<?php
include('includes/functions.php');
ini_set('max_execution_time', 10);
ini_set('memory_limit', '-1');
$time_start = microtime_float();

$megaSum = '0';
for($i=1; $i<=1000;$i++)
{
	$k = (string)$i;
	$megaSum = bcadd($megaSum,bcpow($k,$k));
}

?>
<pre><?php echo  '--'. $megaSum .'--';?></pre>

<?php
$time_end = microtime_float();
$time = $time_end - $time_start;
echo $time;
?>
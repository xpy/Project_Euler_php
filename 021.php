<?php
include('includes/functions.php');
ini_set('max_execution_time', 10);
ini_set('memory_limit', '-1');
$time_start = microtime_float();

$megaSum = 0;
for($i=0; $i<10000;$i++)
{
	$sum = array_sum(divisors($i))-$i;
	$sum2 = array_sum(divisors($sum))-$sum;
//	var_dump(divisors($i));
//	echo $i.'---'.$sum.'---'.$sum2.'<br>';
	if($sum2 == $i && $i != $sum) {
		echo "I found one!-------------------------- ".$i.'--'.$sum.'<br>';
	$megaSum +=$i;
	}
}

?>
<pre><?php echo  '--'. $megaSum .'--';?></pre>

<?php
$time_end = microtime_float();
$time = $time_end - $time_start;
echo $time;
?>
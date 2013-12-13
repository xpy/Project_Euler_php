<?php
include('includes/functions.php');
ini_set('max_execution_time', 600);
$time_start = microtime_float();
ini_set('xdebug.max_nesting_level', 200);
?>
<pre><?php echo  '--'. sumOfDigits(parag(100)) .'--';?></pre>

<?php
$time_end = microtime_float();
$time = $time_end - $time_start;
echo $time;
?>
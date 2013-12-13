<?php
include('includes/functions.php');
ini_set('max_execution_time', 10);
ini_set('memory_limit', '-1');
$time_start = microtime_float();

$megaSum = '0';
$fName = "resources/names.txt";
$f = fopen($fName,'r');
$str = fread($f,filesize($fName));
$str = str_replace('"','',$str);
$str = explode(',',$str);
sort($str);
$k=1;
foreach ($str as $st) {
	$megaSum = bcadd(bcmul((string)stringASCIISum($st),(string)($k++)),$megaSum);
}

?>
<pre><?php echo  '--'. $megaSum .'--';?></pre>

<?php
$time_end = microtime_float();
$time = $time_end - $time_start;
echo $time;
?>
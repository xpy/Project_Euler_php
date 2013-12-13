<?php
include('includes/functions.php');
ini_set('max_execution_time', 10);
$time_start = microtime_float();

$megaSum = '0';

$powers = array();
$a = 100; $b = 100;
for($i=2;$i<=$a;$i++)
{
    for($j=2;$j<=$b;$j++)
    {
        $powers[] = bcpow((string)$i,(string)$j);
    }
}
$powers=array_unique($powers);
sort($powers);
?>
<pre><?php echo  '--'. (count($powers)) .'--';?></pre>

<?php
$time_end = microtime_float();
$time = $time_end - $time_start;
echo $time;
?>
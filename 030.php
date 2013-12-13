<?php
include('includes/functions.php');
ini_set('max_execution_time', 100);
ini_set('memory_limit', '-1');
$time_start = microtime_float();

$megaSum = '0';
$pows = array();
$pow = 5;
for($i = 0; $i<=9;$i++)
{$pows[$i] =bcpow($i,$pow); }

for($i=2;$i<1000000;$i++)
{
    $sum = '0';
    $stri = (string) $i;
    $flag = true;
    for($k=0; $flag && $k<strlen($stri) ;$k++){
        $sum = bcadd($pows[$stri[$k]],$sum);
        $flag = (bccomp($sum,$stri))<1;
    }
    if($sum == $stri) { echo " I FOUND ONE!!! : $i<br>"; $megaSum+=$i; }
}

?>
<pre><?php echo  '--' .($megaSum). '--';?></pre>

<?php
$time_end = microtime_float();
$time = $time_end - $time_start;
echo $time;
?>
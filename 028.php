<?php
include('includes/functions.php');
ini_set('max_execution_time', 1);
ini_set('memory_limit', '-1');
$time_start = microtime_float();

$megaSum = '0';

$side = 1001;
$start = $side*$side;
$num = $start;
$step  = $side-1;
$phase = 3;

while($step>0){
    $megaSum +=$num;
    echo $num.'<br>';
    $num -=$step;
    if($phase == 0){ $step-=2; $phase = 3;}
    else{
            $phase--;
        }
}
?>
<pre><?php echo  '--' .($megaSum+1). '--';?></pre>

<?php
$time_end = microtime_float();
$time = $time_end - $time_start;
echo $time;
?>
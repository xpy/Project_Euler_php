<?php
include('includes/functions.php');
ini_set('max_execution_time', 1);
ini_set('memory_limit', '-1');
$time_start = microtime_float();


$sq = array();
$size =  20;

for ($i  = $size; $i>=0;  $i--){
    for($r =0;$r<=$size;$r++){
        $sum = '0';
        if(isset($sq[$i+1][$r])){
            for($k = $r;$k<=$size;$k++){
                $sum = bcadd($sum ,$sq[$i+1][$k]);
            }
            $sum= bcadd($sum,1);
        }
        $sq[$i][$r] = $sum<=1?($sum):(bcsub($sum,1));
    }
}
$finalSum = 0;
for($i=0;$i<=$size;$i++){$finalSum += $sq[0][$i];}
var_dump($sq);
?>
<pre><?php echo  '--'. $finalSum .'--';?></pre>

<?php
$time_end = microtime_float();
$time = $time_end - $time_start;
echo $time;
?>
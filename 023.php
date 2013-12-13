<?php
include('includes/functions.php');
ini_set('max_execution_time', 120);
$time_start = microtime_float();

$megaSum = '0';
$largestAbudant = 28124;
while(!isAbundant(--$largestAbudant) && $largestAbudant>0){ }
$abudants = array();
for ($i = 12;$i<=$largestAbudant;$i++)
{
    if(isAbundant($i)){$abudants[] = $i;}
}
$numOfAbudants = count($abudants);
$k = 0;
for($i = 24; $i<28124; $i++)
{
    $preAbu = $i;
    while(!isAbundant(--$preAbu) && $preAbu>0){ }
    $preAbuIndex = array_search($preAbu,$abudants);
    if($preAbuIndex == '') {$preAbuIndex = $numOfAbudants;  }
    $sum = 0; $flag = true;
    for($k = 0 ; ($k <= $preAbuIndex) && ($k+$k<=$i) && $flag; $k++){

        for($j = $preAbuIndex, $sum = $abudants[$j] + $abudants[$k] ; ($j > $k) && $flag; $j--,$sum = $abudants[$j] + $abudants[$k])
        {
            if(($sum)== $i) {$flag = false;}
        }
    }
    if($flag){$megaSum+=$i;
    echo $i.'-'.$k.'- sum:'.$sum.'- SUM:'.$megaSum.' === '. $preAbuIndex .'<br>';}
}
?>
<pre><?php echo  '--'. $megaSum .'--';?></pre>

<?php
$time_end = microtime_float();
$time = $time_end - $time_start;
echo $time;
?>
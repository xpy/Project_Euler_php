<?php
include('includes/functions.php');
ini_set('max_execution_time', 100);
$time_start = microtime_float();

$megaSum = '0';
$specials = array();
$factorials = array();
for($i=0;$i<=9;$i++){$factorials[$i]=parag($i);}
for($i=3;$i<1000000;$i++)
{
    $sum = 0;
    $stri = (string)$i;
    $flag = true;
    for($k=0;$flag && $k<strlen($stri);$k++)
    {
        $sum+= $factorials[(int)$stri[$k]];
        $flag = ($sum<=$i);
    }
    if($sum == $i) {$specials [] = $i;}
}
var_dump($specials);
?>
<pre><?php echo  '--'. ($megaSum) .'--';?></pre>

<?php
$time_end = microtime_float();
$time = $time_end - $time_start;
echo $time;
?>
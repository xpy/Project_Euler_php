<?php
include('includes/functions.php');
ini_set('max_execution_time', 1);
ini_set('memory_limit', '-1');
$time_start = microtime_float();

$megaSum = '0';

$digits = 10;
$digit = array();
$nth = 1000000;
$pool = array();
for($i = 0; $i<$digits;$i++){$pool[] = $i;}
$oldArea = 0;

for($i = $digits;$i>=1;$i--){

    $compi = parag($i);
    $area = $compi/$i;
    $field = (ceil(($nth-$oldArea)/$area));
    $oldArea +=($field-1) * $area;
    $digit[$i] = $pool[$field-1];
    unset($pool[$field-1]);
    $pool = array_values($pool);
}

$d = implode('',$digit);

?>
<pre><?php echo  '--' .($d). '--';?></pre>

<?php
$time_end = microtime_float();
$time = $time_end - $time_start;
echo $time;
?>
<?php
include('includes/functions.php');
ini_set('max_execution_time', 1);
ini_set('memory_limit', '-1');
$time_start = microtime_float();

$megaSum = '0';

$file = "resources/triangle.txt";
$f = fopen($file,'r');
$str = fread($f,filesize($file));
$triangle = explode('
',$str);
for($i =0;$i<count($triangle);$i++){   $triangle[$i]= explode(' ',$triangle[$i]);}
var_dump($triangle);

function getPairsMax($row){
    $rowLength = count($row);
    $ret = array();
    for($i = 0; $i+1< $rowLength; $i++)
    { $ret[] = max($row[$i],$row[$i+1]); }
    return $ret;
}

$length =count($triangle);
$tmpArray = array();  for($i=0;$i<$length;$i++){$tmpArray[$i]=$triangle[$length-1][$i];}
for($i = $length-1;$i>0;$i--)
{
    $tmpArray = getPairsMax($tmpArray);
    $tmpArray = addArrays($tmpArray,$triangle[$i-1]);
}
?>
<pre><?php echo  '--'. ($tmpArray[0]) .'--';?></pre>

<?php
$time_end = microtime_float();
$time = $time_end - $time_start;
echo $time;
?>
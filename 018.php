<?php
include('includes/functions.php');
ini_set('max_execution_time', 1);
ini_set('memory_limit', '-1');
$time_start = microtime_float();
$triangle = array();
$triangle[0] = array(75);
$triangle[1] = array(95,64);
$triangle[2] = array(17,47,82);
$triangle[3] = array(18,35,87,10);
$triangle[4] = array(20,4,82,47,65);
$triangle[5] = array(19,1,23,75,3,34);
$triangle[6] = array(88,2,77,73,7,63,67);
$triangle[7] = array(99,65,4,28,6,16,70,92);
$triangle[8] = array(41,41,26,56,83,40,80,70,33);
$triangle[9] = array(41,48,72,33,47,32,37,16,94,29);
$triangle[10] = array(53,71,44,65,25,43,91,52,97,51,14);
$triangle[11] = array(70,11,33,28,77,73,17,78,39,68,17,57);
$triangle[12] = array(91,71,52,38,17,14,91,43,58,50,27,29,48);
$triangle[13] = array(63,66,4,68,89,53,67,30,73,16,69,87,40,31);
$triangle[14] = array(04,62,98,27,23,9,70,98,73,93,38,53,60,4,23);

$triangle2  = array();
$triangle2[] = array(3);
$triangle2[] = array(7,4);
$triangle2[] = array(2,4,6);
$triangle2[] = array(8,5,9,3);

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
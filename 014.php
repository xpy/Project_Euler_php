<?php
include('includes/functions.php');
ini_set('max_execution_time', 60);
ini_set('memory_limit', '-1');
$time_start = microtime_float();

$chains = array();

function iterate($num){
    global $chains;
     $chainLength = 0;
     $tmpNum = $num;
     while ($tmpNum > 1 ){
         if(isset($chains[$tmpNum])){
         //    echo "KNOWN CHAIN! ".$tmpNum.':'.$chains[$tmpNum].'!';
             $chains[$num] = $chainLength + $chains[$tmpNum];
        //     echo $num.'-'. ($chains[$num]+1).'<br>';
             //unset ($chains[$tmpNum]);
             return ($chains[$num]+1);}
         $tmpNum = (($tmpNum % 2 )==0)?$tmpNum/2:((3*$tmpNum)+1);
         $chainLength++;
         //echo $tmpNum.'<br>';
     }
    $chains[$num] = $chainLength;
     return $chainLength+1;
 }

$num = 1000000;$longestChain =0;$i=0;

while($i<=$num){
    $tmpChain = iterate($i++);
    $tmpLongestChain = $longestChain;
    $longestChain = max($longestChain, $tmpChain);
    if($longestChain != $tmpLongestChain) { echo ($i-1).' '.$longestChain.'<br>';}
}
?>
<pre><?php echo  '--'. $longestChain .'--'.count($chains);?></pre>

<?php
$time_end = microtime_float();
$time = $time_end - $time_start;
echo $time;
?>
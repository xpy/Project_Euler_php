<?php
include('includes/functions.php');
ini_set('max_execution_time', 20);
$time_start = microtime_float();

$megaSum = '0';

for($i = 0; $i< 1000000; $i++){
    if(isPalindrome($i)){
        $bin = decbin($i);
        if(isPalindrome((string)$bin)){
        echo $i.' - '.$bin.'<br>';
        $megaSum += $i;
        }
    }
}
?>
<pre><?php echo  '--'. ($megaSum) .'--';?></pre>

<?php
$time_end = microtime_float();
$time = $time_end - $time_start;
echo $time;
?>
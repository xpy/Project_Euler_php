<?php
include('includes/functions.php');

$time_start = microtime_float();
$target = 600851475143;
$lastPrime = 3;

$factors = array();

while($target>1 && $target> $lastPrime){
if(bcmod($target , $lastPrime) == 0){
    $factors[] = $lastPrime;
    $target=$target / $lastPrime;
    if(isPrime($target)){$factors[] = $target; $target= 1; }
}
    $lastPrime = nextPrime($lastPrime);
}

?>
<pre><?php print_r($factors);?></pre>

<?php
$time_end = microtime_float();
$time = $time_end - $time_start;
echo $time;
?>
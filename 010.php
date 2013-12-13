<?php
include('includes/functions.php');
ini_set('max_execution_time', 600);
$time_start = microtime_float();

function primesSum($num)
{
    $last = 3;
    $sum = 2;
  while($last < $num){
      $sum+=$last;
      $last = nextPrime($last);
  }
    return $sum;
}
$sum = 2;
$primes = primesTo(20000);
foreach ($primes as $prime) {
    $sum+=$prime;
}

?>
<pre><?php echo  '--'.$sum.'--';?></pre>

<?php
$time_end = microtime_float();
$time = $time_end - $time_start;
echo $time;
?>
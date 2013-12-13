<?
include('includes/functions.php');
ini_set('max_execution_time', 300);
//ini_set('memory_limit', '-1');
$time_start = microtime_float();
$results = array();
?>
<pre><?

/**
    int(543)
    int(997651)
 */
$max = 0;
$primes = [2];
$prime = 2;
$sum = 2;
$nextPrime = null;
while (count($primes) > 0) {
    $nextPrime = is_null($nextPrime)?nextPrime($prime):$nextPrime;
    if ($sum + $nextPrime < 1000000) {
        $prime = $nextPrime;
        $nextPrime  =null;
        $primes[] = $prime;
        $sum += $prime;
    } else {
        $first = array_shift($primes);
        $sum -= $first;
    }
    $numOfPrimes = (count($primes));

    if ($sum < 1000000 && $numOfPrimes > $max && isPrime($sum)) {
        var_dump($primes);
        var_dump($sum);
        var_dump(array_sum($primes));
        echo '<br>--------------<br>';

        $max = $numOfPrimes;
        $res = $sum;

        $results[] = $sum;
    }
}
?>
<hr><?
var_dump($results);
var_dump($max);
var_dump($res);
?>
<hr><?
echo microtime(true) - $time_start . '<br>';
echo 'NOP!';
?></pre>
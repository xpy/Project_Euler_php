<?
include('includes/functions.php');
ini_set('max_execution_time', 1);
//ini_set('memory_limit', '-1');
$time_start = microtime_float();
$results = array();
?>
<pre><?
$primes = primesTo(10000);
$flag = true;
$num = 501;
$guard = 10000;

while ($flag && --$guard>0) {
    $num+=2;
    if (!isPrime($num)) {
        $flag = false;
        for ($i = 0; $primes[$i] < $num && !$flag; $i++) {
            $k = 0;
            do {
                $k++;
                $sum = $primes[$i] + 2 * ($k * $k);
               /* var_dump($sum);
                var_dump($num);
                echo '<br>----------<br>';*/
            } while ($sum < $num);
            if ($sum == $num) {
                echo "Num:".$num.' '. $primes[$i].' 2x'.$k.'²<br>';
                $flag = true;
            }
        }
    }

}

?>
<hr><?
var_dump($guard);
var_dump($num);
?>
<hr><?
echo microtime(true) - $time_start . '<br>';
echo 'NOP!';
?></pre>
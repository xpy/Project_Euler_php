<?
include('includes/functions.php');
ini_set('max_execution_time', 5);
//ini_set('memory_limit', '-1');
$time_start = microtime_float();

$primes = [1, 2, 3, 5, 7, 9];
$l = count($primes);
$truncatablePrimes = array();
?>
<pre><?

function isTruncatable($prime)
{
    $isTruncatable = true;
    $l2 = strlen($prime);

    for ($i = $l2; $i > 0 && $isTruncatable; $i--) {
        $leftCut = substr($prime, $i * -1);
        $isTruncatable = isPrime($leftCut);
    }
    return $isTruncatable;
}

function truncatable($prime, $index)
{

    global $l, $primes, $truncatablePrimes;
    if (isPrime($prime) && $index < $l) {
        $prime .= $primes[$index];
        $l2 = strlen($prime);
        if ($l2 > 1) {
            if (isPrime($prime)) {

                truncatable($prime, 0);
            }
            if (isTruncatable($prime)) {
                $truncatablePrimes[] = $prime;
            }
            $prime = substr($prime, 0, -1);
        }
        truncatable($prime, $index + 1);
        //    truncatable('', $index + 1);
    }

}

for ($i = 1; $i < $l; $i++) {
    truncatable($primes[$i], 0);
}
var_dump($truncatablePrimes);
/*$uniques = array();
foreach ($truncatablePrimes as $tr) {
    $isUnique = true;
    for ($i = 0, $l = count($truncatablePrimes); $i < $l && $isUnique; $i++) {

        //  echo '<br>'.$tr.'---'.$truncatablePrimes[$i].'+'.strpos($tr,$truncatablePrimes[$i]).'|'.($tr!=$truncatablePrimes[$i]).'<br>';
        if (strpos($truncatablePrimes[$i], $tr) !== false && $tr != $truncatablePrimes[$i] || strlen($tr) == 2) {
            $isUnique = false;
        }
    }
    if ($isUnique) {
        $uniques[] = $tr;
    }

}*/
echo '<br>-------------<br>';
echo array_sum($truncatablePrimes);
echo '<br>-------------<br>';

echo microtime(true) - $time_start . '<br>';
echo 'NOP!';

?></pre><?

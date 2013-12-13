<?
include('includes/functions.php');
ini_set('max_execution_time', 30);
//ini_set('memory_limit', '-1');
$time_start = microtime_float();
$results = array();
?>
<pre><?

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$number = '';
$k = 0;
function comb($numbers)
{

    global $number, $results, $maxLength;
    $myNumbers = $numbers;
    while (count($myNumbers) > 0) {
        $lastNum = array_shift($myNumbers);
        $number .= $lastNum;
        //comb(array_diff($numbers, [$lastNum]));
        $res = comb(array_diff($numbers, [$lastNum]));
        if ($res === true) {
            return true;
        }
        $number = substr($number, 0, -1);
    }
    if (strlen($number) == $maxLength) {
        if (isPrime((int)$number)) {
            $results[] = $number;
            return true;
        }
    }

    return false;
    //     var_dump($number);


}

for ($i = 7; $i >= 2; $i--) {
    $maxLength = $i;
    comb(array_reverse(array_slice($numbers, 0, $i)));
}
?>
<hr><?

$result = max($results);
var_dump($result);
?>
<hr><?
echo microtime(true) - $time_start . '<br>';
echo 'NOP!';
?></pre>
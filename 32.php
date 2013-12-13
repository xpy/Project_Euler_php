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
    global $number, $k, $results;
    $preLast = null;
    $myNumbers = $numbers;
    while (count($myNumbers) > 0) {
        $lastNum = array_shift($myNumbers);
        $number .= $lastNum;
        comb(array_diff($numbers, [$lastNum]));
        $number = substr($number, 0, -1);
    }
    if (strlen($number) == 9) {
        for ($i = 1; $i < 8; $i++) {
            for ($j = 1; $j + $i <= 8; $j++) {
                $n1 = substr($number, 0, $i);
                $n2 = substr($number, $i, $j);
                $n3 = substr($number, $j + $i);
                if ($n1 * $n2 == $n3) {
//                    $results[] = [$n1,$n2,$n3];
                    $results[] = $n3;
                //    var_dump($results);
                }
                /*var_dump($n1);
                var_dump($n2);
                var_dump($n3);*/

            }
        }
        //     var_dump($number);

        $k++;
    }

}

comb($numbers);
?>
<hr><?

$results = array_unique($results);
var_dump($results);
?><hr><?
var_dump(array_sum($results));
//var_dump($k);
?>
<hr><?
echo microtime(true) - $time_start . '<br>';
echo 'NOP!';
?></pre>
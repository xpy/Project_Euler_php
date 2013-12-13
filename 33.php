<?
include('includes/functions.php');
ini_set('max_execution_time', 1);
//ini_set('memory_limit', '-1');
$time_start = microtime_float();
$results = array();
?>
<pre><?
$curious = array();
function check($num)
{
    global $curious;
    $denominators = array_unique(str_split($num));
    if (count($denominators) == 1) {
        return;
    }
    if (in_array(0, $denominators)) {
        return;
    }
    for ($i = 10; $i < $num; $i++) {
        if ($i % 10 != 0) {
            $res = $i / $num;
            $numerators = array_unique(str_split($i));
            foreach ($numerators as $numerator) {
                foreach ($denominators as $denominator) {
                    if ($denominator > 0 && $numerator / $denominator == $res) {
                        if (str_replace($numerator,'',$i) == str_replace($denominator,'',$num)) {
                            $curious[] = ['primary' => [$i, $num], 'secondary' => [$numerator, $denominator]];
                        }
                    }
                }

            }
        }

    }
}

for ($i = 10; $i < 99; $i++) {
    check($i);
}
$numerator = 1;
$denominator = 1;
foreach ($curious as $c) {
$numerator*=$c['primary'][0];
$denominator*=$c['primary'][1];
    echo $c['primary'][0].'  '. $c['primary'][1].'<hr>';
}
?><hr><?

echo $numerator.'  '.$denominator;
?><hr><?
echo microtime(true) - $time_start . '<br>';
echo 'NOP!';
?></pre>
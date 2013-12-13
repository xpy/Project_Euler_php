<?php
include('includes/functions.php');

$time_start = microtime_float();

function findTriplet($num)
{
    $c = $num - 3;
    $b = 1;
    $tmp_b =1;
    $a = 0;
    $flag = true;
    while ($a < $b && $flag && $a < $num) {
        $a++;
        $b =$tmp_b++;
        $c = $num - ($b + $a);
        while (($b < $c) && $flag) {
            $flag = ($a * $a + $b * $b) != ($c * $c);
            $b++;
            $c--;
        }
    }
    echo $a . '.' . $b . '.' . $c;
    return $a * ($b-1) * ($c+1);
}

?>
<pre><?php echo  '--'.findTriplet(1000).'--';?></pre>

<?php
$time_end = microtime_float();
$time = $time_end - $time_start;
echo $time;
?>
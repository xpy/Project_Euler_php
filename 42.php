<?
include('includes/functions.php');
//ini_set('max_execution_time', 1);
//ini_set('memory_limit', '-1');
$time_start = microtime_float();

$file = "resources/words.txt";
$f = fopen($file, 'r');
$str = fread($f, filesize($file));
$str = str_replace('"', '', $str);
$words = explode(',', $str);
$triangles = 0;
$k = 100;
foreach ($words as $word) {

    $asdf = isTriangle(stringASCIISum($word));


    $asdf = isTriangle(stringASCIISum($word));

    if ((int)$asdf == $asdf) {
        echo $word,'<br>';
        $triangles++;
    }
}

echo '!!!!!!!!!!!!! '.$triangles.' ????<br>';

echo microtime(true) - $time_start;
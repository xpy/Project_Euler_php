<?
include('includes/functions.php');
ini_set('max_execution_time', 1);
//ini_set('memory_limit', '-1');
$time_start = microtime_float();
$results = array();
?><pre><?

function check($h){
global $results;
    $half = sqrt(($h*$h)/2);
    for($i = $h-1;$i>=$half;$i--){
        $j = sqrt($h*$h - $i*$i);
      //  echo $j.'<br>';
        if($j == floor($j)){
            $key = $h+$i+$j;
            if(!isset($results[$key])){
                $results[$key] = array();
            }
            $results[$key][] = [$h,$i,$j];

        }

    }
}

for($i=0;$i<450;$i++){
    check($i);
}

$maxed = ['counting'=>0,'num'=>0,'items'=>[]];
foreach($results as $key=>$result){
    $counting = count($result);
    echo $key.'--->'.$counting.'<br>';
    if($counting > $maxed['counting']){
        $maxed['counting'] = $counting;
        $maxed['num'] = $key;
        $maxed['items'] = $result;
    }
}

?><hr><?
var_dump($maxed);
?><hr><?
echo microtime(true) - $time_start . '<br>';
echo 'NOP!';
?></pre>
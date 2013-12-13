<?
ini_set('memory_limit', '64M');
$coins = [1, 2, 5, 10, 20, 50, 100, 200];
$coins = array_reverse($coins);
$max = 200;
$sum = 0;
$variations = 0;
$variation = [];
$variationsArray = [];
$variationFingerprints = [];
$k = 10000000;
//$k = 100;
$lastCoin = 0;
$asdfasdfasdfasdf =0;
$l = count($coins);
$time = microtime(true);
function  makeSum($sum, $max, $index)
{
    global
        //$k,
           $coins,
           $variations //, $variationsArray, $variation, $lastCoin, $variationFingerprints
               ,$asdfasdfasdfasdf
           ,$l
           ;
   /* if ($k-- < 0) {
        return;
    }*/
    for ($i = $index; $i < $l; $i++) {
       // $asdfasdfasdfasdf++;
      //  $coin = $coins[$i];
        //   echo $coin.'<br>';
        // console.log('coin:'+coin,'i:'+i,'sum:'+sum,'max:'+max);
        $coinSum =  $sum + $coins[$i];
        if ($coinSum < $max /*&& $coin != $lastCoin*/) {
            //      $lastCoin = 0;
            // $variation[] = $coin;
            makeSum($coinSum, $max, $i);
            //    array_shift($coins2);
            //    $i--;
            // array_pop($variation);
        } else if ($coinSum == $max) {
            //   $variation[] = $coin;
            //     $tmpVariation  = $variation;
            //     sort($tmpVariation);
            //    $fingerPrint = join('-',$tmpVariation);
            //   if ( !isset( $variationFingerprints[$fingerPrint])) {
            $variations++;
            //$variationFingerprints[$fingerPrint] = '';
            //     $variationsArray[] = $variation;
            //   }

            //   $lastCoin = array_pop($variation);

            //  break;
        }
    }


}

makeSum($sum, $max, 0);
?>
<pre><?
//var_dump($variationsArray   );
/*foreach ($variationsArray as $variationResult) {
    echo ': ' . array_sum($variationResult) . ' : ' . count($variationResult) . '<br>';
}*/

//var_dump($variationsArray);
//var_dump($variationsArray[count($variationsArray)-1]);
echo '<br><br>';
var_dump($k);
var_dump($asdfasdfasdfasdf);
var_dump($variations);
var_dump(microtime(true) - $time);
echo '<br>------------------------<br>';
?></pre><?
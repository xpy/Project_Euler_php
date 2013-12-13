<?php
include('includes/functions.php');

$time_start = microtime_float();

function findLargestPalindrome($digits)
{
    $tmpNum1 = $tmpNum2 = $num1 = $num2 = pow(10, $digits) - 1;
    $smallest = pow(10, $digits - 1);
    $product = $num1 * $num2;
    $tmpNum1++;
    $guard = $num1 - $smallest;
    $largest = 0;
    $firstChoice = '';
    while ($tmpNum1 > $smallest) {
        $tmpNum1 -= 1;
        $product = $tmpNum1 * $num2;
        $reduce2 = 0;
        //  echo "----outside".$tmpNum1.'<br>';

        while (!isPalindrome($product) && $reduce2 < $guard) {
            $product -= $tmpNum1;
            $reduce2++;
        //    echo  "inside".$reduce2.'-'.$product.'-'.$guard.'<br>';
        }
        if($firstChoice == '' && isPalindrome($product)){$firstChoice = $tmpNum1; $smallest = $num2 - ($reduce2-1);}
        $largest = max($product,$largest);
    }
    echo $tmpNum1. '--' .($num2 - ($reduce2-1)) . '|';
    return $largest;
}

?>
<pre><?php echo  findLargestPalindrome(3);?></pre>

<?php
$time_end = microtime_float();
$time = $time_end - $time_start;
echo $time;
?>
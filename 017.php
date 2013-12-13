<?php
include('includes/functions.php');
ini_set('max_execution_time', 1);
ini_set('memory_limit', '-1');
$time_start = microtime_float();
$number = array();
$number[0] = 0;
$number[1] = 3; // one
$number[2] = 3; // two
$number[3] = 5; // three
$number[4] = 4; // four
$number[5] = 4; // five
$number[6] = 3; // six
$number[7] = 5; // seven
$number[8] = 5; // eight
$number[9] = 4; // nine
$number[10] = 3; // ten
$number[11] = 6; // eleven
$number[12] = 6; // twelve
$number[13] = 8; // thirteen
$number[14] = 8; // fourteen
$number[15] = 7; // fifteen
$number[16] = 7; // sixteen
$number[17] = 9; // seventeen
$number[18] = 8; // eighteen
$number[19] = 8; // nineteen
$number[20] = 6; // twenty
$number[30] = 6; // thirty
$number[40] = 5; // forty
$number[50] = 5; // fifty
$number[60] = 5; // sixty
$number[70] = 7; // seventy
$number[80] = 6; // eighty
$number[90] = 6; // ninety
$number[100] = 10; // hundred and
$number[1000] = 8; // thousand

function numOfLetters($num)
{
	global $number;
	$sum = 0;
	$th = floor($num/1000);
	$sum += ($number[$th] + ($th==0?0:1) * $number[1000]);
	$h = floor(($num%1000)/100);
	$sum += ($number[$h] + ($h==0?0:1)*$number[100]);
	$d = $num%100;
	if(isset($number[$d])){$sum+=$number[$d];}
	else{ $sum+=$number[floor($d/10)*10] +$number[$d%10];}
	if($d==0){$sum-=3;}
	return $sum;
}
$n = isset($_GET['n'])?$_GET['n']:0;
$megasum = 0;
for($i = 1; $i<=999 ;$i++)
{ $megasum += numOfLetters($i);}
?>
<pre><?php echo  '--'. ($megasum+11) .'--'.numOfLetters($n);?></pre>

<?php
$time_end = microtime_float();
$time = $time_end - $time_start;
echo $time;
?>
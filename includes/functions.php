<?php

function primesTo($to)
{
    $odds = Array();
    $cur = 3;
    // $odds[] = $cur;
    $flag = true;
    $preOdd = -1;
    $numOfOdds = 0;
    $prek = 0;
    while ($cur < $to) {
        if ($flag) {
            $sqrtFlag = true;
            $sqrtCur = sqrt($cur);
            if (($sqrtCur) == floor($sqrtCur)) {
                $flag = false;
            }
            for ($k = $prek; $sqrtFlag && $k < $numOfOdds; $k++) {
                if ($odds[$k] >= $sqrtCur) {
                    $sqrtFlag = false;
                    $prek = $k;
                }
            }
        } else {
            $flag = true;
        }
        for ($i = 0; $flag && $i < $k; $i++) {
            if (bcmod($cur, $odds[$i]) == 0) {
                $flag = false;
            }
        }
        if ($flag) {
            $odds[] = $cur;
            $numOfOdds++;
        }
        $cur += 2;
    }
    return $odds;
}


function isPrime($num)
{
    if ($num == 2) {
        return true;
    }
    $sqrt = sqrt($num);
    if ($sqrt == floor($sqrt)) {
        return false;
    }
    $sqrt = floor($sqrt);
    for ($i = 3; $i <= $sqrt; $i += 2) {
        if (bcmod($num, $i) == 0) {
            return false;
        }
    }
    return !(bcmod($num, 2) == 0);
}

function nextPrime($num)
{
    if (bcmod($num, 2) == 0) {
        $num += 1;
    } elseif (isPrime($num)) {
        $num += 2;
    }
    while (!isPrime($num)) {
        $num += 2;
    }
    return $num;
}

//3 5 7 9 11 13 15 17 19 21

function isPalindrome($num)
{
    $num = (string)$num;
    if (strlen($num) == 1) {
        return true;
    }
    $partSize = floor(strlen($num) / 2);
    $part1 = substr($num, 0, $partSize);
    $part2 = substr($num, -1 * $partSize);
    $part2 = strrev($part2);
    return $part1 == $part2;
}

function isPandigital($num)
{
    $num = str_split($num);
    if (in_array(0, $num) || !in_array(1, $num)) {
        return false;
    }
    sort($num);
    $flag = true;

    for ($i = 1, $l = count($num); $i < $l && $flag; $i++) {
        $flag = ($num[$i] - $num[$i - 1]) == 1;
    }

    return $flag;

}

function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}

function sumOfDigits($num)
{
    $sum = 0;
    $num = (string)$num;
    for ($i = 0; $i < strlen($num); $i++) {
        $sum += $num[$i];
    }
    return $sum;
}

function parag($num)
{
    if ($num > 0) {
        return bcmul((string)$num, (string)parag($num - 1));
    }
    return 1;
}

function factorial($num){
    return parag($num);
}
function divisors($num)
{
    if (isPrime($num)) {
        return array(1, $num);
    }
    $border = $num;
    $step = $num % 2 + 1;
    $divisors = array();
    for ($i = 1; $i <= $border; $i += $step) {
        if (!($num % $i)) {
            $divisors[] = $i;
            $border = ($num / $i);
            $divisors[] = $border;
        }
    }
    if ($num != 1) {
        $divisors[] = $num;
    }
    $divisors = array_unique($divisors);
    sort($divisors);
    return ($divisors);
}

function properDivisors($num)
{
    $divisors = divisors($num);
    array_pop($divisors);
    return ($divisors);
}


function addArrays($array1, $array2)
{
    $len = min(count($array1), count($array2));
    $ret = array();
    for ($i = 0; $i < $len; $i++) {
        $ret[$i] = $array1[$i] + $array2[$i];
    }
    return $ret;
}

function stringASCIISum($str)
{
    $sum = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        $sum += ord($str[$i]) - 64;
    }
    return $sum;
}

function leapYear($year)
{
    return (($year % 100 == 0) ? ($year % 400 == 0) : ($year % 4 == 0));
}

function monthDays($month, $year = 1)
{
    $days = array('31', '28', '31', '30', '31', '30', '31', '31', '30', '31', '30', '31');
    if (leapYear($year)) {
        $days[1] = '29';
    }
    return $days[$month - 1];
}

function yearDays($year)
{
    return leapYear($year) ? 366 : 365;
}

function daysBetweenDates($d1, $m1, $y1, $d2, $m2, $y2)
{
    $days1 = 0;
    $tmpy1 = $y1;
    while ($tmpy1 < $y2 - 1) {
        $days1 += yearDays($tmpy1++);
    }

    $tmpm1 = $m1;
    if ($y1 == $y2) {
        while ($tmpm1 < $m2 - 1) {
            $days1 += monthDays($tmpy1++, $y1);
        }
    } else {
        $tmpm1 = $m1 + 1;
        while ($tmpm1 <= 12) {
            $days1 += monthDays($tmpm1++, $y1);
        }
        for ($i = 1; $i < $m2; $i++) {
            $days1 += monthDays($i, $y2);
        }
    }
    if ($y1 == $y2 && $m1 == $m2) {
        $tmpd1 = $d1;
        while ($tmpd1 < $d2) {
            $days1++;
            $tmpd1++;
        }
    } else if ($y1 != $y2 && $m1 != $m2 && $d1 != $d2) {
        $md1 = monthDays($m1, $y1);
        $days1 += ($md1 - $d1) + $d2;
    }
    return $days1 + 1;
}

function isPerfect($num)
{
    return (array_sum(properDivisors($num)) == $num);
}

function isDeficient($num)
{
    return (array_sum(properDivisors($num)) < $num);
}

function isAbundant($num)
{
    return (array_sum(properDivisors($num)) > $num);
}

function isTriangle($num)
{

//    $delta = 1 - 4*2*$num*-1;
    $delta = 1 + 8 * $num;
    $x1 = (-1 + sqrt($delta)) / 2;
    //  $x2 = (-1 - sqrt($delta))/2;

//    return [$x1,$x2];
    return $x1;

}

function isPentagonal($num)
{

//    $delta = 1 - 4*3*2*$num*-1;
    $delta = 1 + 24 * $num;
//    $x1 = (1 + sqrt($delta))/(2*3);
    $x1 = (1 + sqrt($delta)) / 6;
    //  $x2 = (-1 - sqrt($delta))/2;

//    return [$x1,$x2];
    return $x1;

}

function isHexagonal($num)
{

//    $delta =1 - 4*2*$num*-1;
    $delta = 1 + 8 * $num;
    // $x1 = (1 + sqrt($delta))/(2*2);
    $x1 = (1 + sqrt($delta)) / 4;
    //  $x2 = (-1 - sqrt($delta))/2;

//    return [$x1,$x2];
    return $x1;

}

function nCr($n,$r){
    return factorial($n)/(factorial($r)*factorial($n-$r));
}
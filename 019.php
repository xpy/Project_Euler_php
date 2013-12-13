<?php
include('includes/functions.php');
ini_set('max_execution_time', 10);
ini_set('memory_limit', '-1');
$time_start = microtime_float();

$megaSum = '0';

$day = array('sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday');
$Ystart = 1901;
$Mstart = 1;
$Dstart = 1;
$DWstart = 1;
$start = 0;


$Yend = 2000;
$Mend = 12;
$Dend = 31;

$Ynow = 1900;
$Mnow = 1;
$Dnow = 1;

$days = daysBetweenDates($Dstart, $Mstart, $Ystart, $Dend, $Mend, $Yend);
$startingDay = 1;
$currentWeekDay = $startingDay;
$currentDay = $Dstart;
$currentMonth = $Mstart;
$oldMonth = $Mstart;
$currentYear = $Ystart;
$oldYear = $Ystart;
$monthDays = monthDays($currentMonth, $currentYear);
$yearDays = yearDays($currentYear);
$oldYear = $currentYear;
for ($i = 1; $i <= $days; $i++) {
    if($currentDay == 1 && ((($i+$startingDay)%7) == 0) ){ echo "FIRST DAY OF THE MONTH! IS SUNDAY <br>"; $megaSum++;}
    if ($currentYear != $oldYear) {
        $currentDay = 1;
        $currentMonth = 1;
        $oldYear = $currentYear;
    }
    if ($currentMonth != $oldMonth) {
        $monthDays = monthDays($currentMonth, $currentYear);
        $currentDay = 1;
        $oldMonth = $currentMonth;
    }
    if($currentDay%$monthDays == 0){if($currentMonth%12 == 0){$currentYear++;$currentMonth=1;}$currentMonth++;$currentDay=1; }
    else{  $currentDay++; }
}
?>
<pre><?php echo  '--' . daysBetweenDates($Dstart, $Mstart, $Ystart, $Dend, $Mend, $Yend) . '--'.$megaSum;?></pre>

<?php
$time_end = microtime_float();
$time = $time_end - $time_start;
echo $time;
?>
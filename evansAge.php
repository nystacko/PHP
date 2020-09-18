<?php
/*
Plugin Name: Get Evan's Age
Plugin URI: http://www.stacklebox.com
Description: A couple of functions to compute Evan's age in weeks and months.
Author: Steve Stackle
Version: 1.2.2
Author URI: http://www.stacklebox.com
*/

function getEvansAge()
{
/* START EVAN AGE STUFF */
function ageYears($bMonth,$bDay,$bYear) {
	$cMonth = date('n');
	$cDay = date('j');
	$cYear = date('Y');
	if(($cMonth >= $bMonth && $cDay >= $bDay) || ($cMonth > $bMonth)) {
		return ($cYear - $bYear);
	} else {
		return ($cYear - $bYear - 1);
	}
}

/* MONTHS OLD */
function ageMonths($bMonth,$bDay,$bYear) {
	$cMonth = date('n');
	$cDay = date('j');
	$cYear = date('Y');
	$monthsAdded = 12 - $bMonth;
	$monthsOld = $cMonth + $monthsAdded;
	/* || is OR */
	if($cDay >= $bDay) {
		return $monthsOld;
	} else {
		return $monthsOld - 1;
	}
}
/* -------------------------- */
/* REMAINING DAYS FOR MONTHS OLD*/
function remainingDays($bDate) {
	$thisYear = date('Y');
	$thisMonth = date('n');
	$thisDay = date('j');
	if($thisDay < $bDate) {
		if ($thisMonth == 1) {
			$subtractedMonth = 12;
			$thisYear = $thisYear - 1;
		} else {
			$subtractedMonth = $thisMonth - 1;
		}
	} else {
		$subtractedMonth = $thisMonth;
	}
	$dateString = $thisYear . "-" . $subtractedMonth . "-" . $bDate;
	$daysSince = (strtotime(date("Y-m-d")) - strtotime($dateString)) / (60 * 60 * 24);
	/* daysSince = current date minus the day of birth the previous month */
	if ($thisDay == $bDate){
		$daysSince = 0;
	}
	return $daysSince;
}
/* -------------------------- */

/* WEEKS AND DAYS OLD */
$days = (strtotime(date("Y-m-d")) - strtotime("2008-12-26")) / (60 * 60 * 24);
$days = ceil($days); 
$extraDays = $days % 7;
$weeks = floor($days / 7);  
$dayString2 = " days ";
if ($extraDays == 1) {
	$dayString2 = " day ";
}
$dayString = " days ";
if (remainingDays(26) == 1) {
	$dayString = " day ";
}
$weekString =  " weeks &amp; ";
$monthString = " months &amp; ";
if (ageMonths(12,26,2008) ==1) {
	$monthString = " month &amp; ";
}
$yearString = " years &amp; ";
if (ageYears(12,26,2008) ==1) {
	$yearString = " year &amp; ";
}
if ($weeks > 52) {
	$yrWeeks = ageYears(12,26,2008) * 52;
	$weeks = $weeks - $yrWeeks;
}
if ($weeks == 1) {
	$weekString =  " week &amp; ";
}
if (ageYears(12,26,2008)==0) {
	print "Evan is " . $weeks . " weeks &amp; " . $extraDays . " day(s) old.<br />"; 
	print "Evan is " . ageMonths(12,26,2008) . " months &amp; " . remainingDays(26) . " day(s) old.<br />";
} else {
	/* COMMENTED OUT 14.March.2011 */
	/* print "Evan is " . ageYears(12,26,2008) . $yearString . $weeks . $weekString . $extraDays . $dayString2 . " old.<br />"; */
	print "Evan is " . ageYears(12,26,2008) . $yearString . ageMonths(12,26,2008) . $monthString . remainingDays(26) . $dayString . " old.<br />";
}

}

/* function widget_evansAge($args) {
  extract($args);
  echo $before_widget;
  echo $before_title;?>Evan's Age<?php echo $after_title;
  getEvansAge();
  echo $after_widget;
}

function evansAge_init()
{
  register_sidebar_widget(__('Evan\'s Age'), 'widget_evansAge');    
}
add_action("plugins_loaded", "evansAge_init");
?> */
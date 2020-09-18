 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Euler Project Results</title>
</head>

<body>
<!-- put this at the top of the page --> 
<?php 
   $mtime = microtime(); 
   $mtime = explode(" ",$mtime); 
   $mtime = $mtime[1] + $mtime[0]; 
   $starttime = $mtime; 
;?> 

<!-- put other code and html in here -->
<?php 
   echo "<p>Euler Project Problem 6</p>"; 
   echo "<p> The sum of the squares of the first ten natural numbers is,

12 + 22 + ... + 102 = 385<br>
The square of the sum of the first ten natural numbers is,

(1 + 2 + ... + 10)2 = 552 = 3025<br>
Hence the difference between the sum of the squares of the first ten natural numbers and the square of the sum is 3025  385 = 2640.<br>

Find the difference between the sum of the squares of the first one hundred natural numbers and the square of the sum.</p>"; 
$sumSqrs = 0;
for ($i = 1; $i < 101; $i++) {
	$sumSqrs += pow($i, 2);
}
echo "The sum of the squares is: " . $sumSqrs . "\n";

$sum = 0;
for ($j = 1; $j < 101; $j++) {
	$sum += $j;
}
$sqSums = pow($sum, 2);
echo "The square of the sums is: " . $sqSums . "\n";
$diff = abs ($sumSqrs - $sqSums);
echo "The difference between them is: " . $diff . "\n";

;?>
<!-- put this code at the bottom of the page -->
<?php 
   $mtime = microtime(); 
   $mtime = explode(" ",$mtime); 
   $mtime = $mtime[1] + $mtime[0]; 
   $endtime = $mtime; 
   $totaltime = ($endtime - $starttime); 
   echo "<p>This page was created in ".$totaltime." seconds</p>"; 
;?>
 
</body>
</html>

 

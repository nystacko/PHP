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

<!-- The prime factors of 13195 are 5, 7, 13 and 29. -->
<!-- What is the largest prime factor of the number 600851475143 ? -->

<?php 

Echo "Euler Project Prime Checker"."<br>";
$num = 23;
function isPrime ( $n ){
   if ( $n < 2 ) return false;
   if ( $n == 2 ) return true;
   if ( $n%2 == 0 ) return false;
   for ( $m=3; $m<=sqrt($n); $m+=2 )
   {
      if ( $n%$m == 0 ) return false;
   }
   return true;
}
if (isPrime($num)) {
	echo $num . " is a prime number.";
} else {
	echo $num . " is not a prime number.";
}
 

?> 
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

 

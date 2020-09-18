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
   Echo "Euler Project Problem 9"."<br>"; 
	Echo "<p>
	A Pythagorean triplet is a set of three natural numbers, a  b  c, for which, a<sup>2</sup> + b<sup>2</sup> = c<sup>2</sup><br>
	For example, 3<sup>2</sup> + 4<sup>2</sup> = 9 + 16 = 25 = 5<sup>2</sup>.<br>
	There exists exactly one Pythagorean triplet for which a + b + c = 1000.<br>
	Find the product abc.</p>"; 
   function poptws($x = 12) {
	// Find the product of the Pythagorean triplet {a,b,c}, for which a + b + c = $x.
	$p = 0;
	for ($m = 1; $m < 6; $m++) {
		for ($n = 1; $n < 21; $n++) {
			$a = pow($n, 2) - pow($m, 2);
			$b = 2 * $m * $n;
			$c = pow($n, 2) + pow($m, 2);
			if (($a + $b + $c) == $x) {
				$p = $a * $b * $c;
				break 2;
			}
		}
	}
	return $p;
}
echo "The product is: " . poptws(1000);
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

 

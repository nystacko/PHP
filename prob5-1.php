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
   echo "<p>Euler Project Problem 5</p>"; 
   echo "<p> 2520 is the smallest number that can be divided by each of the numbers from 1 to 10 without any remainder.<br>
	What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20?</p>";
	function findfactors($n){
        $f=array();
        for ($i=2;$n>1;){
                if (!($n%$i)){
                        $n=intval($n/$i);
                        $f[$i]++;
                } else $i++;
        }
        return $f;
	}
	$factors=array();
	for ($i=1;$i<=20;$i++){
        $r=findfactors($i);
        foreach ($r as $f=>$n)
                if ($n>$factors[$f]) $factors[$f]=$n;
	}
	$num=1;
	foreach ($factors as $f=>$n) {
	$num*=pow($f,$n);
	}
	echo "$num\n";
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

 

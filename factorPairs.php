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

Echo "Euler Project Problem 3"."<br>";
$num = 50;
/* $num = 6008; */
Echo "The number is: " . $num . "<br>";
function factorize($num) { 
  // Returns a sorted array of the prime factorization of $num 
  // Caches prior results.  Returns empty array for |$num|<2 
  // eg. factorize(360) => [5, 3, 3, 2, 2, 2] 
  static $aFactors = array(); 
  if (2>$num=abs($num)) return array();  // negatives, 1, 0 

  if ($aFactors[$key = "x$num"]) {     // handles doubles 
    // Been there, done that 
    if (($factor=$aFactors[$key])==$num) return array($num); 
    return array_merge(factorize($num/$factor),array($factor)); } 
  
  // Find a smallest factor 
  for ($sqrt = sqrt($num),$factor=2;$factor<=$sqrt;++$factor) 
    if (floor($num/$factor)==$num/$factor) 
      return array_merge(factorize($num/$factor), 
                         array($aFactors[$key] = $factor)); 

  return (array($aFactors[$key] = $num));  }  // $num is prime 

function primeFactors($num) { 
  // Returns an array of each distinct prime factor of $num 
  // eg. primeFactors(360) => [5, 3, 2] 
  return array_keys(array_flip(factorize($num)));  
} 

function allFactors($num) { 
  // Returns an (unsorted) array of each factor of $num 
  // eg. allFactors(30) => [1, 5, 3, 15, 2, 10, 6, 30] 
  // eg. allFactors(64) => [1, 2, 4, 8, 16, 32, 64] 
  $aFacts = array(1 => 1); 
  foreach (factorize($num) as $factor) 
    foreach ($aFacts as $fact => $whatever) 
      $aFacts[$fact * $factor] = 1; 
  return array_keys($aFacts);
} 
  

$primelist=primeFactors($num);
echo "Prime Factors are: <br>";
for($i=0; $i<count($primelist); $i++){
	echo "$primelist[$i]<br>";
}

$factorlist=allFactors($num);
echo "<br>All the factors are:<br> ";
for($i=0; $i<count($factorlist); $i++){
	echo "$factorlist[$i]<br>";
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

 

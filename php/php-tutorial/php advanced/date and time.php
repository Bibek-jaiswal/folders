<?php 
echo "Today is" . date("Y.m.d");
echo "<br>";
echo " and today is " . date("l");
echo "<br>";

$d=strtotime("tomorrow");
echo  "Tomorrow is " . date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo "The next saturday is on " . date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");
echo "The date after 3months will be " . date("Y-m-d h:i:sa", $d) . "<br>";

// The next 6 saturdays or any days to be determined

$startdate=strtotime("Saturday");
$enddate=strtotime("+6 weeks", $startdate);

while ($startdate < $enddate) {
  echo date("M d", $startdate) . "<br>";
  $startdate = strtotime("+1 week", $startdate);
}

// To determine the no. of days left for a specific date
$d1=strtotime("August 04");
$d2=ceil(($d1-time())/60/60/24);
echo "There are " . $d2 ." days until 4th of August.";
echo "<br>";
echo "<br>";
echo "<br>";





echo "<br>";
echo "<br>";
echo "<br>";


?>
© 2010-<?php echo date("Y");?>
<br>
<br>
<br>
<?php readfile("readfile.html"); ?>


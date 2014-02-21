<?php
$_fp = fopen("angch.txt", "r");
$noOfInput = fgets($_fp);
$noOfChoc = fgets($_fp);

$i = 0;
$count = 0;
$chocArr = Array();
while($i < $noOfInput)
{
	array_push($chocArr, trim(fgets($_fp)));
	$i++;
}
sort($chocArr);
$i = 0;
$minDiff = 0;
while($i < (sizeof($chocArr)- $noOfChoc + 1))
{
	$min = min(array_slice($chocArr, $i, $noOfChoc));
	$max = max(array_slice($chocArr, $i, $noOfChoc));
	$diff = $max - $min;
	if ($minDiff == 0 || $minDiff > $diff) {
		$minDiff = $diff;
	}
	$i++;
}
echo $minDiff;
?>
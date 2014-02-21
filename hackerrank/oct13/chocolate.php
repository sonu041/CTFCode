<?php
$_fp = fopen("choin.txt", "r");
$no = fgets($_fp);
$i = 0;
$count = 0;
while($i < $no)
{
	$ip = fgets($_fp);
	$inputs = explode(" ",$ip);
	$n = trim($inputs[0]);
	$c = trim($inputs[1]);
	$m = trim($inputs[2]);
	$choc = intval($n/$c);
	$count = $choc;
	while($choc >= $m) {
		$chocRap = intval($choc/$m);
		$chocRemainingRap = $choc%$m;
		$count += $chocRap;
		$choc = $chocRap + $chocRemainingRap;
	}
	echo $count."\n";
	$i++;
}
?>
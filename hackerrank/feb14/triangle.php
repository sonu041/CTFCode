<?php
$_fp = fopen("tri.txt", "r");
$no = fgets($_fp);
$inputs = array();
$i = 0;
while($i < $no)
{
	$ip = trim(fgets($_fp));
	$inputs[] = (explode(" ",$ip));
	sort($inputs[$i]);
	$i++;
	
}

//asort($inputs);
array_multisort($inputs);
//var_dump($inputs);

$farr = array();
//var_dump(array_count_values($inputs));
foreach ($inputs as $val)
{
	$farr[] = implode(',', $val);
	//var_dump($farr);
}
$ss =  array_count_values(array_count_values($farr));
//var_dump($ss);
echo $ss[1];


?>
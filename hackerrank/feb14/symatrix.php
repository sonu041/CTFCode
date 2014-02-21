<?php
$_fp = fopen("choin.txt", "r");
$no = fgets($_fp);
$i = 0;
$ij = 0;
$count = 0;
$hor = true;
$ver = true;
$row = array();
while($i < $no)
{
	$matno = fgets($_fp);
	//fscanf(STDIN, "%s\n", $no);
	while($ij < $matno)
	{
		$row[] = trim(fgets($_fp));
		$ij++;
	}

	//Horizontal checking
	$x = 0;
	while ($x < $matno/2) {
		if($row[$x] != $row[$matno - $x -1]) {
			$hor = false;
		} else {
		}
		$x++;
	}
	
	//Vertical checking
	$p = 0;
	while ($p < $matno)
	{
		$x = 0;
		while ($x < $matno/2) {
			if($row[$p][$x] != $row[$p][$matno - $x -1]) {
				$ver = false;
			} else {
			}
			$x++;
		}
		$p++;
	}
	
	if($hor && $ver) {
		echo 'BOTH';
	} elseif ($hor) {
		echo 'HORIZONTAL';
	} elseif ($ver) {
		echo 'VERTICAL';
	} else {
		echo 'NO';
	}
	$i++;
	$ij = 0;
	$row = array();
	$hor = true;
	$ver = true;
	if($i!=$no) {echo PHP_EOL; }
}
?>
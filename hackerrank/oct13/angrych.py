f = open("angch.txt", "r")
noOfInput = int(f.readline().rstrip())
noOfChoc = int(f.readline().rstrip())


i = 0
count = 0
chocArr = []
while(i < noOfInput):
    chocArr.append(int(f.readline().rstrip()))
    i = i+1
chocArr.sort()

i=0
minDiff = 0
while(i<(len(chocArr) - noOfChoc + 1)):
    minVal = min(chocArr[i:i+noOfChoc])
    maxVal = max(chocArr[i:i+noOfChoc])
    diff = maxVal - minVal
    if(minDiff == 0 or minDiff > diff):
        minDiff = diff
    i = i + 1
print minDiff
"""    
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
"""

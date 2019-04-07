<?php
$inputCount = ReadLine();
$outputCount = 0;
$inputDataString = ReadLine();
$inputDataArr = explode(",",$inputDataString);
$lengthInputDataArr = count($inputDataArr);
$generateHashArr = GenerateHash($inputDataArr);

for($i=0; $i<$lengthInputDataArr; $i++)
{
  for($j=$i+1; $j<$lengthInputDataArr; $j++)
  {
    if($generateHashArr[$i]>$generateHashArr[$j])
    {
      $outputCount++;
    }
  }
}
echo ($outputCount.PHP_EOL);

function GenerateHash($data)
{
  array_walk($data, 'MyOct');
  array_walk($data, 'SumOfDigit');
  return $data;
}
function MyOct(&$item1, $key)
{
  $item1 = decoct($item1);
}
function SumOfDigit(&$item1, $key)
{
  $item1 = array_sum(str_split($item1));
}

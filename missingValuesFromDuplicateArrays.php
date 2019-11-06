<?php

$arr = [1, 1, 2, 3, 5, 5, 7, 9, 9, 9];

$size = sizeof($arr);
$temp = array();
for($i = 1 ; $i < $size; $i++)
{
	$temp[$i] = 0;
}
for($i = 0 ; $i < $size; $i++)
{
	$temp[$arr[$i]] = 1;
}

$tempSize = sizeof($temp);

for($i = 1; $i < $tempSize; $i++)
{
	if($temp[$i] == 0)
		echo $i." ";
}


?>
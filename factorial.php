<?php
function getFactorial($n)
{
	$result=1;
	for($i=1; $i <= $n; $i++)
		$result*=$i;
	return $result;
}
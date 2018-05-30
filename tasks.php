<?php

function repeat($array){
	echo "[";
	for($i = 0; $i<3; $i++)
	{
		echo implode(',',$array);
		if ($i!=2) echo ",";
	}
	echo "]";
}

repeat([1,2,3]);


function reformat($string){
	
	$result = strtolower($string);
	$result = str_replace(['a','e','i','o','u'], '', $result);
	echo ucfirst($result);
	
}

reformat("liMeSHArp DeveLoper TEST");


function next_binary_number($numArray){
	$array_len = count($numArray);
	for($i = $array_len-1; $i>=0; $i--)
	{
		if($numArray[$i] == 0)
		{
			for($j = $i; $j<$array_len; $j++)
			{
				$numArray[$j]=0;
			}
			$numArray[$i]=1;
			return $numArray;
		}
	}
	$result = [1];
	echo '1,';
	for($i=0; $i<$array_len; $i++)
	{
		$result[]=0;
	}
	return $result;
}

var_dump(next_binary_number([1,0,1,0,0,0,1]));


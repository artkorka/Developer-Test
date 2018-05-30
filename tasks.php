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



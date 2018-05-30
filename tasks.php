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



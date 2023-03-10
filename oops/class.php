<?php

class abc
{
	function sum()
	{
		$a=10;
		$b=20;
		echo $sum=$a+$b;
	}
	function multi()
	{
		$a=10;
		$b=20;
		echo $multi=$a*$b;
	}
}
$obj=new abc;
$obj->sum();
$obj->multi();

?>
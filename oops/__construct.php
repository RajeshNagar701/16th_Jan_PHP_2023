<?php

class abc
{
	function __construct()
	{
		echo "Hi i am __construct magic function<br>";
	}
	
	function sum()
	{
		$a=10;
		$b=20;
		echo $sum=$a+$b;
	}
}
$obj=new abc;
$obj->sum();
?>
<?php
class Friends
{
	function Hi_All()
	{

	}

	function Hi_Alex()
	{

	}

	function Hi_Maria()
	{

	}

	function Hi_Vika()
	{

	}

	function Hi_Nastya()
	{

	}
}

$the_methods = get_class_methods('Friends');

foreach ($the_methods as $method)
{
	echo $method."<br>";
}
?>

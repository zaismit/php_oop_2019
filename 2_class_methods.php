<?php
class Friends
{
	function Hi_All()
	{

	}
}

$the_methods = get_class_methods('Friends');

foreach ($the_methods as $method)
{
	echo $method."<br>";
}
?>

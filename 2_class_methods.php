<?php
class friendship
{
	function show_friendship()
	{

	}
	
	function add_friendship()
	{

	}

	function update_friendship() 
	{

	}

	function delete_friendship()
	{

	}
}

$the_methods = get_class_methods('friendship');

foreach ($the_methods as $method)
{
	echo $method."<br>";
}
?>

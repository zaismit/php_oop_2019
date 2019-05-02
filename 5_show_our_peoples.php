<?php
class friendship
{
    public $name;
    public $age;
    public $mobile;
    public $hobby;
    
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

$friendship_one = new friendship;

$firstfriend = ($friendship_one -> name = "Alex");

echo $firstfriend;

$secondfriend = ($friendship_one -> name = "Olga");

echo $secondfriend;
?>

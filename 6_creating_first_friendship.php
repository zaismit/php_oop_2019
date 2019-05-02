<?php
class friendship
{
    public $name;
    public $age;
    public $mobile;
    public $hobby;
    
    function show_friendship()
    {
       
    }
    function add_friendship($firstfriend, $secondfriend)
    {
        
       $firstfriendship = ( ($this -> name = $firstfriend) . " and ". ($this -> name= $secondfriend) . " now friends");
       echo  $firstfriendship;
       
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

$secondfriend = ($friendship_one -> name = "Olga");

$friendship_one->add_friendship($firstfriend,$secondfriend );

?>

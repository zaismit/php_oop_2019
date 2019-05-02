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
    function add_friendship( $first_friend, $second_friend )
    {
        
       $first_friendship = ( ( $this -> name = $first_friend ) . " and ". ( $this -> name= $second_friend ) . " now friends" );
       echo  $first_friendship;
       
    }
    function update_friendship() 
    {
        
    }
    function delete_friendship()
    {
        
    }
}

$friendship_one = new friendship;

$first_friend = ( $friendship_one -> name = "Alex" );

$second_friend = ( $friendship_one -> name = "Olga" );

$friendship_one -> add_friendship ( $first_friend, $second_friend );

?>

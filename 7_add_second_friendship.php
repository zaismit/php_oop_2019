<?php
class friendship
{
    public $name;
    public $age;
    public $mobile;
    public $hobby;
    
    function add_friendship ( $first_friend, $second_friend )
    {
        
       $happy_friendship = ( ( $this -> name = $first_friend ) . " and ". ( $this -> name= $second_friend ) . " now friends<br>" );
       echo  $happy_friendship;
       
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

$friendship_one -> add_friendship( $first_friend, $second_friend );


$friendship_two = new friendship;

$first_friend = ( $friendship_two -> name = "John" );

$second_friend = ( $friendship_two -> name = "Evy" );

$friendship_two -> add_friendship ( $first_friend, $second_friend );

?>

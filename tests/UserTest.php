<?php

use \PHPUnit\Framework\TestCase;



// or we can call from cli phpunit --botstrap="vendor/autoload.php"
class UserTest extends  TestCase {



    public function testReturnsFullName(){

        $user = new User;
        $user->first_name = 'Sujay';
        $user->sur_name = 'Ghosh';

        $this->assertEquals('Sujay Ghosh', $user->getFullName());
    }



    public function testFullNameIsEmptyByDefault(){
        $user = new User;


        $this->assertEquals('', $user->getFullName());
        
    }

    /**
     * @test
     */

    public function user_has_name() {
        $user = new User();
        $this->assertEquals('', $user->getFullName());
    }


}
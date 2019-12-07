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


    public function testNotificationIsSent(){
        $user = new User;
        $user->email = 'sujayamway2018@gmail.com';

        $mock_mailer = $this->createMock(Mailer::class);

        $mock_mailer->expects($this->once())->method('sendMessage')->with($this->equalTo('sujayamway2018@gmail.com'), $this->equalTo('hello'))->willReturn(true);
        

        $user->setMailer($mock_mailer);

        $this->assertTrue($user->notify("hello"));
    }


}
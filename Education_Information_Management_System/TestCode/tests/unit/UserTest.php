<?php
use \App\Models\User;
use \PHPUnit\Framework\TestCase;

class UserTest extends TestCase {

	public function testReturnUserName(){
        $user = new User;
        $user->setUserName('Ripa');
        $this->assertEquals($user->getUserName(), 'Ripa');
    }

    public function testReturnCourseName(){
        $user = new User;
		$user->setCourseName('Software Engineering');
        $this->assertEquals($user->getCourseName(), 'Software Engineering');
    }

    public function testReturnCourseCode(){
        $user = new User;
		$user->setCourseCode('CSE470');
        $this->assertEquals($user->getCourseCode(), 'CSE470');
    }

    public function testReturnEmailAddress(){
		$user = new User;
		$user->setEmail('ripasarkar01@gmail.com');
        $this->assertEquals($user->getEmail(), 'ripasarkar01@gmail.com');
    }

    public function testReturnAddress(){
        $user = new User;
		$user->setAddress('Green Road, Dhaka');
        $this->assertEquals($user->getAddress(), 'Green Road, Dhaka');
    }

      
    /*public function testUserNameIsEmptyByDefault() {
        $user = new User;
        $user->setUserName('Rinku');
        $this->assertEquals($user->getUserName(), '');
    }
    public function testCourseCodeShouldCorrect() {
        $user = new User;
		$user->setCourseCode('CSE470');
        $this->assertEquals($user->getCourseCode(), 'CSE4');
    } 
    public function testAddressSpellingShouldCorrect() {
        $user = new User;
		$user->setAddress('Green Road, Dhaka');
        $this->assertEquals($user->getAddress(), 'Groen Raod, Dhaka');
    } */

}
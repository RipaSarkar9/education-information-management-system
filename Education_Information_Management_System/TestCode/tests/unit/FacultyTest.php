<?php
use \App\Models\Faculty;
use \PHPUnit\Framework\TestCase;

class FacultyTest extends TestCase {

    public function testReturnFacultyName(){
        $user = new Faculty;
        $user->setFacultyName('Y');
        $this->assertEquals($user->getFacultyName(), 'Y');
    }


    public function testReturnCreateCourse(){
        $user = new Faculty;
		$user->setCreateCourse('CSE570');
        $this->assertEquals($user->getCreateCourse(), 'CSE570');
    }

    public function testReturnCreateClass(){
		$user = new Faculty;
		$user->setCreateClass('CSE570 SAT/THU 8AM');
        $this->assertEquals($user->getCreateClass(), 'CSE570 SAT/THU 8AM');
    }

    public function testReturnBrowseCourse(){
        $user = new Faculty;
		$user->setBrowseCourse('CSE570');
        $this->assertEquals($user->getBrowseCourse(), 'CSE570');
    }

    /*public function testCreateClassTimeShouldBeCorrect(){
		$user = new Faculty;
		$user->setCreateClass('CSE570 SAT/THU 8AM');
        $this->assertEquals($user->getCreateClass(), 'CSE570 SAT/THU 11AM');
    }*/

}

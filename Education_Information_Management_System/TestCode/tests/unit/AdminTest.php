<?php
use \App\Models\Admin;
use \PHPUnit\Framework\TestCase;

class AdminTest extends TestCase {

    public function testReturnAdminName(){
        $user = new Admin;
        $user->setAdminName('P');
        $this->assertEquals($user->getAdminName(), 'P');
    }


    public function testReturnDatabaseManagement(){
        $user = new Admin;
		$user->setDatabaseManagement('User Name = U');
        $this->assertEquals($user->getDatabaseManagement(), 'User Name = U');
    }

    public function testReturnSeeUsersList(){
		$user = new Admin;
		$user->setSeeUsersList('Name of all Users');
        $this->assertEquals($user->getSeeUsersList(), 'Name of all Users');
    }

    public function testReturnChangeUsersStatus(){
        $user = new Admin;
		$user->setChangeUsersStatus('A status change to Teacher');
        $this->assertEquals($user->getChangeUsersStatus(), 'A status change to Teacher');
    }

      
    /*public function testChangeUsersStatusWrong(){
        $user = new Admin;
		$user->setChangeUsersStatus('A status change to Teacher');
        $this->assertEquals($user->getChangeUsersStatus(), 'A status change to User');
    }*/

}

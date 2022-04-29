<?php

namespace App\Models;

class Admin {

    public $adminname;
    public $databasemanagement;
    public $seeuserslist;
	public $changeusersstatus;


	public function setAdminName($adminName) {
		$this->adminname = trim($adminName);
    }
	public function getAdminName() {
		return $this->adminname;
	}


	public function setDatabaseManagement($databaseManagement) {
		$this->databasemanagement = trim($databaseManagement);
	}
	public function getDatabaseManagement() {
		return $this->databasemanagement;
	}


    public function setSeeUsersList($seeusersList) {
		$this->seeuserslist = trim($seeusersList);
	}
	public function getSeeUsersList() {
		return $this->seeuserslist;
	}


	public function setChangeUsersStatus($changeusersStatus) {
		$this->changeusersstatus = trim($changeusersStatus);
	}
	public function getChangeUsersStatus() {
		return $this->changeusersstatus;
	}


}
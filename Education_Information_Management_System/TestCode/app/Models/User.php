<?php

namespace App\Models;

class User {

    public $username;
	public $coursename;
    public $coursecode;
    public $email;
	public $address;


	public function setUserName($userName) {
		$this->username = trim($userName);
    }
	public function getUserName() {
		return $this->username;
	}


    public function setCourseName($courseName) {
		$this->coursename = trim($courseName);
	}
	public function getCourseName() {
		return $this->coursename;
	}


	public function setCourseCode($courseCode) {
		$this->coursecode = trim($courseCode);
	}
	public function getCourseCode() {
		return $this->coursecode;
	}


	public function setEmail($email) {
		$this->email = $email;
	}
    public function getEmail() {
		return $this->email;
	}


	public function setAddress($address) {
		$this->address = trim($address);
	}
	public function getAddress() {
		return $this->address;
	}


}
<?php

namespace App\Models;

class Faculty {

    public $facultyname;
    public $createcourse;
    public $createclass;
	public $browsecourse;


	public function setFacultyName($facultyName) {
		$this->facultyname = trim($facultyName);
    }
	public function getFacultyName() {
		return $this->facultyname;
	}


	public function setCreateCourse($createCourse) {
		$this->createcourse = trim($createCourse);
	}
	public function getCreateCourse() {
		return $this->createcourse;
	}


    public function setCreateClass($createClass) {
		$this->createclass = trim($createClass);
	}
	public function getCreateClass() {
		return $this->createclass;
	}


	public function setBrowseCourse($browseCourse) {
		$this->browsecourse = trim($browseCourse);
	}
	public function getBrowseCourse() {
		return $this->browsecourse;
	}


}
<?php 


class Monster {

	public $name;
	public $age;
	public $weight;
	public $bio;
	private $strength;


	function __construct($name, $age, $weight, $bio, $strength) {
		$this-> name= $name;
		$this-> age= $age;
		$this-> weight= $weight;
		$this-> bio= $bio;
		$this-> strength= $strength;
	}

	function setName($name) {
		$this->name= $name;
	}

	function getName() {
		return $this->name;
	}

	function setAge($age) {
		$this->age= $age;
	}

	function getAge() {
		return $this->age;
	}

	function setWeight($weight) {
		$this->weight= $weight;
	}

	function getWeight() {
		return $this->weight;
	}

		function setBio($bio) {
		$this->bio= $bio;
	}

	function getBio() {
		return $this->bio;
	}


	function setStrength($strength) {
		$this->strength= $strength;
	}

	function getStrength() {
		return $this->strength;
	}
}

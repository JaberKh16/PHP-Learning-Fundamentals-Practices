<?php
	/**
	 * 		Traits Concept In PHP
	 		=====================
	 		Traits in the analogy in PHP which reduce the duplication of code. Basically, if can duplicate code from
	 		one class to another then hava a candidate for trait.
	 		
	 		Traits solve 2 problems in PHP which are -
	 			1. duplication of code
	 			2. single inheritance

	 		Syntax:
	 			trait TraitName{
	 				// normal, static properties
	 				// normal, static and abstract methods
	 			}
	 			class ClassName{
	 				use TraitName; // to use the trait
	 			}

	 		Properties Of Traits
	 		--------------------
	 		1. can reduce code duplication
	 		2. can have normal and static properties
	 		3. can have normal, static and abstract methods
	 		4. can not have a constant properties.
	 		5. nesting of trait is possible inside a trait means a trait can use multiple traits

	 */
?>

<?php

trait HasEngine{
	public string $engine = 'engine';
	public function hasEngine(){
		return $this->engine = $engine;
	}
}

trait HasAdjustedFan{
	public string $has_adjusted_fan = 'Yes';
	public function hasAdjustedFan(){
		return $this->has_adjusted_fan = $has_adjusted_fan;
	}
}


class Plane{
	use HasEngine, HasAdjustedFan;
	public string $model = 'SP 100';
	public function canFly(){
		echo "Model ". $this->model . " has a " . $this->engine . " and adjusted fan: " . $this->has_adjusted_fan . PHP_EOL;
	}
}

class Rocket{
	use HasEngine;
	public string $model = 'RPG SL-50';
	public function canFly(){
		echo "Model ". $this->model . " has a " . $this->engine . " and adjusted fan: " . $this->has_adjusted_fan . PHP_EOL;
	}
}

// create instance
$plane = new Plane;
$plane->canFly();

$rocket = new Rocket;
$rocket->canFly();
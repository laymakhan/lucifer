<!DOCTYPE html>
<html>
	<body>
<?php
class zoo {

	private $animal;
	private $fruit;
	

	public function updatefruit($animal, $fruit) {
		
		
		echo("Function to update fruit '". $fruit . "' for fruit " . $animal);
		
		echo "<br>";
	}

	public function animalName($animal) {
		
		echo("Function to check cage name of animal ". $animal);
		
		echo "<br>";
	}
}

$obj = new zoo();
$obj -> updatefruit('mango', 'strawberry');
$obj -> animalName('hyna'); 
?>
</html>
</body>
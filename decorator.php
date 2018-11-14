<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Decorator</title>
</head>

<body>
	<h1>Decorator Pattern</h1>
	<?php
	//autoload classes and interfaces
	spl_autoload_register(function($classname){
			if(file_exists("classes/$classname.php")){
				include "classes/$classname.php";
			}else if(file_exists("interfaces/$classname.php")){
				include "interfaces/$classname.php";
			}
		});
	//array of taco objects
	$tacoArray = array();
	
	echo '<h2>The Base Class - Concrete Component</h2>';
	
	//define base taco objects
	$beefTaco = new PlainTaco('Hard Shell','Beef 🥩');
	$chickenTaco = new PlainTaco('Soft Shell','Chicken 🐓');
	$tongueTaco = new PlainTaco('Soft Shell','Lengua 👅');
	$fishTaco = new PlainTaco('Soft Shell','Fish 🐠');
	//define base with decorators
	$veggieTaco = new Lettuce(new Salsa(new PlainTaco('Hard Shell','Veggie 🌱')));
	
	//add objects to array
	array_push($tacoArray, $beefTaco, $chickenTaco, $tongueTaco, $fishTaco, $veggieTaco);
	
	//display array
	echo '<ul>';
	foreach($tacoArray as $taco){
		echo '<li>';
		echo $taco->getDescription();
		echo ' costs ';
		echo '$' . number_format($taco->getCost());
		echo '</li>';
	}
	echo '</ul>';
	
	
	echo '<h2>Adding Decorator - Concrete Decorator With a New Variable</h2>';
	
	//new object with decoration
	$tacoGuac = new Guacamole($beefTaco);
	
	//display object
	echo $tacoGuac->getDescription();
	echo ' costs ';
	echo '$' . number_format($tacoGuac->getCost());
	
	
	echo "<h2>The Original Object Hasn't Been Modified</h2>";
	
	//display original object
	echo $beefTaco->getDescription();
	echo ' costs ';
	echo '$' . number_format($beefTaco->getCost());
	
	
	
	echo "<h2>Adding Decorator - Concrete Decorators Without a New Variable</h2>";
	//same object with one decoration
	echo (new Cheese($chickenTaco))->getDescription() . ' costs $' . 
		number_format((new Cheese($chickenTaco))->getCost());
	
	echo '<br />';
	
	//same object with two decorations
	echo (new Habanero
		  (new Guacamole
		   ($tongueTaco)))->getDescription() . 
		' costs $' . number_format(
		(new Habanero
		 (new Guacamole
		  ($tongueTaco)))->getCost());
	
	
	echo "<h2>Again, The Original Object Hasn't Been Modified</h2>";
	
	//display original object
	echo $chickenTaco->getDescription() . ' costs $' . number_format($chickenTaco->getCost());
	echo '<br />';
	echo $tongueTaco->getDescription() . ' costs $' . number_format($tongueTaco->getCost());
	
	
	
	?>
</body>
</html>
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
	
	echo '<h2>The Base Class - Concrete Component</h2>';
	$taco = new PlainTaco('Hard Shell','Beef');
	
	echo $taco->getDescription();
	echo ' costs ';
	echo '$' . number_format($taco->getCost());
	
	echo '<h2>Adding Decorator - Concrete Decorator Guacamole</h2>';
	
	$tacoGuac = new Guacamole($taco);
	
	echo $tacoGuac->getDescription();
	echo ' costs ';
	echo '$' . number_format($tacoGuac->getCost());
	
	
	echo "<h2>The original object hasn't changed</h2>";
	echo $taco->getDescription();
	echo ' costs ';
	echo '$' . number_format($taco->getCost());
	
	?>
</body>
</html>
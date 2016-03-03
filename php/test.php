<?php
	// connect to mongodb
	$m = new MongoClient();

		
	echo "Connection to database successfully";
	
	// select a database
	$col = $m->selectCollection("test", "productos");

	$data = array('name' => 'Rodrigo', 'lastName' => 'Ramos', 'age' => 21);


	$res = $col->find(array('name' => 'Rodrigo'));

	foreach ($res as $a) {
		echo $a['name']."<br>";
		echo $a['age']."<br>";
		echo $a['_id']."<br>";
	}

?>
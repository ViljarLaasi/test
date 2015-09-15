<?php
	$first_name = "Romil";
	$last_name = "Rõbtšenkov";
	
	echo $first_name." ".$last_name;
?>
<br>
<?php
	
	$age = 3;
	
	//testib loogikat, juhul kui vanus on väiksem 
	//kui 18 siis kirjuta "alaealine", muul juhul "täisealine"
	
	// if'i sisse loogikatehe
	if($age < 18) {
		//tõene
		echo "alaealine";
		
	} else {
		//väär
		echo "täisealine";
	}
	
?>
<br>
<?php 
	// vastavalt vanusele trükime niimitu korda välja sõna "palju"
	
	for($i = 0; $i < $age; $i = $i + 1) {
		
		// tegevus mis kordub
		echo "palju".$i." ";
		
	}
	
	echo "õnne!";
?>
<br>
<?php
	
	// Trüki välja kuupäev kujul: nädalapäev, kp kuu aasta
	echo date("l, j F Y e");
?>
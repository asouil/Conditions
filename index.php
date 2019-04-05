<?php
	echo('Exercice1<br/>');
	$age=20;
	if($age>=18){
		print('Vous êtes majeur<br/>');
	}
	else{
		print('Vous êtes mineur<br/>');
	}
	echo('Exercice2<br/>');
	
	$isEasy=false;
	if($isEasy==true){
		print("C'est facile!!<br/>");
	}
	else{
		print("C'est difficile!!!!<br/>");
	}
	/*	if($isEasy==false){
		echo("C'est difficile!!!!<br/>");
		}
		else{
		echo("C'est facile!!<br/>"); */

?>
<?php
	echo('Exercice3<br/>');
	$age=33;
	$genre='Femme';
	if($age>=18){
		if($genre=='Femme'){
			print('Vous êtes une femme et vous êtes majeure. <br/>');
		}
		else{
			//($genre=='Homme')
			print('Vous êtes un homme et vous êtes majeur. <br/>');

		}
	}
	else{
		if($genre=='Femme'){
			print('Vous êtes une femme et vous êtes mineure. <br/>');
		}
		else{
			//($genre=='Homme')
			print('Vous êtes un homme et vous êtes mineur. <br/>');

		}

	}
?>
<?php
	echo('Exercice4<br/>');
	$magnitude=5;
	switch($magnitude){
		case 1 : print('MicroSeime impossible à ressentir.');
		break;
		case 2 : print('MicroSeime impossible à ressentir mais enregistrable par le sismomètres.');
		break;
		case 3 : print('Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.');
		break;		
		case 4 : print(' Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.');
		break;		
		case 5 : print("Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.");
		break;		
		case 6 : print("Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.");
		break;		
		case 7 : print("Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.");
		break;		
		case 8 : print('Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.');
		break;
		case 9 : print('Séisme capable de tout détruire sur une très vaste zone.');
		break;
	}

?>
<?php
	echo('Exercice5<br/>');
?>



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
		print("C'est facile!!");
	}
	else{
		print("C'est difficile!!!!");
	}
	/*	
	if(isEasy){
		print("C'est facile!!");
	}...

	if($isEasy==false){
		echo("C'est difficile!!!!<br/>");
		}
	else{
		echo("C'est facile!!<br/>");
	}

	echo ($isEasy == true) ? "C'est facile !!!" : "C'est difficile !!!"; // condition binaire (condition) ? true : false */

?>
<?php
	echo('<br/>Exercice3<br/>');
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
	//on peut également faire avec des elseif pour gérer tous les cas
?>
<?php
	echo('Exercice4<br/>');
	/* L'échelle de Richter est un outil de mesure qui permet de définir la magnitude de moment d'un tremblement de terre. Cette échelle va de 1 à 9.  
Créer une variable **magnitude**. Selon la valeur de **magnitude**, afficher la phrase correspondante.  

Magnitude   |   Phrase
------      |    ---
1           |   Micro-séisme impossible à ressentir.
2           |   Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.
3           |   Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.
4           |   Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.
5           |   Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. 
				Peu de dégats sur des bâtiments modernes.
6           |   Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.  
7           |   Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.
8           |   Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.
9           |   Séisme capable de tout détruire sur une très vaste zone.  

Gérer tous les cas.  
*Utilser autre chose que des if else*/

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
		default:
		echo "La magnitude doit être comprise entre 1 et 9.";
	}

?>

<?php 

	echo('<br/>Exercice5<br/>');
	$mavariable="Femme";
	if($mavariable!="Homme"){
    	echo ("C'est une développeuse !!! <br/>");
    }
    else{
    	 echo("C'est un développeur !!! <br/>");
	}
?>

<?php

	$monage = 33;
	echo('Exercice6<br/>');
	if($monage>=18){
    	echo ("Tu es majeur");
    }
    else{
    	 echo("Tu n'es pas majeur!");
	}
?>

<?php
	echo('<br/>Exercice7<br/>');

	$maVariable=true;
 	if($maVariable==false){
    	print("C'est pas bon !!!");
 	}
 	else{
 		echo("c'est ok!");
 	}
?>

<?php
	echo('<br/>Exercice8 <br/>');
	if($maVariable){
		echo ("c'est ok !!");
	}
	else{
		print("c'est pas bon !!!");
	}
?>



<?php
$f=true;
$message="bonjour l'ami";
if($f){
	$message .="e";
}
echo $message;
echo"<br>";

$f=0;
$message="bonjour";
if($f) {
	$message="madame";
}else {
$message="monsieur"	;
};
echo $message;
echo "<br>";

$sexe="m";
$message="bonjour";
if($sexe === "m") {
	$message="monsieur";
} else if ($sexe== "f") {
	$message= "madame";
} else {
	$message= ",";
}
echo $message;
echo "<br>";

//operation ternaire equivalent if else//
//terner simple: expression ? valeur si vrai  : valeur si faux//
$f=0;
$message= "bonjour";
$message .=($f)?"madame" : "monsieur";
echo $message;
echo "<br>";

//operation ternaire court:valeur de l'expression si vrai?: valeur si faux//
//$prenom="";//
$mess="bonjour";
$mess .=$prenom??","; //fusion null valeur de l'expression si no null??valeur si null,on a mit ? au lieu de ://
echo $mess;
echo "<br>";

$age=34;
switch ($age) {
		case 0:
		echo "vous n'etes pas né";
		break;
		case 1:
		case 2:
		case 3:
		echo "bébé";
		break;
		case 4:
		case 5:
		case 6:
		echo "adulte";
		break;
		case 7:
		case 8:
		case 9:
		echo "vieux";
		default:echo "e";	
		}
		echo "<br>";

		$sexe="f";
		$message = "bonjour";
		switch ($sexe) {
			case "m":
				$message = "monsieur,";
				break;
				case "f":
				$message ="madame,";
				break;
				default:
				$message.=",";
		}					
		echo $message;
		echo "<br>";
//utiliser match elle remplace le switch/ semblable au switch mais renvoie une valeur comme l'opérateur ternaire/la comparaison est forte(===)/on peut rassemblé des condition avec des,//
		$sexe ="m";
		$message ="bonjour,";
		$message .= match ($sexe) {
			"m" , "M" => "monsieur,",
			"f" , "F" => "madame,",
			default =>","
		};
		echo $message;


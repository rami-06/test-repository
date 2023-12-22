<?php
	echo"bonjour rami";
	?>
	
<!DOCTYES html>
<html lang="fr">
<head>
	<title>Curriculum vitae</title>
	<meta charset="utf-8">
	<img src="rami.png" title="photo de mon cv" width=120" height=120>
</head>

<body>
	<header>
		<p>NOM: RAMIROUX </p>
		<p>PRENOM: RAMI</p>
		<p>TELEPHONE:0745351073</p>
		<p>EMAIL:BOUHLELRAMI@HOTMAIL.FR</p>
		<p>ADRESSE: 10 RUE DES ORANGES</p> <hr> 
		</header>
		
	
		<h2> sommaire :</h2>
		<nav>
		<ul> 
		<li><a href="#COMPETENCES">lien vers COMPETENCES</a></li>
		<li><a href="#FORMATION">lien vers FORMATION</a></li>
		<li><a href="#LOISIR">lien vers LOISIR</a></li>
		</ul>
		</nav>
		
		<h2 id="COMPETENCES">COMPETENCES</h2>
		<ul>
		<li>lire les plans</li>
		<li>cabler un tableau electrique</li>
		<li>règles de sécurité</li>
		</ul>
		
		<h2 id="FORMATION">FORMATION :</h2>
		<ul>
		<li>CAP EN ELECTRICITE BATIMENT ET INDUSTRIEL</li><br>
		<li>Titre pro technicien en fibre optique</li>
		</ul>
		
		<h2 id="EXPERIENCES">EXPERIENCES :</h2>
		<ul>
		<li>09/2016-06/2017<br>
		Electricien-ets pistolesi
		</li><br>
		<li>07/2017-11/2017<br>
		ELECTRICIEN-montelec
		</li><br>
		<li>02/2018-11/2018<br>
		TECHNICIEN REPARATEUR RESEAUX TELECOM
		</li><br>
		<li>12/2018-08/2022<br>
		ELECTRICIEN-europ'elec
		</li><br>
		</ul>
		
		<h2 id="LOISIR">LOISIR</h2>
		<ul>
		<li>voyage,boxe,moto
		</ul>
		
		<h3>FORMULAIRE DE CONTACT</h3>
		
		<form action="index2.html" method="post">
		<label for="NOM"></label><br>
		<input type="text" name="NOM" id="NOM"  placeholder="NOM">
		<label for="PRENOM"></label><br>
		<input type="text" name="PRENOM" id="PRENOM" required placeholder="votre prenom">
		<label for="TELEPHONE"></label><br>
		<input type="text" name="TELEPHONE" id="TELEPHONE" placeholder="votre numero de telephone">
		<label for="EMAIL"></label><br>
		<input type="text" name="Email" id="EMAIL" required placeholder="votre email">
		<label for="ADRESSE"></label><br>
		<input type="text" name="ADRESSE" id="ADRESSE" required placeholder="votre adresse">
		<br><textarea rows="10">infos supplémentaires</textarea>
		<br><input type="submit" value="envoye vos coordonnées">
		</form>
</body>
</html>
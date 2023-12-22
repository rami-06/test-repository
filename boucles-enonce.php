<?php
// afficher tous les multiples de 33 entre 0 et 100 avec une boucle while
$nb = 1;
while ($nb <= 100){
  if (!($nb % 33 )){// ou if($nb%33===0)
    echo "<p>$nb est un multiple de 33</p>";
  }
  $nb++;
}
//Une plante grandit de 1cm par jour. Elle est mature et produit des fruits à partir de 30cm
//Afficher sa taille jusqu'à sa maturité et avertir quand elle est productive

$taille = 25; //puis essayer avec 35 par exemple
do {
  echo "<p>La plante mesure $taille cm</p>";
  if ($taille>=30) echo "<p>Elle peut produire des fruits.</p>";
  $taille++;
} while ($taille<=30);




// Écrire un compte à rebours à partir de 10 qui fini par "À vos marque Prêt Partez !"

// Écrire un compte à rebours à partir de 10 qui fini par "À vos marque Prêt Partez !"
for ($i = 10; $i >= 0; $i--)
{
  if ($i==2):
   echo "À vos marques <br>";
  elseif ($i==1):
   echo "Prêt <br>";
  elseif ($i==0):
   echo "Partez!<br>";
  else:
   echo $i."<br>";
  endif;
} //t'en pense quoi de ce résultat




// Créer un tableau des jours de la semaine et les afficher avec une boucle foreach

// Création du tableau des jours de la semaine
$joursSemaine = array("Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche");

// Affichage des jours de la semaine avec foreach
foreach ($joursSemaine as $jour) {
    echo $jour . "<br>";
}



//Afficher la traduction des jours de la semaine de l'anglais au français depuis un tableau associatif avec une boucle foreach


// Tableau associatif des jours de la semaine (anglais => français)
$traductions = array(
    "Monday" => "Lundi",
    "Tuesday" => "Mardi",
    "Wednesday" => "Mercredi",
    "Thursday" => "Jeudi",
    "Friday" => "Vendredi",
    "Saturday" => "Samedi",
    "Sunday" => "Dimanche"
);

// Affichage des traductions des jours de la semaine avec foreach
foreach ($traductions as $anglais => $francais) {
    echo "$anglais en français est $francais <br>";
} 
?>
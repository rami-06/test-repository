<?php
$num = 1;
while ($num <= 100) {
    if ($num % 3 == 0 && $num % 5 == 0) {
        echo "FizzBuzz<br>";
    } elseif ($num % 3 == 0) {
        echo "Fizz<br>";
    } elseif ($num % 5 == 0) {
        echo "Buzz<br>";
    } else {
        echo $num . "<br>";
    }
    $num++;
}
?>

<?php
for ($i = 1; $i <= 100; $i++) {
    $output = match (true) {
        ($i % 3 == 0 && $i % 5 == 0) => "FizzBuzz",
        ($i % 3 == 0) => "Fizz",
        ($i % 5 == 0) => "Buzz",
        default => $i
    };
    echo $output . "<br>";
}
?>

<?php
$num = 1;
while ($num <= 100) {
    if ($num % 3 == 0 && $num % 5 == 0) {
        echo "FizzBuzz<br>";
    } elseif ($num % 5 == 0) {
        echo "Buzz<br>";
    } else {
        echo $num . "<br>";
    }
    $num++;
}
?>

<?php
$num = 1;
while ($num <= 100) {
    if ($num % 3 == 0 && $num % 5 == 0) {
        echo "FizzBuzz<br>";
        break;
    } elseif ($num % 5 == 0) {
        echo "Buzz<br>";
    } else {
        echo $num . "<br>";
    }
    $num++;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Menu des Délices</title>
</head>
<body>

<h1>Menu</h1>

<h2>Boissons</h2>
<ul>
    <?php
    $boissons = array("Café" => 2.5, "Thé" => 2.0, "Jus d'orange" => 3.0); 

    foreach ($boissons as $boisson => $prix) {
        echo "<li>$boisson - $prix €</li>";
    }
    ?>
</ul>

<h2>Pâtisseries</h2>
<ul>
    <?php
    $patisseries = array("Croissant", "Éclair", "Macaron", "Tartelette"); 

    $prixPatisseries = 2.0; // Prix unique pour toutes les pâtisseries

    for ($i = 0; $i < count($patisseries); $i++) {
        echo "<li>$patisseries[$i] - $prixPatisseries €</li>";
    }
    ?>
</ul>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Magic 8 Ball</title>
</head>
<body>

<h1>Magic 8 Ball</h1>

<?php
// Tableau des réponses possibles
$reponses = array(
    "C’est certain",
    "C’est complètement ça",
    "Sans aucun doute",
    "Oui, vraiment",
    "Tu peux compter dessus",
    "Augure favorable",
    "Très probablement",
    "Ça m’a l’air de bien se présenter",
    "Oui",
    "Les signes indiquent que oui",
    "La réponse est floue, essaye encore",
    "Redemande plus tard",
    "Il ne vaut mieux pas que je réponde tout de suite",
    "Impossible à prévoir pour l’instant",
    "Concentre toi et redemande",
    "Ne compte pas dessus",
    "Ma réponse est non",
    "Mes sources disent non",
    "Ça ne se présente pas bien",
    "Très peu probable"
);

// Sélection aléatoire d'une réponse
$reponseAleatoire = $reponses[array_rand($reponses)];
?>

<p>La Magic 8 Ball dit : "<?php echo $reponseAleatoire; ?>"</p>

</body>
</html>
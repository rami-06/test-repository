<?php
  
$riel=2105943;
$kyat=19098;
$krones= 109;
$lek=9038;

echo "<p>Vous aviez $riel riels, $kyat kyats, $krones krones, $lek leks.</p>";

$riel_to_euro=0.00023;
$kyat_to_euro=0.00045;
$krones_to_euro=0.095;
$lek_to_euro=0.0089;

$euro_from_riel=$riel*$riel_to_euro;
$euro_from_kyat=$kyat*$kyat_to_euro;
$euro_from_krones=$krones*$krones_to_euro;
$euro_from_lek=$lek*$lek_to_euro;

echo "<p>Vos $riel riels seront échangés contre $euro_from_riel €.</p>";
echo "<p>Vos $kyat kyats seront échangés contre $euro_from_kyat €.</p>";
echo "<p>Vos $krones couronnes seront échangés contre $euro_from_krones €.</p>";
echo "<p>Vos $lek leks seront échangés contre $euro_from_lek €.</p>";

$final_amount=$euro_from_riel+$euro_from_kyat+$euro_from_krones+$euro_from_lek-4;

/*arrondi mathématiques*/
//modulo renvoie toujours un entier donc en l'utilisant avec un nombre bien trop grand on est sur d'avoir la partie entière du montant sans les décimales
$euros_only = $final_amount % 1000000000;
//on le soustrait au total pour récupérer la partie décimale 
$change = $final_amount - $euros_only;
//on le multiplie par 100 pour décaler la virgule après les 2 premières décimales et on récupère la partie entière avec le modulo 
$rounded_change = $change * 100; 
$rounded_change %= 100;
//On divise par 100 pour remettre les 2 décimales à leur place 
$rounded_change /= 100;
 
$final_amount = $euros_only + $rounded_change;

echo "<p>Après déduction des frais de transactions, vous recevrez $final_amount €.</p>";
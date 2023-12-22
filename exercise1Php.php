<?php
$riel = 2105943;
$kyats = 19098;
$couronnes = 109;
$lek = 9038;

$tauxRielEuro = 0.00020;
$tauxKyatsEuro = 0.00058;
$tauxCouronnesEuro = 0.10;
$tauxLekEuro = 0.0081;

echo "Montant en riels: $riel<br>";
echo "Montant en kyats: $kyats<br>";
echo "Montant en couronnes: $couronnes<br>";
echo "Montant en lek: $lek<br>";

$enEuroRiel = $riel * $tauxRielEuro;
$enEuroKyats = $kyats * $tauxKyatsEuro;
$enEuroCouronnes = $couronnes * $tauxCouronnesEuro;
$enEuroLek = $lek * $tauxLekEuro;

$totalEnEuro = $enEuroRiel + $enEuroKyats + $enEuroCouronnes + $enEuroLek;

$totalFinal = $totalEnEuro - 4; 

echo "Total en euros après échange et frais de change: " . round($totalFinal, 2); 
?>
Début Algorithme
    Déclaration des variables : nombre1, operateur, nombre2

    Début
        Assigner une valeur à nombre1

        Assigner une valeur à operateur //multiplication, addition, soustraction, division

        Assigner une valeur à nombre2

        Cas ou (operateur) 
            Cas("multiplication") 
                Afficher("voici le résultat :", nombre1*nombre2)

            Cas("soustraction")
                Afficher("voici le résultat:",nombre1-nombre2)

            Cas("addition")
                Afficher("voici le résultat:",nombre1+nombre2)

            Cas("division")
                Afficher("voici le résultat:",nombre1+nombre2)

            Autre :
                Afficher("opérateur non reconnu")
        FinCas

    Fin
Fin Algorithme (modifié)
[12:50]
exercice 5 :
Début Algorithme
    Déclaration des variables : x

    Début
        Assigner une valeur à x

        Si (x < 15) alors
            Afficher("la valeur",x,"est :",x2)
        Sinon 
            Si (x > 15) alors
                Afficher("la valeur",x,"est :",x4)
            Sinon
                Afficher("la valeur n'est pas bonne")
            Fin Si
        FinSi

    Fin
Fin Algorithme


<?php
$nombre1 = 10;
$operateur = "multiplication"; 
$nombre2 = 5;
switch ($operateur) {
    case "multiplication":
        echo "Voici le résultat : " . ($nombre1 * $nombre2);
        break;
    case "soustraction":
        echo "Voici le résultat : " . ($nombre1 - $nombre2);
        break;
    case "addition":
        echo "Voici le résultat : " . ($nombre1 + $nombre2);
        break;
    case "division":
    default:
        echo "Opérateur non reconnu";
}
?>
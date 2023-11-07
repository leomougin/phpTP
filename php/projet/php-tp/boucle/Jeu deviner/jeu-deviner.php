<?php

$vie = random_int(10,15);
$tentatives = 1;
$menu = 0;
$res = fopen("resultats.txt", "a+");
$victoire = 0;
$defaite = 0;

while ($menu == 0) {
    $res = fopen("resultats.txt", "a+");
    echo "1. Jouer \n 2. Voir les résultats \n 3. Voir les résultats d'un jour \n 4. Voir les résultats d'un joueur \n 5. Statistiques \n 6. Quitter \n";
    $menu = readline("Votre choix (1,2,3,4 ou 5) : ");

    if ($menu == 1) {
        $pseudo = readline("Saisir votre pseudo : ");
        $nombre = readline("Saisir un nombre entre 1 et 100 : ");
        $nombreOrd = random_int(1, 100);

        while ($nombre < 1 || $nombre > 100) {
            echo "Le nombre saisi n'est pas  entre 0 et 100. ";
            $nombre = readline("Donner un nombre entre 1 et 100 : ");
        }
        while ($nombre != $nombreOrd && $vie > 0) {
            if ($nombre < 1 || $nombre > 100) {
                echo "Le nombre saisi n'est pas compris entre 0 et 100. ";
                $nombre = readline("Saisir un nombre entre 1 et 100 : ");
            } else {
                $vie -= 1;
                $tentatives++;
                if ($nombre < $nombreOrd) {
                    echo "Le nombre est trop petit. ";
                } elseif ($nombre > $nombreOrd) {
                    echo "Le nombre est trop grand. ";
                }
                $nombre = readline("Saisir un nombre entre 1 et 100 : ");
            }
        }
// Afficher les différents résultats possibles
        if ($nombre == $nombreOrd && $tentatives <= 10) {
            $result = "(V) Excellent $pseudo : vous avez trouvé le nombre $nombreOrd en $tentatives tentatives ! \n";
        } elseif ($nombre == $nombreOrd && $tentatives > 10) {
            $result = "(V) Bien joué $pseudo : vous avez trouvé le nombre $nombreOrd en $tentatives tentatives ! \n";
        } else {
            $result = "(D) Désolé $pseudo : vous avez atteint le nombre maximum de tentatives ! Le nombre était $nombreOrd ! \n";
        }

        echo $result;
        echo PHP_EOL;
        $date = date("d/m/Y H:i:s");
        $ligne = "$date - Pseudo: $pseudo - Résultat: $result \n";
        fwrite($res, $ligne);
        $menu = 0;
    } elseif ($menu == 2) {
        readfile("resultats.txt");
        echo PHP_EOL;
        $menu = 0;
    } elseif ($menu == 3) {
        $dateCherche = readline("Saisir une date (format d/m/Y) : ");
        while (($ligneDate = fgets($res)) != false) {
            if (substr_count($ligneDate, $dateCherche)) {
                echo PHP_EOL;
                echo $ligneDate;
                $menu = 0;
            }
        }
    } elseif ($menu == 4) {
        $pseudoCherche = readline("Choisissez un pseudo : ");
        while (($lignePseudo = fgets($res)) != false) {
            if (substr_count($lignePseudo, $pseudoCherche)) {
                echo PHP_EOL;
                echo $lignePseudo;
                $menu = 0;
            }
        }
    } elseif ($menu == 6) {
        die();
    } elseif ($menu == 5) {
        while (($lignePartie = fgets($res)) != false) {
            if (str_contains($lignePartie, "(V)")) {
                $victoire ++;
            } elseif (str_contains($lignePartie, "(D)")) {
                $defaite ++;
            }
        }
        $totalParties = $victoire + $defaite;
        $pourcentVictoire = ($victoire / $totalParties) * 100;
        echo "Vous avez ".round($pourcentVictoire, 2)."% de victoires sur $totalParties parties.";
    }
    fclose($res);
}
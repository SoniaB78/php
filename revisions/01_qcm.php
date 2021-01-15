<?php

// 1. Quelle instruction permet d'afficher du texte ?

    // A. echo
        // Affiche une chaine de caractère, version courte <?= $texte ?/>

    // B. print
        // Affiche une chaine de caractère
    
    // C. print_r
        // Affiche des information à propos d'une variable, de manière à ce quel lisible
            // -> Utile pour se débugger !

    // D. var_dump
        // Affiche les information structurées d'une variable, y compris son type et sa valeur. Les tableaux er les objets sont explorée récursivement, avec des indentation, pour mettre valeur leur structure


// 2. Qu'est ce qu'une variable ?

    // A. Un espace de mémoire destiné à conserver une information
    // B. Un code permettant de faire fonctionner le script en php
    // C. Un système permettant d'effacer une information
    // D. Une variété de valeur avec laquelle nous devons coder

    // REPONSE A, bonus à quoi sert une variable ?
        // Une variable permet de garder une information en mémoire (durant l'exécution du script), nous pouvons la consulter ou l'utiliser plus tard dans l'exécution du script


// 3. Quel est le type de la variable suivante : $var = "12";

    // A. Boolean
    // B. String
    // C. Integer
    // D. Array

    // ======================================== \\
    // Type    || Description                   \\
    // ========||============================== \\
    // Boolean || Vraie ou faux (TRUE or FALSE) \\
    // String  || Chaine de caractère           \\
    // Integer || Chiffre ou nombre             \\
    // Array   || $monTableau = ["Ali" => 22];  \\
    // ======================================== \\


// 4. Comment vérifier si une variable est vide

    // A. Empty
        // empty est une fonction prédéfinie permettant de vérifier si une variable est vide ou pas

    // B. Isset
        // Isset est une fonction permettant de dire si une variable existe ou non

    // C. Define
        // define permet de définir une constante

        /*
            define("CONSTANT", "Bonjour le monde.");
            echo CONSTANT; // Affiche "Bonjour le monde."
            echo Constant; // Affiche "erreur"

            define("CONSTANT2", "Bonjour le monde.", true);
            echo Constant2; // Affiche "Bonjour le monde."
        */   

    // D. Switch
        // switch équivaut à une série d'instructions if

            // if / elseif / else

            /*
                $monPays = 'France';

                if($monPays == 'Italie') {
                    echo 'vous êtes Italien!<br>';
                } elseif($monPays == 'Espagne') {
                    echo 'vous êtes Espagnol!<br>';
                } elseif($monPays == 'Angleterre') {
                    echo 'vous êtes Anglais!<br>';
                } elseif($monPays == 'France') {
                    echo 'vous êtes Français!<br>';
                } elseif($monPays == 'Suisse') {
                    echo 'vous êtes Suisse!<br>';
                } else {
                    echo 'vous n\'avez pas une nationalité connu dans notre liste de possibilités<br>';
                }
            */

            // switch

            /*
                switch ($monPays) {
                    case "Italie":
                        echo "vous êtes Italien!<br>";
                        break;
                    case "Espagne":
                        echo "vous êtes Espagnol!<br>";
                        break;
                    case "Angleterre":
                        echo "vous êtes Anglais!<br>";
                        break;
                    case "France":
                        echo "vous êtes Français!<br>";
                        break;
                    case "Suisse":
                        echo "vous êtes Suisse!<br>";
                        break;
                    default:
                        echo "vous n'avez pas une nationalité connu dans notre liste de possibilités<br>";
                }
            */
            

// 5. Avec la déclaration suivante "$text = bonjour"; quel code permettrait d'afficher "bonjour tout le monde" sur ma page web ?

    // A. echo $text . " tout le monde<br>";
    // B. echo "$text tout le monde<br>";
    // C. echo '$text tout le monde<br>';
    // D. echo $text , "tout le monde<br>;
            
    // REPONSE A ET B
               

// 6. Qu'est-ce que le code suivant affichera ?

/*
    $a = 10; $b = 5; $c = 2;
    if($a == 8) {
        echo "1";
    } elseif($a != 10) {
        echo "2";
    } else {
        echo "3";
    }
*/

    // A. 1
    // B. 2
    // C. 3
    // D. Rien (un résultat vide)

    // REPONSE C


// 7. Quelle fonction permet d'afficher la date du jour

    // A. date()
        // date() est une fonction permettant de récupérer la date / heure locale et de la formater

    // B. dayNow()
        // dayNow() n'existe pas !

    // C. now()
        // now() affiche la date et l'heure courante

    // D. curdate()
        // curdate() affiche la date

    // REPONSE C


// 8. A quoi sert une boucle

    // A. A répéter des informations ou traitements plusieurs fois
    // B. A écrire la suite du code à notre place si on est bloqué dans les traitements
    // C. A respecter les normes de php
    // D. A faire patienter le serveur avant de lancer l'affichage

    // REPONSE A, une boucle est une répétition !
        // Structure itératives est un moyen de faire répéter une portion de code plusieurs fois


// 9. A quel moment est-il utile de créer une fonction

    // A. Pour rendre le code fonctionnel
    // B. Pour automatiser un traitement
    // C. Pour terminer un site
    // D. Pour avoir une page web correcte

    // REPONSE B

    // Qu'est ce qu'une fonction prédéfie ?
        
        // Une fonction est un morceau de code permettant d'automatiser un traitement ou de donner un affichage particulier

            // Exemple de fonction prédéfinie :

                // substr() est une fonction prédéfinie permettant d'afficher une partie coupée d'une chaine

                /*
                    substr($maVariable, 0, 50);
                */

                // strlen() est une fonction prédéfinie permettant de retourner la taille (nombre de caractères) d'une chaine

                // Aussi isset() et empty()

            // Exemple de fonction utilisateur :

            /*
                function debug($var, $mode = 1) {
                    $trace = debug_backtrace();
                    $trace = array_shift($trace); 
                
                    echo "<strong>Debug demandé dans le fichier : " . $trace["file"] . " à la ligne " . $trace["line"] . "</strong>";
                
                    if($mode == 1) {
                        echo "<pre>"; print_r($var); echo "</pre>";
                    } else {
                        echo "<pre>"; var_dump($var); echo "</pre>";
                    }
                }
            */


// 10. Quelle est la différence entre include et require ?

    // A. Include permet d'inclure et require de vérifier la présence d'un fichier
    // B. En cas de fichier inexistant, include fera une erreur et continura l'exécution du code, tandis que require fera une erreur et bloquera l'exécution du code
    // C. Lorsqu'un fichier est chargé, include permet de le prendre tout de suite, tandis que require attends la fin du traitement
    // D. Ces deux méthodes ont tout simplement étaient inventées par deux dev différent, il n'y a aucune différence, cela permet d'assurer la connexion entre le site et le navigateur

    // REPONSE B

        // Include est plutôt traduit par "inclue moi ce fichier" et require par "fichier requis"
        // La seule différence réside dans le cas d'une erreur (nom de fichier incorrect) :

            // Include fera une erreur et poursuivra l'exécution du code
            // Require fera une erreur et stopera l'exécution du code
            // _once est juste présent pour s'assurer que le fichier soit inclut une seule fois dans le code


// 11. Qu'est-ce qu'un array ?

    // A. Une BDD
    // B. Un fichier contenant des informations sensible
    // C. Un élément de langage sans lequel php ne pourrait pas fonctionner
    // D. Un tableau de donnée

    // REPONSE D


// 12. $GET et $_POST sont des

    // A. Des objets
    // B. Super variable
    // C. Super globales
    // D. Des fonctions

    // REPONSE C
        // ce sont des superglobales -> des variables array, internes et prédéfinies par PHP, qui sont toujours disponible, quel que soit le context

            // $_GET
                // Contient les informations fournies en paramètre au script via la méthode GET par l'URL et le protocole HTTP
                    // Exemple d'utilisation : Utilise pour véhiculer des information d'une page à l'autre

            // $_POST
                // Contient les informations fournies par un formulaire via la méthode POST
                    // Exemple d'utilisation : Utile pour récupérer les saisies postées dans un formulaire par un internaute


// 13. $_GET permet :

    // A. Récupérer des informations contenues dans l'adresse URL sous la forme d'un tableau array
    // B. Récupérer les saisies d'un utilisateur depuis un formulaire sous la forme d'un tableau array
    // C. Récupérer des informations depuis un site internet sous la forme d'un objet
    // D. Stocker plusieurs variables à la fois

    // REPONSE A ET D


// 14. A quoi sert le var_dump ?

    // A. Cela n'existe pas car la syntaxe est la suivante var-dump()
    // B. Permet d'obtenir le type et la valeur d'un élément
    // C. Permet de traduire des balise HTML en PHP
    // D. Permet de déclarer des variables plus rapidement

    // REPONSE B


// 15. Quel est le type d'une superglobales ?

    // A. Une simple variable
    // B. Un tableau array
    // C. Un type d'objet
    // D. Une fonction

    // REPONSE B


// 16. Quelle formulation me permettrait de lire un cookie ?

    // A. $cookie
    // B. $_cookie
    // C. $_COOKIE
    // D. $-COOKIE

    // REPONSE C
        // $_COOKIE est une superglobale, contient les informations fournies par les cookies via le protocole HTTP
            // Exemple d'utilisation : Utile pour conserver des informations sur un internaute

            // Pour créer un cookie, cela se fait avec la fonction prédéfini de php
                // structure : setCookie("nom", "valeur", "dureeDeVie")


// 17. Lorsqu'on termine une fonction, quel est la difference entre echo et return

    // A. echo et return permettent d'afficher une information
    // B. echo affiche une information et return retourne la valeur
    // C. echo ne fonctionnera pas dans une fonction tandis que return fonctionnera
    // D. echo affiche une information et return retourne la fonction

    // REPONSE B
        // Pour déclarer une fonction, nous utilisons le mot-clé function et ensuite nous lui donnons un nom (sans espace, ni accent)

            // Déclaration d'une fonction

                // Fonction sans argument

                /*
                    function calculTva() { // Les parenthèses permettent de préciser si y'a des arguments entrants ou non
                        return 100 * 1.2 . "<br>"; // Le mot-clé return est utilisé pour retourner un résultat
                    }
                    echo calculTva(); // Exécution de ma fonction
                */    


                // Fonction avec 1 argument
                
                /*
                    function calculTva2($nombre) { 
                        return $nombre * 1.2 . "<br>"; 
                    }
                    echo calculTva2(500);
                */   


                // Fonction avec 2 arguments

                /*
                    function calculTva3($nombre, $taux) {
                        return $nombre * $taux . "<br>";
                    }
                    echo calculTva3(100, 1.20);
                */   


// 18. Dans ce code, qu'elle est l'erreur

/*
    $tab = array("France", "Italie", "Espagne", "Angleterre");
    foreach($tab as $indice => $valeur); {
        echo $indice . " - " . $valeur . "<br>";
    }
*/   

    // A. le mot array n'existe pas
    // B. Nous devrions écrire for each avec un espace
    // C. Pas de parenthèse
    // D. Pas de ; après les parenthèse

    // REPONSE D


// 19. Quelle formulation me permettrait de récuperer la saisie dans l'élément suivant :

/*
    <input type="text" name="pseudo">
*/   

    // A. echo $_post["pseudo"];
    // B. echo $_POST[pseudo];
    // C. echo $_POST["pseudo"];
    // D. echo $pseudo;

    // REPONSE C

        /*
            echo "nom : " . $_POST["nom"] . "<br>";
            echo "prenom : $_POST[nom] <br>"
        */   

// 20. De quelle manière pouvons-nous inscrire dans l'adresse URL des informations récupérable ?

    // A. page.php?pays=france
    // B. page.php?pays="france"
    // C. page.php$pays=france
    // C. page.php&pays=france

    // REPONSE A


?>
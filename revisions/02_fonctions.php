<?php
//Ecrire une fonction qui permet de retourner le pourcentage en lui donnant en paramètre 3%, 100% ou 3/88

function calculPourcentage($nb1, $nb2){
    $resultat = $nb1/$nb2*100;
    return $resultat . "%";
}
echo $pourcent = calculPourcentage(3, 88);

echo "<br><br>";
//-----------------------------------------------------------------

//Ecrire une fonction qui stock trois (ou plus) chaines de caratère avec des minuscules et des majuscules dans un tableau, et afficher chaque entrée avec leur index et seulement avec la première lettre du premier mot de chaque entrée en majuscule
$tabch= array("AzertToTO","Sous peAu","sARtHES jp");
function initmaj($tab){
    foreach($tab as $ind=>$val){
        $tab[$ind]=ucfirst(strtolower($val));//ucFirst permet de cibler le premier element
    }
    return $tab; 
}
print_r(initmaj($tabch));

echo "<br><br>";
//-----------------------------------------------------------------

//Ecrire une fonction qui permet d'afficher un input, dont on lui passe en parametre les attributs name et type
function input($name, $type){
    return '<input type='.$type.' name='.$name.'><br>';
}
echo input("nom", "password");

// function input($name, $type){
//     echo '<input type='.$type.' name='.$name.'><br>';
// }
// input("nom", "color");

// echo "<br><br>";
//-----------------------------------------------------------------

// Ecrire une fonction qui renvoit la première lettre de chaque mot (acronyme) contenue dans un variable
function acronyme($chaine){
    $resultat ="";
    $chaine = explode(" ", $chaine);
    foreach($chaine as $mot){
        $resultat .= strtoupper($mot[0]);
    }
    return $resultat;
}
$chaine = "Ecole du Web";
echo acronyme($chaine);

echo "<br><br>";
 //-----------------------------------------------------------------

// Ecrire une fonction qui affiche une image avec sa taille en parametre
function img($src, $width){
    echo '<p><img src=' . $src . ' width=' . $width . '/></p>';
}
echo img('tigre.jpg', 200);


echo "<br><br>";
//-----------------------------------------------------------------

// Ecrire une fonction qui génère un tableau d'un nombre de ligne égale à une valeur écrite dans une variable et passée en paramètres, remplis de nombres aléatoires de 0 jusqu'à la valeur choisie (param)
function createTable($nb){
    $table='<table>';
    for($i=0;$i<$nb;$i++)
    {
        $table.'<tr>';
        for($j=0;$j<$nb;$j++)
        {
            $table.='<td>'.rand(0,$nb).'</td>';
        }
        $table.='</tr>';
    }
    $table.='</table>';
    return $table;
}
echo createTable(5);

?>
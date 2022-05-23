//Algorithme permettant de trouver les diviseurs de 144 :
<?php
    for($d=1;$d<=144;$d++){
        if(144%$d==0){
            echo $d," ";
        }
    }
    echo "<br>";
?>

//Algorithme permettant de trouver le premier multiple de 7 supérieur à 1000 :
<?php
    $nombre = 7;
    $multiple = 1;
    while($nombre<1000){
        $nombre = 7 * $multiple;
        $multiple = $multiple + 1;
    }
    echo "Voici le premier multiple de 7 supérieur à 1000 : ",$multiple;
?>

//Calcul de moyenne à partir de n notes :
<?php
    $n=rand(10,25);
    echo "La valeur générée pour n est :",$n,"<br>";
    $som = 0;
    for($i=1;$i<=$n;$i++){
        $note=rand(0,20);
        echo"La note générée est :",$note,"<br>";
        $som=$som+$note;
    }
    //Affichage des résultats
    $moy = $som/$n;
    echo"La moyenne est :",round($moy,2),"<br>";
?>

//Conjecture de cyracuse selon n :
<?php
    $N=rand(10,20);
    $u=$N;
    $i=0;
    $p=1;
    while($u!=1){
        echo $u,"<br>";
        if($u%2==0){
            $u=$u/2;
        }
        else{
            $u=3*$u+1;
        }
        $p=$p+1;
    }
    echo "Il a fallut ",$p," itérations";
?>

<?php
function ganti_kata($kata,$prevHurus,$nextHuruf){
    $kataSplit = str_split($kata,1);
    $panjang_kata = strlen($kata);

    for($i=0 ; $i<$panjang_kata ; $i++){
        if($kataSplit[$i] == $prevHurus){
            echo $kataSplit[$i] = $nextHuruf;
        }
        else{
            echo $kataSplit[$i];
        }
    }
}

ganti_kata('Purwakerta','a','o');
?>
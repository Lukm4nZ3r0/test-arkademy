<?php
function cetak_gambar($angka){
    if($angka%2!==0){
        $kata = '';
        for($a = 0 ; $a < $angka ; $a++ ){
            $kata = $kata.'x ';
        }
        $kata = $kata.'<br>';


        $kataTengah = '';

        $kataBantu = '';
        for($a = 0 ; $a < $angka ; $a++ ){
            $kataBantu = $kataBantu.'= ';
        }
        $kataBantuSplit = explode(' ',$kataBantu); // buat array dengan spasi sebagai pembatas
        $kataBantuTengah = ceil(count($kataBantuSplit)/2); // nilai Tengah dibulatkan keatas

        $kataBaru = '';
        for($a = 0 ; $a < $angka ; $a++){
            if($a == $kataBantuTengah-1){
                $kataBaru = $kataBaru.'X ';
            }
            else{
                $kataBaru = $kataBaru.$kataBantuSplit[$a].' ';
            }
        }

        $kataBantuFinal = $kataBaru."<br>";
        for($a = 0 ; $a < $angka-2 ; $a++ ){
            $kataTengah = $kataTengah.$kataBantuFinal;
        }
        echo $kata;
        echo $kataTengah; // loop kata bagian tengah
        echo $kata;
    }
    else{
        echo "angka genap";
    }
}

cetak_gambar(9);
?>

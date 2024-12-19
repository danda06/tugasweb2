<?php

$warna = array("hijau", "kuning", "kelabu", "merah muda");

echo "Balonku ada lima.<br>";
echo "Rupa-rupa warna-nya<br>";
for($i=0; $i<count($warna); $i++){
    echo $warna[$i];
    if($i<count($warna)-1){
        echo ", ";
    }
}
echo ", dan biru <br>";
echo "Meletus Balon ".$warna[0]."DOR!!!<br>";
echo "Hatiku sangat kacau..";
?>
<?php
echo "Tugas 4a php <br>";
echo "------------------ <br>";

$harga_beli=8000;
$harga_jual=7500;
$Keuntungan=300;

echo "Harga Beli : Rp. ".$harga_beli;
echo "<br>";
echo "Harga jual : Rp. ".$harga_jual;
echo "<br>";
echo "Keuntungan Per-ekor : Rp. ".$Keuntungan;
echo "<br>";

// Rumus:
$selisih= $harga_beli - $harga_jual;
$jml_kambing=$selisih / $Keuntungan;


echo "Berapa Jumlah Kambing yang dibeli ? :".round($jml_kambing)." ekor";

?>
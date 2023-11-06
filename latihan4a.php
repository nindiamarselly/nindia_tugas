<?php
// Membuat array dengan elemen-elemen yang diberikan
$colors = array("hijau", "kuning", "kelabu", "merah muda");

// Menampilkan semua isi array dan teks yang diminta
echo "Balonku ada lima.<br>";
echo "Rupa-rupa warna-nnya<br>";
echo implode(", ", $colors) . ", dan biru<br>";
echo "Meletus balon " . $colors[0] . " DOR!!!<br>";
echo "Hatiku sangat kacau..<br>";
?>
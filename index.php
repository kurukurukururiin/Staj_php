<?php
require_once 'Ulke.php';
require_once 'DosyaYoneticisi.php';

$ulke1 = new Ulke("England", "55 million");
$ulke2 = new Ulke("Germany", "83 million");
$ulkelerListesi = [$ulke1, $ulke2];

$dosyaAdi = 'ulkeler.json';

DosyaYoneticisi::jsonYaz($dosyaAdi, $ulkelerListesi);
echo "Veriler kaydedildi.\n\n";

$okunanUlkeler = DosyaYoneticisi::jsonOku($dosyaAdi);

foreach ($okunanUlkeler as $ulke) {
    echo "Dosyadan Gelen -> Country: " . $ulke->isim . ", Population: " . $ulke->nufus . "\n";
}
?>
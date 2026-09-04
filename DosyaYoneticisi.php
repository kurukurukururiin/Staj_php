<?php

class DosyaYoneticisi {
    
    public static function jsonYaz(string $dosyaYolu, array $veriler): void {
        $jsonVerisi = json_encode($veriler, JSON_PRETTY_PRINT);
        file_put_contents($dosyaYolu, $jsonVerisi);
    }

    public static function jsonOku(string $dosyaYolu): array {
        if (!file_exists($dosyaYolu)) {
            return []; 
        }
        
        $okunanVeri = file_get_contents($dosyaYolu);
        return json_decode($okunanVeri);
    }
}
?>
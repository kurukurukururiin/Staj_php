<?php

class Ulke {
    public string $isim;
    public string $nufus;

    public function __construct(string $isim, string $nufus) {
        $this->isim = $isim;
        $this->nufus = $nufus;
    }

    public function bilgi(): string {
        return "Country: " . $this->isim . ", Population: " . $this->nufus . "<br>";
    }
}
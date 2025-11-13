<?php

class LuasLingkaran {

    public const phi = 3.13;
    public int $jari;
}


$lingkaran = new LuasLingkaran();
$lingkaran->jari = 12;


$rumus = LuasLingkaran::phi * ($lingkaran->jari * $lingkaran->jari);
echo "hasilnya adalah:".$rumus;
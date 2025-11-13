<?php

class LuasLingkaran {

    public const phi = 3.14;
    public int $jari;

    public function tampil($nama = 'ban') {
        $rumus LuasLingakaran::phi * ($this->jari * $this->jari);
        echo "Lingkaran {$nama} hasilnya aadalah: {$rumus}";
    }

    public static function testing() {
        echo "<br/>";
        echo "ini dari static";
    }
}

$lingkaran = new LuasLingkaran();
$lingkaran->jari = 12;
$lingkaran->tampil('roda'); //panggil method tampil

LuasLingkara::testing(); //panggil static method
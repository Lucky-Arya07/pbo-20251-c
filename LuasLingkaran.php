<?php

class LuasLingkaran {

    public const phi = 3.14;
    public int $jari;

    public function __construct($isijari = 1) {
        $this->jari = $isijari;
    }

    public function tampil($nama = 'ban') {
        $rumus LuasLingakaran::phi * ($this->jari * $this->jari);
        echo "Lingkaran {$nama} hasilnya aadalah: {$rumus}";
    }

    public static function testing() {
        echo "<br/>";
        echo "ini dari static";
    }

    public function __destruct() {
        echo "</br>";
        echo "udah ah cape";
    }
}

$lingkaran = new LuasLingkaran(12);
// $lingkaran->jari = 12;
$lingkaran->tampil('roda'); //panggil method tampil

LuasLingkara::testing(); //panggil static method
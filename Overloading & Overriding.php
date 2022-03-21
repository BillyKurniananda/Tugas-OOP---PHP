<?php

class Perhitungan
{
    function __call($nama, $arg)
    {
    }
}

class Luas extends Perhitungan
{
    function __call($nama, $arg)
    {
        if ($nama == 'luas')
            switch (count($arg[0])) {
                case 1:
                    $luas = pi() * $arg[0][0] * $arg[0][0];
                    echo 'Bangun datar : lingkaran, Luas lingakaran adalah ', $luas;
                    break;
                case 2:
                    $luas = $arg[0][0] * $arg[0][1];
                    echo 'Bangun datar : segiempat, Luas segi empat adalah ', $luas;
                    break;
                case 3:
                    $luas = (($arg[0][0] + $arg[0][1]) / 2) * $arg[0][2];
                    echo 'Bangun datar : trapesium, Luas trapesium adalah ', $luas;
            }
    }
}

class Keliling extends Perhitungan
{
    function __call($nama, $arg)
    {
        if ($nama == 'keliling')
            switch (count($arg[0])) {
                case 1:
                    $keliling = pi() * (2 * $arg[0][0]);
                    echo 'Keliling lingakaran adalah ', $keliling;
                    break;
                case 2:
                    $keliling = 2 * $arg[0][0] + 2 * $arg[0][1];
                    echo 'Keliling persegi panjang adalah ', $keliling;
                    break;
                case 3:
                    $keliling = $arg[0][0] + $arg[0][1] + $arg[0][2];
                    echo 'Keliling segitiga adalah ', $keliling;
                case 4:
                    $keliling = $arg[0][0] + $arg[0][1] + $arg[0][2] + $arg[0][3];
                    echo 'Keliling segiempat adalah ', $keliling;
            }
    }
}

$loop;
echo "Selamat datang di mesin hitung ajaib \n";
while ($loop = true) {
    echo "\n1. Hitung Luas
2. Hitung Keliling
3. Keluar \n";
    $opsi = readLine('Masukkan pilihan anda : ');
    switch ($opsi) {
        case '1':
            $var = readLine('Masukkan variabel yang diketahui (pisahkan dengan koma) : ');
            $arg = explode(",", $var);
            if (count($arg) > 3) {
                echo 'Bangun datar belum didukung !';
                break;
            } else {
                $shape = new Luas();
                $shape->luas($arg);
                exit();
            }
        case '2':
            $var = readLine('Masukkan variabel yang diketahui (pisahkan dengan koma) : ');
            $arg = explode(",", $var);
            if (count($arg) > 4) {
                echo 'Bangun datar belum didukung !';
                break;
            } else {
                $shape = new Keliling();
                $shape->keliling($arg);
                $loop = false;
                break;
            }
        case '3';
            exit("\nSelamat tinggal...");
        default:
            echo "Masukkan anda tidak valid ! \n";
            $loop = true;
    }
}

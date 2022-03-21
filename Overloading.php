<?php

class HitungNilai
{
    public function __call($name, $argu)
    {
        $argu = implode(', ', $argu);
        if ($name == 'chr') {
            echo "Karakter adalah ", chr($argu), "\n";
        } else if ($name == 'ord') {
            echo "Nilai ASCII adalah ", ord($argu), "\n";
        } else {
            echo "Method tidak ditemukan";
        }
    }
}
echo "----------------------------------\n";
echo "1. Konversi karakter ke ASCII
2. Konversi ASCII ke karakter
3. Keluar \n";
$opsi = readLine('Masukkan pilihan anda : ');
echo "----------------------------------\n";
switch ($opsi) {
    case '1':
        $argu = readLine("Masukkan karakter : ");
        $count = new HitungNilai();
        $count->ord($argu);
        break;
    case '2':
        $argu = readLine("Masukkan nilai ASCII : ");
        $count = new HitungNilai();
        $count->chr($argu);
        break;
    case '3';
        exit("\nSelamat tinggal...");
    default:
        echo "Masukkan anda tidak valid ! \n";
        $loop = true;
}

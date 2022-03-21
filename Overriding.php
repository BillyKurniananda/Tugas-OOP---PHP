<?php
class Civitas {
    private $nama, $alamat, $fakultas;
    public function __construct($nama = "unknown", $alamat = "unknown", $fakultas = "unknown"){
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->fakultas = $fakultas;
    }

    public function tampilIdentitas(){
        $str = "Nama\t\t: $this->nama\nAlamat\t\t: $this->alamat\nFakultas\t: $this->fakultas\n";
        return $str;
    }
}

class Mahasiswa extends Civitas {
    private $nim;

    public function __construct($nama = "unknown", $alamat = "unknown", $fakultas = "unknown",$nim = "unknown"){
        parent::__construct($nama, $alamat, $fakultas);
        $this->nim = $nim;
    }
    
    public function tampilIdentitas(){
        $str = "NIM\t\t: $this->nim\n".parent::tampilIdentitas();
        return $str;
    }
}

class Dosen extends Civitas {
    private $nidn;

    public function __construct($nama = "unknown", $alamat = "unknown", $fakultas = "unknown",$nidn = "unknown"){
        parent::__construct($nama, $alamat, $fakultas);
        $this->nim = $nidn;
    }
    
    public function tampilIdentitas(){
        $str = "NIDN\t\t: $this->nim\n".parent::tampilIdentitas();
        return $str;
    }
}

echo<<<LIST
1. Dosen
2. Mahasiswa\n
LIST;
$id;
$job = readline("Ingin daftar sebagai?(isi sesuai dengan hurufnya) : ");
if($job=="Dosen" or $job=="Mahasiswa"){
    $nama = readline("Masukan nama anda : ");
    $alamat = readline("Masukan alamat anda : ");
    $fakultas = readline("Masukan fakultas anda : ");
    if($job=="Dosen"){
        $nidn = readline("Masukan NIDN anda : ");
        $id = new Dosen($nama, $alamat, $fakultas, $nidn);
    }
    else if($job=="Mahasiswa"){
        $nim = readline("Masukan NIM anda : ");
        $id = new Mahasiswa($nama, $alamat, $fakultas, $nim);
    }
    echo "=========";
    echo "IDENTITAS";
    echo "=========\n";
    echo $id->tampilIdentitas();
}
else{
    echo "Opsi tidak ditemukan";
    exit();
}
?>
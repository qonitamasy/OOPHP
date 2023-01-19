<?php

class Murid{
    public $nis, $nama, $kelas;

    public function set_nis($nis_murid){
        $this->nis = $nis_murid;
        return $this;
    }

    public function set_nama($nama_murid){
        $this->nama = $nama_murid;
        return $this;
    }

    public function set_kelas($kelas_murid){
        $this->kelas = $kelas_murid;
        return $this;
    }

    public function get_blo(){
        return "Nama saya adalah " . $this->nama . " dengan nis " . $this->nis . " kelas " . $this->kelas;
    }

}

$murid_idn = new Murid();
$murid_idn->set_nis(73245671921);
$murid_idn->set_nama("Qonita");
$murid_idn->set_kelas("11 RPL");
echo $murid_idn->get_blo();

echo PHP_EOL;


$murid_idn2 = new Murid();
echo $murid_idn2->set_nis(24312567182)->set_nama("Ansela")->set_kelas("11 RPL")->get_blo();




?>
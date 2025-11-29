<?php


class Mahasiswa {
    private $nama,$npm,$jurusan,$ipk;

    public function __construct($nama,$npm,$jurusan,$ipk){
    } //sama seperti di java bisa buat inisialisasi jika di tambah parameter

    public function belajar() {
        echo "$this->nama Sedang belajar.....<br>";
    }

    public function praktikum () {
        echo "$this->nama sedang Praktikum...<br><br>";
    }

    public function setnama($nama){
        $this->nama = $nama;
    }

    public function getnama(){
        return $this->nama;
    }

    public function setnpm($npm){
        $this->npm = $npm;
    }

    public function getnpm(){
        return $this->npm;
    }

    public function setjurusan($jurusan){
        $this->jurusan = $jurusan;
    }

    public function getjurusan(){
        return $this->jurusan;
    }

    public function setipk($ipk){
        $this->ipk = $ipk;
    }

    public function getipk(){
        return $this->jurusan;
    }
    

    public function out() {
        echo "data mahasiswa : <br>";
        echo "Nama : " . $this->nama . "<br>";
        echo "npm :  $this->npm <br>";
        echo "jurusan : $this->jurusan <br>";
        echo "ipk : $this->ipk <br><br> ";
    }

    public function __destruct()
    {
        echo "Perogram di hentikan";
    } 

    

}

?>
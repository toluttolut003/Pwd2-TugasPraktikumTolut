<?php

class Dbh {

    private $servername;
    private $username;
    private $password;
    private $dbname; //private karena seperti biasa, enkapsulasi seperti pbo

    //memastikan si fungsi ini bisa di pakai siapa saja di blok kelas ini
    protected function connect(){
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "stok_ikain";

        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname); //objek conneksi
        return $conn;
    }

}
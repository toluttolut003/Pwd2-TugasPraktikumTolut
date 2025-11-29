<?php 

    require_once 'OOP-1.php'; //harus ada untuk pemanggilan parents

    class mahasiswaBaru extends Mahasiswa{

        private $asalSekolah;

        public function __construct($nama, $npm, $jurusan, $ipk, $asalSekolah)
        {
            parent::__construct($nama, $npm, $jurusan, $ipk);
            $this->asalSekolah = $asalSekolah;
        }

        public function TampilDataMaba () {
            parent::out();
            echo "Asal Sekolah : " . $this->asalSekolah;
        }

    }

?>
<?php
    require_once 'OOP-1.php';
    require_once 'mahasiswaBaru.php';
    $mhs1 = new Mahasiswa("tolut", "5520124031", "Informatik", 4.00); //pembuatan objek

    $mhs1->setnama("Tolut");
    $mhs1->setnpm("5520124031");
    $mhs1->setjurusan("Informatics Engineering");
    $mhs1->setipk(4.00);

    $mhs1->out();

    $mhs2 = new mahasiswaBaru("Emilia", "9920124031", "Informatik", 4.00, "SMKN 22 MORE");
    $mhs2->TampilDataMaba();
?>
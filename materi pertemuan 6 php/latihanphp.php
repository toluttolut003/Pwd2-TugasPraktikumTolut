<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="nilai" name > masukan nilai : </label>
        <input type="text" name="nilai">
        <button type="submit" name="submit">Lihat Status</button>
    </form>
    <?php 
    //disini hanya latihan operasi aritmatik
        print "Hello world <br>";//bisa di tambahkan html di dalam php nya PAKAI KUTIP
        //gunakan dolla $ untuk mendefinisikan variabel
        $n = 1;
        $t = 2;
        $hasil = $n + $t;
        
        echo "hasil dari $n tambah $t adalah $hasil <br>";
        echo gettype($n);

        //note untuk operasi : tipe data = universal
        // penggunaan kutip harus kutip dua = ">"<"
        //jika menggunakan satu kutip di anggap string
    echo "<br>";
        $nilai = 10;
    echo "nilai anda adalah : $nilai <br>";
    if ($nilai >= 60){
        echo "ANDA LULUSs AHhhhHH";
    } else if ($nilai <  60){
        echo "watdahek nda lulus GET OUT";
    }


    echo "<br>";
    $nilai = $_POST['nilai'];
    switch ($nilai){
        case 'merah' : {
            echo "berhenti";
            break;
        }

        case 'kuning' : {
            echo "siap-siap";
            break;
        }

        case 'hijau' : {
            echo "jalan";
            break;
        }

        default : {
            echo "tidak ada status invalid";
            break;
        }

        
    }

    $data = array(12, 3, 49); //pembuatan array pada php
        foreach ($data as $value){ //foreach pada php harus pakai foreach bukan for saja seperti di java
            echo "$value <br>"; 
        }
    ?>

    <table border="1px solid black">
        <tr>
            <th>Bilangan</th>
        </tr>
        <?php 
        for ($i = 1; $i <= 10; $i++){
            echo "<tr>";
            echo "<td> $i </td>";
            echo "</tr>";
        }

        ?>

    </table>
</body>
</html>
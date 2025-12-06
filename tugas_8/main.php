<?php

    include 'index.php';
    include 'dataikan.php';
    include 'view.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container1">
        <h1>STOK IKAN</h1>
        <table>
            <tr>
                <th>id</th>
                <th>nama</th>
                <th>quantity</th>
            <tr>
                <?php
                $user = new viewIkan();
                $user->showAllIkan();
                ?>
        </table>
        <p>graphic design is my passion</p>
        <div class="container1" id="block1"></div>
    </div>
</body>
</html>
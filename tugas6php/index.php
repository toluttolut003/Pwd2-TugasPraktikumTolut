<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOLUT IF A 24</title>
</head>
<body>
    <table border="1px solid black">
        <tr>
            <th>Bilangan</th>
            <?php
            for ($i = 1; $i <= 10; $i++){
            echo '<th style="background-color: Lime;">';
            echo $i;
            echo '</th>';
            }
            ?>
        </tr>
        <?php 
        
        for ($i = 1; $i <= 10; $i++){
            echo "<tr>";
            echo '<td style="background-color: Lime;">';
            echo $i;
            echo '</td>';
            for ($k = 1; $k <= 10; $k++){
                if ($i*$k % 2 != 0){
                echo '<td style="background-color: yellow;">';
                echo $i*$k;
                echo "</td>";
                } else {
                echo '<td style="background-color: cyan;">';
                echo $i*$k;
                echo '</td>';
                }
            } 
            echo "</tr>";
        }
        
        ?>

    </table>
    <script>
        alert("TOLUT, IF A 24, 5520124031!!!!!!");
    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2c danda</title>
    <style>
        .ganjil {
            background-color: #003;
            color: #fff;
        }
        .genap {
            background-color: #999;
        }
        table {
            border-collapse: separate;
            border-spacing: 5px;
        }
        td {
            width: 30px;
            height: 30px;
            text-align: center;
            border: 1px solid black;
        }
    </style>
</head>
<body>

    <table>
        <?php
        for ($baris = 1; $baris <= 5; $baris++) {
            echo "<tr>";
            
            for ($kolom = 1; $kolom <= $baris; $kolom++) {
                if ($baris % 2 == 1) {
                    echo "<td class='ganjil'>$kolom</td>";
                } else {
                    echo "<td class='genap'>$kolom</td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>

</body>
</html>
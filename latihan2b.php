<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modul 2 - Latihan 1</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            background-color: lightgrey;
            margin: 5px;
            text-align: center;
            line-height: 30px;
            float: left;
            border: 1px solid black;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <!-- TULIS SCRIPT PHP DIBAWAH BARIS INI -->
    <?php
    
    $numRows = 5;

    
    for ($row = 1; $row <= $numRows; $row++) {
        
        for ($col = 1; $col <= $row; $col++) {
            echo "<div class='kotak'>$col</div>";
        }
        
        echo "<div class='clear'></div>";
    }
    ?>
</body>
</html>
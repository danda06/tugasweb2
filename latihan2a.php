<!DOCTYPE html>
<html>
<head>
    <title>Tabel dengan Looping PHP</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>

<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modul 2 - Latihan 1</title>
</head>
<body>
    <table border="1" cellpadding="3" cellspacing="0">
        <tr>
            <th>Kolom 1</th>
            <th>Kolom 2</th>
            <th>Kolom 3</th>
            <th>Kolom 4</th>
            <th>Kolom 5</th>
        </tr>

        <!-- TULIS SCRIPT PHP DIBAWAH BARIS INI -->
        <?php
       
        $numRows = 15;
        $numCols = 5;

        
        for ($row = 1; $row <= $numRows; $row++) {
            echo "<tr>";
            
            for ($col = 1; $col <= $numCols; $col++) {
                echo "<td>Baris $row Kolom $col</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
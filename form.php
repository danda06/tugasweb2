<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Penilaian</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }
        .container {
            width: 400px;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.1);
        }
        label {
            display: inline-block;
            width: 150px;
        }
        input[type="text"], input[type="number"] {
            width: 200px;
            padding: 5px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
        .button-container {
            text-align: right;
            margin-top: 10px;
        }
        input[type="button"] {
            padding: 8px 15px;
            cursor: pointer;
        }
        .result {
            margin-top: 20px;
            padding-top: 10px;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="container">
        <label for="nama">Nama Mahasiswa</label>
        <input type="text" id="nama" value="Denia"><br>

        <label for="uts">Ujian Tengah Semester</label>
        <input type="number" id="uts" value="90"><br>

        <label for="tugas">Tugas Mandiri</label>
        <input type="number" id="tugas" value="95"><br>

        <label for="uas">Ujian Akhir Semester</label>
        <input type="number" id="uas" value="85"><br>

        <div class="button-container">
            <input type="button" value="Reset" onclick="resetForm()">
            <input type="button" value="Hitung Nilai" onclick="hitungNilai()">
        </div>

        <div class="result" id="result">Denia mendapatkan nilai rata-rata 90 (A) dan lulus</div>
    </div>

    <script>
        function resetForm() {
            document.getElementById('nama').value = '';
            document.getElementById('uts').value = '';
            document.getElementById('tugas').value = '';
            document.getElementById('uas').value = '';
            document.getElementById('result').innerHTML = '';
        }

        function hitungNilai() {
            const nama = document.getElementById('nama').value;
            const uts = parseFloat(document.getElementById('uts').value);
            const tugas = parseFloat(document.getElementById('tugas').value);
            const uas = parseFloat(document.getElementById('uas').value);

            if (!nama || isNaN(uts) || isNaN(tugas) || isNaN(uas)) {
                alert('Harap masukkan semua nilai!');
                return;
            }

            const rataRata = (uts + tugas + uas) / 3;
            const grade = rataRata >= 85 ? 'A' : rataRata >= 70 ? 'B' : 'C';
            const kelulusan = rataRata >= 60 ? 'lulus' : 'tidak lulus';

            document.getElementById('result').innerHTML = 
                ${nama} mendapatkan nilai rata-rata ${rataRata.toFixed(2)} (${grade}) dan ${kelulusan};
        }
    </script>

</body>
</html>
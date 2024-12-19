<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
        }
        input[type="text"], input[type="date"], select {
            width: 100%;
        }
    </style>
</head>
<body>

    <h2>Formulir Pendaftaran</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Id Mahasiswa</td>
                <td><input type="text" name="id_mahasiswa" placeholder="Isi Id"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat" rows="3" style="width:100%;"></textarea></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="Pria"> Pria
                    <input type="radio" name="jenis_kelamin" value="Wanita"> Wanita
                </td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="date" name="tanggal_lahir"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>
                    <select name="jurusan">
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <!-- Add other options as needed -->
                    </select>
                </td>
            </tr>
            <tr>
                <td>Minat</td>
                <td>
                    <input type="checkbox" name="minat[]" value="Programming"> Programming
                    <input type="checkbox" name="minat[]" value="Animasi"> Animasi
                    <input type="checkbox" name="minat[]" value="Desain"> Desain
                    <input type="checkbox" name="minat[]" value="Mapala"> Mapala
                </td>
            </tr>
            <tr>
                <td>Gambar</td>
                <td><input type="file" name="gambar"></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="submit" name="daftar" value="Daftar">
                    <input type="reset" value="Batal">
                </td>
            </tr>
        </table>
    </form>

</body>
</html>
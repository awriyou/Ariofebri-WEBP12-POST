<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS POST</title>
    <style>
        form input{
            margin-top: 20px;
        }
        
        h1{
            width: 400px;
            margin:100px auto;
        }
        form{
            border: solid 1px black;
            width: 400px;
            margin: 100px auto;
            padding: 10px;
        }
    </style>
</head>
<body>
    
    <h1>FORM DATA MAHASISWA</h1>

    <form action="output.php" method="post">
        <label for="nim">NIM</label>
        <input type="text" name="nim" id="nama">
        <br>

        <label for="nama">Nama </label>
        <input type="text" name="nama" id="nama">
        <br><br>

        <label for="jk">Jenis Kelamin</label>
            <select name="jk">
                <option value="Male">Laki-Laki</option>
                <option value="Female">Perempuan</option>
            </select>
        <br>

        <label>Tanggal Lahir:</label>
        <input type="date" name="tanggal" />
        <br>

        <label for="tempat">Tempat Lahir</label>
        <input type="text" name="tempat" id="tempat">
        <br>

        <label for="jrs">Jurusan</label>
        <input type="text" name="jrs" id="jrs">
        <br><br>

        <!-- <label for="msk">Tahun Masuk</label> -->
        <label for="msk">Tahun Masuk:</label>
            <select name="msk">
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
            </select>


        <br>
        <input type="submit" value="SUMBIT">
    </form>


</body>
</html>
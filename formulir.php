<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #000;
            text-align: center;
            padding: 50px;
            color: #fff;
        }

        form {
            text-align: left;
            max-width: 400px;
            margin: 0 auto;
            background-color: #00F5D0;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            color: #000;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
        }

        button {
            background-color: #000;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
    <title>Formulir Nilai</title>
</head>
<body>
    <h1>Report Form</h1>
    <form method="post" action="">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>

        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" required>

        <label for="nilai">Nilai:</label>
        <input type="number" id="nilai" name="nilai" required>

        <label for="absen">Absen:</label>
        <input type="number" id="absen" name="absen" required>

        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if(isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $nilai = $_POST['nilai'];
        $absen = $_POST['absen'];

        $lulus = ($nilai >= 75 && $absen >= 75) ? true : false;

        echo "<h2>Report for $nama</h2>";
        echo "<p>NIM: $nim</p>";
        echo "<p>Nilai: $nilai</p>";
        echo "<p>Absen: $absen</p>";

        if($lulus) {
            echo "<p>Status: PASS</p>";
        } else {
            echo "<p>Status: FAIL</p>";
        }
    }
    ?>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Pilihan Tugas</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .container {
            width: 90%;
            max-width: 800px;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
            border-radius: 8px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
            padding: 20px;
            background-color: #007BFF;
            color: white;
            border-radius: 8px;
        }
        .header h1 {
            margin: 0;
            font-size: 32px;
        }
        .header p {
            margin: 5px 0;
        }
        .task-selection {
            text-align: center;
            margin-bottom: 30px;
        }
        .task-selection input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 12px 24px;
            cursor: pointer;
            border-radius: 5px;
            margin: 5px;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }
        .task-selection input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .form-section {
            text-align: left;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .form-section h2 {
            margin-top: 0;
        }
        .form-section label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        .form-section input[type="number"] {
            width: calc(100% - 24px);
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        .form-section input[type="submit"] {
            background-color: #28a745;
            color: #fff;
            border: none;
            padding: 12px 24px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }
        .form-section input[type="submit"]:hover {
            background-color: #218838;
        }
    </style>
</head>
<body> 
    <div class="container">
        <div class="header">
            <h1>Anggota Kelompok</h1>
            <p>Maulana Yusuf Alwi, NIM: 23533804</p>
            <p>Alfo Delil Riski, NIM: 23533827</p>
            <p>Nabil Eka Ardhani, NIM: 23533762</p>
            <p>Meyta Najma Khuloud Azhary, NIM: 23533757</p>
            <p>Risma Wafi Saputri, NIM: 23533785</p>
        </div>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['tugas'])) {
            $tugas = $_POST['tugas'];
        } else {
            $tugas = null;
        }

        if ($tugas == 'Tugas 1') {
            // Tampilkan formulir untuk Tugas 1
            echo '
                <div class="form-section">
                    <h2>Tugas 1: Perhitungan dengan Variabel</h2>
                    <form method="POST" action="">
                        <label for="a">Variabel a:</label>
                        <input type="number" id="a" name="a" step="any" required><br><br>

                        <label for="b">Variabel b:</label>
                        <input type="number" id="b" name="b" step="any" required><br><br>

                        <label for="c">Variabel c:</label>
                        <input type="number" id="c" name="c" step="any" required><br><br>

                        <label for="d">Variabel d:</label>
                        <input type="number" id="d" name="d" step="any" required><br><br>

                        <label for="e">Variabel e:</label>
                        <input type="number" id="e" name="e" step="any" required><br><br>

                        <input type="hidden" name="tugas" value="Perhitungan Tugas 1">
                        <input type="submit" value="Hitung">
                    </form>
                </div>
            ';
        } elseif ($tugas == 'Perhitungan Tugas 1') {
            // Lakukan perhitungan untuk Tugas 1
            $a = $_POST['a'];
            $b = $_POST['b'];
            $c = $_POST['c'];
            $d = $_POST['d'];
            $e = $_POST['e'];

            $hasil = (($a + $b) / ($c * $d)) - $e;
            echo "<div class=\"form-section\"><h2>Hasil dari ((a + b) / (c * d)) - e:</h2>";
            echo "<p>(({$a} + {$b}) / ({$c} * {$d})) - {$e} = {$hasil}</p></div>";
        } elseif ($tugas == 'Tugas 2') {
            // Tampilkan perhitungan yang sudah ditentukan untuk Tugas 2
            echo '
                <div class="form-section">
                    <h2>Tugas 2: Perhitungan yang Sudah Ditentukan</h2>
                    <p>6 + 1 = ' . (6 + 1) . '</p>
                    <p>6 - 1 = ' . (6 - 1) . '</p>
                    <p>6 * 2 = ' . (6 * 2) . '</p>
                    <p>6 * 2.5 = ' . (6 * 2.5) . '</p>
                    <p>6 / 4 = ' . (6 / 4) . '</p>
                    <p>6 / 4.0 = ' . (6 / 4.0) . '</p>
                    <p>6 % 5 = ' . (6 % 5) . '</p>
                    <p>6 % 4 = ' . (6 % 4) . '</p>
                    <p>6 % 3 = ' . (6 % 3) . '</p>
                </div>
            ';
        } else {
            // Tampilkan pilihan tugas
            echo '
                <div class="task-selection">
                    <h1>Pilih Tugas</h1>
                    <form method="POST" action="">
                        <input type="submit" name="tugas" value="Tugas 1">
                        <input type="submit" name="tugas" value="Tugas 2">
                    </form>
                </div>
            ';
        }
        ?>
    </div>
</body>
</html>

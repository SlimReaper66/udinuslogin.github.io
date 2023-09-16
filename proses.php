<!DOCTYPE html>
<html>
<head>
    <title>UDINUS</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url(foto/udinus.jpg);
            
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }

        h2 {
            text-align: center;
        }

        .hasil {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>UDINUS</h2>
        <div class="hasil">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nim = $_POST["nim"];
                $nama = $_POST["nama"];
                echo "NIM: " . $nim . "<br>";
                echo "Nama: " . $nama;
            } else {
                echo "Data tidak ditemukan.";
            }
            ?>
        </div>
    </div>
</body>
</html>

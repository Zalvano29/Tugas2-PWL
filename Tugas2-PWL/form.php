<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            box-shadow: 0px 5px 7px 0px rgba(0, 0, 0, 0.25);
            width: 300px;
            margin: 50px auto;
            padding: 40px;
            padding-right: 60px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        
        .submit-form {
            display: block;
            width: 105%;
            padding: 10px;
            background-color: #ddd;
            border: 1px solid #ccc;
            border-radius: 4px;
            cursor: pointer;
        }
        
        .submit-form:hover {
            background-color: #ccc;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="" method="POST">
            <label for="nim">NIM</label>
            <input type="text" name="nim" id="nim"> <br> <br>
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama"> <br> <br> <br>
            <input type="submit" name="simpan" value="Simpan" class="submit-form"> <br> <br> <br>
        </form>

        <?php
        include 'mahasiswa.php';

        $mahasiswa = new Mahasiswa();

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_nim = $_POST['nim'];
            $_nama = $_POST['nama'];
        }

        $mahasiswa->setData($_nim, $_nama);
        $mahasiswa->printData($mahasiswa->getData());
        ?>
    </div>
</body>
</html>
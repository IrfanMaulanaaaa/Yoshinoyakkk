<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Berikut data reservasi anda</p>
    <p>Nama: <?php echo $_POST["name"];?></p>
    <p>Email: <?php echo $_POST ["email"];?></p>
    <p>No Telepon: <?php echo $_POST ["phone"];?></p>
    <p>Tanggal: <?php echo $_POST ["date"];?></p>
    <p>Waktu: <?php echo $_POST["time"];?></p>
    <p>Jumlah Orang: <?php echo $_POST["people"];?></p>
    <p>Pesan: <?php echo $_POST["message"];?></p>
    <button><a href="index.php">kembali</a></button>
</body>
</html>
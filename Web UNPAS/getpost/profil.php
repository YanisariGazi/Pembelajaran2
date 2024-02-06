<?php  
//isset gunanya untuk mengecek apakah  variabel tersebut sdh di bikin apa belum
//!isset gunanya untuk mengecek apakah variabel tersebut belum dibikin
    if (!isset($_GET["nama"]) ||
        !isset($_GET["gambar"]) ||
        !isset($_GET["umur"]) ||
        !isset($_GET["pendidikan"])) {
        # code...
        header("Location: getpost.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><img src="<?= $_GET['gambar']; ?>" alt="keluar lahh ajgg"></li>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["umur"]; ?></li>
        <li><?= $_GET["pendidikan"]; ?></li>
    </ul>
    <a href="getpost.php">kembali ke halaman utama</a>
</body>
</html>
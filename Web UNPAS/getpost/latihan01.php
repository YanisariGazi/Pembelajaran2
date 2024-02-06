<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama">
        <br><br>
        <input type="submit" name="submit">
    </form>
<?php if(isset($_POST["submit"])) : ?>
<h1>Selamat datang <?= $_POST["nama"]; ?></h1>
<?php endif; ?>
</body>
</html>
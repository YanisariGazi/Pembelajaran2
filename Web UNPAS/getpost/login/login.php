<?php 
$nama = "Luqman";
    if (isset($_POST["submit"])) {
        if ($_POST["username"] == "Tsabit" && $_POST["password"] == "1234") {
            # code...
            header("Location: admin.php");
            exit;
        }else{
            $e = true;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>LOGIN</title>
</head>
<body>
<h1>LOGIN</h1>
    <?php 
    if (isset($e)) :?>
        <h1>username/password anda salah</h1>
    <?php endif; ?>
    <form action="admin.php" method="post">
        <label for="user">Username :</label>
        <input type="text" name="username" id="user">
        <br><br>
        <label for="pw">Password :</label>
        <input type="password" name="password" id="pw">
        <br><br>
        <button type="submit" name="submit">Login</button>
    </form>
</body>
</html>
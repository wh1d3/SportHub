<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /profiles/w/wh/wh1/wh1d3/sporthub.zzz.com.ua/auth/');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SportHub | Account</title>
    <link rel="stylesheet" href="/auth/assets/css/main.css">
</head>
<body>

    <form>
        <img src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="">
        <h2 style="margin: 10px 0;"><?= $_SESSION['user']['full_name'] ?></h2>
        <a href="#"><?= $_SESSION['user']['email'] ?></a>
        <a href="/auth/vendor/logout.php" class="logout">Вихід</a>
    </form>

</body>
</html>
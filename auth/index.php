<?php
session_start();

if ($_SESSION['user']) {
    header('Location: /profiles/w/wh/wh1/wh1d3/sporthub.zzz.com.ua/auth/profile.php');
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

    <form action="vendor/signin.php" method="post">
        <label>Логін</label>
        <input type="text" name="login" placeholder="Введіть свій логін">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введіть пароль">
        <button type="submit">Ввійти</button>
        <p>
            У Вас немає аккаунта? - <a href="/auth/register.php">Зареєструйтесь</a>!
        </p>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>

</body>
</html>
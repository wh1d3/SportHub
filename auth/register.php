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

    <form action="/auth/vendor/signup.php" method="post" enctype="multipart/form-data">
        <label>Ім'я</label>
        <input type="text" name="full_name" placeholder="Введіть своє ім'я">
        <label>Логін</label>
        <input type="text" name="login" placeholder="Введіть свій логін">
        <label>Пошта</label>
        <input type="email" name="email" placeholder="Введіть e-mail">
        <label>Аватарка</label>
        <input type="file" name="avatar">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введіть пароль">
        <label>Підтвердження пароля</label>
        <input type="password" name="password_confirm" placeholder="Підтвердіть пароль">
        <button type="submit">Ввійти</button>
        <p>
            У вас уже есть аккаунт? - <a href="/auth/index.php">Авторизуйтесь</a>!
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
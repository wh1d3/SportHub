<?php

    $connect = mysqli_connect('localhost', 'login', 'pass', 'database name');

    if (!$connect) {
        die('Error connect to DataBase');
    }

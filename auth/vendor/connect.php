<?php

    $connect = mysqli_connect('localhost', 'wh1d3', 'zoompasswordS1', 'wh1d3');

    if (!$connect) {
        die('Error connect to DataBase');
    }
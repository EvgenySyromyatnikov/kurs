<?php

    $connect = mysqli_connect('localhost', 'root', '', 'auto1');
    mysqli_set_charset($connect, "utf8"); /* Procedural approach */
  $connect->set_charset("utf8");
    if (!$connect) {
        die('Error connect to DataBase');
    }

<?php
session_start();
require_once 'vendor/connect.php';
$id = $_POST['id'];
    $text = $_POST['text'];
      $name = $_POST['name'];

$idp= $_SESSION['user']['id'];

    $check_user = mysqli_query($connect, "SELECT * FROM `task` WHERE `id` = '$id' AND `text` = '$text'");
    if (mysqli_num_rows($check_user) > 0) {

  $check_solve = mysqli_query($connect, "SELECT * FROM `solves` WHERE `id` = '$id' AND `name` = '$name'");
    if (mysqli_num_rows($check_solve) >0) {}
      else{
        $solv= ++$_SESSION['user']['Solves'];
      mysqli_query($connect, "INSERT INTO `solves` (`id`, `name`) VALUES ( '$id','$name')");
      mysqli_query($connect, "UPDATE `users1` SET `Solves` = '$solv' WHERE `users1`.`id` = '$idp'");




    }
  $_SESSION['message'] = 'Oтвет правильный ';
        header('Location: task-text.php');

    } else {
        $_SESSION['message'] = 'Oтвет не правильный';
        header('Location: task-text.php');
    }
    ?>

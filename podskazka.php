<?php
session_start();
require_once 'vendor/connect.php';
$id = $_POST['id'];
$name = $_POST['name'];
$idp= $_SESSION['user']['id'];

    $check_user = mysqli_query($connect, "SELECT * FROM `hints` WHERE `id` = '$id' AND `name` = '$name'");
    if (mysqli_num_rows($check_user) > 0) { }
      else {
        mysqli_query($connect, "INSERT INTO `hints` (`i`, `id`, `name`) VALUES (NULL, '$id', '$name')");
        $hi= ++$_SESSION['user']['hint'];
        mysqli_query($connect, "UPDATE `users1` SET `hint` = '$hi' WHERE `users1`.`id` = '$idp'");
    }
$check_hint = mysqli_query($connect, "SELECT * FROM `solution` WHERE `id` = '$id' ");
  $HINT = mysqli_fetch_assoc($check_hint);
  $_SESSION['HINT'] = [
      "otvet" => $HINT['otvet']  ];

if($id==1){
  $_SESSION['messageqq'] =$_SESSION['HINT']['otvet'] ;
    header('Location: task-text.php#popup');
}
elseif($id==2){
  $_SESSION['messageqq2'] =$_SESSION['HINT']['otvet'] ;
    header('Location: task-text.php#popup2');
}
elseif($id==3){
  $_SESSION['messageqq3'] =$_SESSION['HINT']['otvet'] ;
    header('Location: task-text.php#popup3');
}
elseif($id==4){
  $_SESSION['messageqq4'] =$_SESSION['HINT']['otvet'] ;
    header('Location: task-text.php#popup4');
}
elseif($id==5){
  $_SESSION['messageqq5'] =$_SESSION['HINT']['otvet'] ;
    header('Location: task-text.php#popup5');
}
elseif($id==6){
  $_SESSION['messageqq6'] =$_SESSION['HINT']['otvet'] ;
    header('Location: task-text.php#popup6');
}
elseif($id==7){
  $_SESSION['messageqq7'] =$_SESSION['HINT']['otvet'] ;
    header('Location: task-text.php#popup7');
}
elseif($id==8){
  $_SESSION['messageqq8'] =$_SESSION['HINT']['otvet'] ;
    header('Location: task-text.php#popup8');
}
elseif($id==9){
  $_SESSION['messageqq9'] =$_SESSION['HINT']['otvet'] ;
    header('Location: task-text.php#popup9');
}
elseif($id==10){
  $_SESSION['messageqq10'] =$_SESSION['HINT']['otvet'] ;
    header('Location: task-text.php#popup10');
}
elseif($id==11){
  $_SESSION['messageqq11'] =$_SESSION['HINT']['otvet'] ;
    header('Location: task-text.php#popup11');
}






    ?>

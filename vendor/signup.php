<?php




    session_start();
    require_once 'connect.php';

    $Email = $_POST['Email'];
    $full_name = $_POST['full_name'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password === $confirm_password) {

        $path = 'uploads/' . time() . $_FILES['file']['name'];
        if (!move_uploaded_file($_FILES['file']['tmp_name'], '../' . $path)) {
            $_SESSION['message'] = 'Ошибка при загрузке сообщения';
            header('Location: ../register.php');
        }

        $password = md5($password);



  mysqli_query($connect, "INSERT INTO `users1` (`id`, `Email`, `Full_name`, `password`, `Bilet`, `Solves`) VALUES (NULL, '$Email','$full_name', '$password', '$path', '0')");


        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: ../login.php');


    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../register.php');
    }

?>

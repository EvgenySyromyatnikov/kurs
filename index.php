<?php
session_start();
if (isset($_SESSION['user'])) {
    header('Location: profile/prof.php');
}


?>

<!doctype html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <title>Авторизация</title>
     <link rel="stylesheet" type="text/css" href="style.css">
     <link href="http://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
 </head>
 <body>
    <header>
        <div id="guap-panel">
            <img id="guap-logo" src="img/guap.svg">
        </div>
        <nav id="nav-panel" style="margin-top: 50px;
      	width: 125px;
      	display: flex;
      	justify-content: space-between;
      	margin-right: 30px;">
            <a href="register.php">
            <img id="notification-logo" src="img/login.png">
              </a>
              <a href="login.php">
            <img id="profile-logo" src="img/enter.png">
              </a>
        </nav>
    </header>
     <!-- Форма авторизации -->


 </body>
 </html>

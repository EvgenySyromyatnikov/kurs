<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: ../index.php');
}
$ost=11-$_SESSION['user']['Solves'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Профиль</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="http://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
</head>
<body>
	<header>
			<div id="guap-panel">
				<img id="guap-logo" src="img/guap.svg">
			</div>
		<nav id="nav-panel">
			<a href=" ../task-text.php">
			<img id="tasks-logo" src="img/tasks.svg">
			</a>
      	<a href="../materials.php">
			<img id="materials-logo" src="img/materials.svg">
      	</a>
        <a href="../notifecate.php">
			<img id="notification-logo" src="img/notification.svg">
	</a>
			  <a href=" ../vendor/logout.php">
			<img id="logout-logo" src="img/logout.png">
			  </a>
		</nav>
	</header>
	<div id="background-square">
		<div id="top-panel">
			<div id="top-panel-name">  <?= $_SESSION['user']['Full_name'] ?> </div>
		</div>
		<div id="categories-panel">
			<div id="categories-panel-inside">
	<div id="top-panel-completed-tasks-text">Результаты</div>
			</div>
		</div>
    <div id="top-panel-completed-tasks-text">Решено задач: <?= $_SESSION['user']['Solves'] ?>  <img id="check-logo" src="img/check.svg"></div>
<div id="top-panel-completed-tasks-text">Использовано подсказок : <?= $_SESSION['user']['hint'] ?></div>
<div id="top-panel-completed-tasks-text">Осталось нерешенных задач: <?= $ost ?> <img id="cross-logo" src="img/cross.svg"> </div>
			</div>
		</div>
	</div>
</body>
</html>

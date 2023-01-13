<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: ../index.php');
}
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
        <link rel="stylesheet" href="css/style.css">
        <link href="http://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
        <title>Материалы</title>
    </head>
    <body>
    <header>
    <img id="guap_logo" src="img/guap.svg">
    </header>
    <div id="icon">
    <a href="profile/prof.php">
    <div id="profile">
    <img id="profile_icon" src="img/profile.svg">
    </div>
    </a>
    <a href="notifecate.php">
    <div id="notification">
    <img id="notification_icon" src="img/notification.svg">
    </div>
    </a>
      <a href=" ../task-text.php">
    <div id="materials">
    <img id="tasks-logo" src="img/tasks.svg">
    </div>
    </a>
    </div>
    <div class="container">
  		<div class="row">
  			<div class="col mt-1">
  				<table class="table shadow ">
  					<thead class="thead-dark">
  					<p><h2>Материалы для подготовки</p></h2>
                    <tr>
                      <td><p>
                       <br>  <a href="https://xakep.ru/2011/03/01/54786/" >Лабораторный практикум по Metasploit Framework: Скрытые фишки MSF</a>
                            </p></td>
                    </tr>
                    <tr>
                      <td><p>
                       <br>  <a href="https://docs.google.com/document/d/13zgZ_CRRHADwxf41mSSSuoJQLkMc67TXxpYLoW6lRak/edit" >Веб-безопасность 101. Курс молодого бойца by Андрей Петухов</a>
                            </p></td>
                    </tr>
                    <tr>
                      <td><p>
                       <br>  <a href="https://stepik.org/course/127/promo" >Анализ безопасности веб-проектов</a>
                            </p></td>
                    </tr>
                    <tr>
                      <td><p>
                       <br>  <a href="https://2019.hackerdom.ru/" >Площадка команды Хакердом</a>
                            </p></td>
                    </tr>
                    <td><p>
                     <br>  <a href="https://github.com/lgg/studying/blob/master/files/security/ctf/30_Jukova_D_O.pdf" >Обзор соревнований по безопасности CTF</a>
                          </p></td>
                  </tr>
                  <td><p>
                   <br>  <a href="https://github.com/lgg/studying/blob/master/files/security/ctf/o-sorevnovaniyah-ctf-po-kompyuternoy-bezopasnosti.pdf" >О соревнованиях CTF</a>
                        </p></td>
                </tr>
                <td><p>
                 <br>  <a href="https://github.com/lgg/studying/blob/master/files/security/ctf/o-sorevnovaniyah-ctf-po-kompyuternoy-bezopasnosti.pdf" >О соревнованиях CTF</a>
                      </p></td>
              </tr>




  					</thead>
  				</table>
  			</div>
  		</div>
  	</div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

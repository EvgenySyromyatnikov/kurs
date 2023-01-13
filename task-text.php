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
        <link rel="stylesheet" href="css/style.css">
        <link href="http://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
        <title>Задания</title>
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
    <a href="materials.php">
    <div id="materials">
    <img id="materials_logo" src="img/materials.svg">
    </div>
    </a>
    </div>

                    <div id="wrapper" >
              <!--  <h1>Admin</h1>-->

              <ul class="flex cards">

                <a href="#popup"><li><h2>  Web - easy     </h2>
                  <p>Palevo
                  </p></li></a>
                <a href="#popup2">   <li><h2>CTB - easy</h2>
                  <p> ProtSSH
                  </p></li></a>
                <a href="#popup3">   <li><h2>Admin - medium</h2>
                  <p>/home
                  </p></li></a>
                <a href="#popup4">   <li><h2>Admin - hard</h2>
                  <p>/home/MyFolder
                  </p></li></a>
                  <a href="#popup5">   <li><h2>Forensics - medium</h2>
                    <p>Script Kiddie Attack
                    </p></li></a>
                    <a href="#popup6">   <li><h2>OSINT - Medium </h2>
                      <p> ENZO likes a beer
                      </p></li></a>
                      <a href="#popup7">   <li><h2>Crypto - Medium  </h2>
                        <p>  Operation "Factor"
                        </p></li></a>
                        <a href="#popup8">   <li><h2>Forensics - medium  </h2>
                          <p>  Utechka
                          </p></li></a>
                          <a href="#popup9">   <li><h2>Reverse - medium   </h2>
                            <p>  Risky Business
                            </p></li></a>
                            <a href="#popup10">   <li><h2>Crypto - Easy   </h2>
                              <p>  x ^= y; y ^= x; x ^= y
                              </p></li></a>
                              <a href="#popup11">   <li><h2>Forensics - medium    </h2>
                                <p>   Super Secure Linux
                                </p></li></a>
              </ul>
              </div>


          <div id="popup" class="popup">
              <a href="task-text.php"class="popup_area"></a>
          <div  class="popup_body">
          <div  class="popup_content">
          <div id="fixed-container">
	    <div id="fixed-container">
		  <div id="form">
			<h3>Palevo</h3>
        <a href="task-text.php"class="popup_close">X</a>
			<form method="post" action="proverka.php" >
      <p>На первый взгяд просто обыкновенный интернет блог, вряд ли  он соддержит флаг, но поискать стоит
      <a href="https://hy17-palevo.spb.ctf.su/">https://hy17-palevo.spb.ctf.su/ </a>
      </p>

          <input type="hidden" name="id" value="1">
			<input class="normal-input" name="text" type="text" required size="40" placeholder="Flag:{...}">
          <input type="hidden" name="name" value=" <?= $_SESSION['user']['Full_name'] ?>">

      <button type="submit" class="reg-complete">Отправить флаг</button>
			</form>
      <form method="post" action="podskazka.php" >
          <input type="hidden" name="id" value="1">
          <input type="hidden" name="name" value=" <?= $_SESSION['user']['Full_name'] ?>">
      <button type="submit" class="reg-complete" > Посмотреть подсказку</button>
      <?php
                if (isset($_SESSION['messageqq'])) {
                    echo '<p class="msg" style="	border: 2px solid #ffa908;
                      border-radius: 3px; text-align:center; font-weight:bold; color:black;"> ' . $_SESSION['messageqq'] . ' </p>';
                }
                unset($_SESSION['messageqq']);
                 ?>
      	</form>
		  </div>
	    </div>
               </div>
               </div>
               </div>
               </div>

                    <div id="popup2" class="popup">
                        <a href="task-text.php"class="popup_area"></a>
                    <div  class="popup_body">
                    <div  class="popup_content">
                    <div id="fixed-container">
                    <div id="fixed-container">
                    <div id="form">
                    <h3>ProtSSH</h3>
                    <a href="task-text.php"class="popup_close">X</a>
                    <form method="post" action="proverka.php" >
                    <p>ssh -p 11022 protssh@109.233.56.90 <br>
                      Password: ctb10

                    </p>
                    <input type="hidden" name="id" value="2">
          			    <input class="normal-input" name="text" type="text" required size="40" placeholder="Flag:{...}">
                    <input type="hidden" name="name" value=" <?= $_SESSION['user']['Full_name'] ?>">
                    <button type="submit" class="reg-complete">Отправить флаг</button>
                    </form>
                    <form method="post" action="podskazka.php" >
                        <input type="hidden" name="id" value="2">
                        <input type="hidden" name="name" value=" <?= $_SESSION['user']['Full_name'] ?>">
                    <button type="submit" class="reg-complete" > Посмотреть подсказку</button>
                    <?php
                              if (isset($_SESSION['messageqq2'])) {
                                  echo '<p class="msg" style="	border: 2px solid #ffa908;
                                    border-radius: 3px; text-align:center; font-weight:bold; color:black;"> ' . $_SESSION['messageqq2'] . ' </p>';
                              }
                              unset($_SESSION['messageqq2']);
                               ?>
                      </form>
                    </div>
                    </div>
                         </div>
                         </div>
                         </div>
                         </div>


                         <div id="popup3" class="popup">
                             <a href="task-text.php"class="popup_area"></a>
                         <div  class="popup_body">
                         <div  class="popup_content">
                         <div id="fixed-container">
                         <div id="fixed-container">
                         <div id="form">
                         <h3>/home</h3>
                         <a href="task-text.php"class="popup_close">X</a>
                         <form method="post" action="proverka.php" >
                           <p>Попробуй посмотри этот
                           <a href="https://disk.yandex.ru/d/cbXgoPwDrD6vs">файл </a>
                           </p>
                         <input type="hidden" name="id" value="3">
               			    <input class="normal-input" name="text" type="text" required size="40" placeholder="Flag:{...}">
                         <input type="hidden" name="name" value=" <?= $_SESSION['user']['Full_name'] ?>">
                         <button href="#popup3" class="reg-complete">Отправить флаг</button>
                         </form>
                         <form method="post" action="podskazka.php" >
                             <input type="hidden" name="id" value="3">
                             <input type="hidden" name="name" value=" <?= $_SESSION['user']['Full_name'] ?>">
                         <button type="submit" class="reg-complete" > Посмотреть подсказку</button>
                         <?php
                                   if (isset($_SESSION['messageqq3'])) {
                                       echo '<p class="msg" style="	border: 2px solid #ffa908;
                                         border-radius: 3px; text-align:center; font-weight:bold; color:black;"> ' . $_SESSION['messageqq3'] . ' </p>';
                                   }
                                   unset($_SESSION['messageqq3']);
                                    ?>
                          </form>
                         </div>
                         </div>
                              </div>
                              </div>
                              </div>
                              </div>

                              <div id="popup4" class="popup">
                                  <a href="task-text.php"class="popup_area"></a>
                              <div  class="popup_body">
                              <div  class="popup_content">
                              <div id="fixed-container">
                              <div id="fixed-container">
                              <div id="form">
                              <h3>/home/MyFolder</h3>
                              <a href="task-text.php"class="popup_close">X</a>
                              <form method="post" action="proverka.php" >
                                <p>Попробуй посмотри этот
                                <a href="https://disk.yandex.ru/d/cbXgoPwDrD6vs">файл </a>
                                </p>
                              <input type="hidden" name="id" value="4">
                    			    <input class="normal-input" name="text" type="text" required size="40" placeholder="Flag:{...}">
                              <input type="hidden" name="name" value=" <?= $_SESSION['user']['Full_name'] ?>">
                              <button href="#popup4" class="reg-complete">Отправить флаг</button>
                              </form>
                              <form method="post" action="podskazka.php" >
                                  <input type="hidden" name="id" value="4">
                                  <input type="hidden" name="name" value=" <?= $_SESSION['user']['Full_name'] ?>">
                              <button type="submit" class="reg-complete" > Посмотреть подсказку</button>
                              <?php
                                        if (isset($_SESSION['messageqq4'])) {
                                            echo '<p class="msg" style="	border: 2px solid #ffa908;
                                              border-radius: 3px; text-align:center; font-weight:bold; color:black;"> ' . $_SESSION['messageqq4'] . ' </p>';
                                        }
                                        unset($_SESSION['messageqq4']);
                                         ?>
                                </form>
                              </div>
                              </div>
                                   </div>
                                   </div>
                                   </div>
                                   </div>

                                   <div id="popup5" class="popup">
                                       <a href="task-text.php"class="popup_area"></a>
                                   <div  class="popup_body">
                                   <div  class="popup_content">
                                   <div id="fixed-container">
                                   <div id="fixed-container">
                                   <div id="form">
                                   <h3>Script Kiddie Attack</h3>
                                   <a href="task-text.php"class="popup_close">X</a>
                                   <form method="post" action="proverka.php" >
                                   <p>Мы подверглись какой-то глупой атаке.
                                     У нас украли флаг, к счастью, мы записали весь трафик и сделали дамп подозрительного процесса. Помоги нам разобраться и верни наш флаг!
                                    <br>  <a href="doc/public.7z" download="">дамп</a>
                                         </p>
                                    <input type="hidden" name="id" value="5">
                                   <input class="normal-input" name="text" type="text" required size="40" placeholder="Flag:{...}">
                                    <input type="hidden" name="name" value=" <?= $_SESSION['user']['Full_name'] ?>">
                                  <button type="submit" class="reg-complete">Отправить флаг</button>
                                   </form>
                                   <form method="post" action="podskazka.php" >
                                       <input type="hidden" name="id" value="5">
                                       <input type="hidden" name="name" value=" <?= $_SESSION['user']['Full_name'] ?>">
                                   <button type="submit" class="reg-complete" > Посмотреть подсказку</button>
                                   <?php
                                             if (isset($_SESSION['messageqq5'])) {
                                                 echo '<p class="msg" style="	border: 2px solid #ffa908;
                                                   border-radius: 3px; text-align:center; font-weight:bold; color:black;"> ' . $_SESSION['messageqq5'] . ' </p>';
                                             }
                                             unset($_SESSION['messageqq5']);
                                              ?>
                                    </form>
                                   </div>
                                   </div>
                                        </div>
                                        </div>
                                        </div>
                                        </div>

                                        <div id="popup6" class="popup">
                                            <a href="task-text.php"class="popup_area"></a>
                                        <div  class="popup_body">
                                        <div  class="popup_content">
                                        <div id="fixed-container">
                                        <div id="fixed-container">
                                        <div id="form">
                                        <h3>ENZO likes a beer</h3>
                                        <a href="task-text.php"class="popup_close">X</a>
                                        <form method="post" action="proverka.php" >
                                        <p>It looks like REALLY shitty beer but how it tastes? ENZO rated it so high💩
                                              </p>
                                         <input type="hidden" name="id" value="6">
                                        <input class="normal-input" name="text" type="text" required size="40" placeholder="Flag:{...}">
                                         <input type="hidden" name="name" value=" <?= $_SESSION['user']['Full_name'] ?>">
                                       <button type="submit" class="reg-complete">Отправить флаг</button>
                                        </form>
                                        <form method="post" action="podskazka.php" >
                                            <input type="hidden" name="id" value="6">
                                            <input type="hidden" name="name" value=" <?= $_SESSION['user']['Full_name'] ?>">
                                        <button type="submit" class="reg-complete" > Посмотреть подсказку</button>
                                        <?php
                                                  if (isset($_SESSION['messageqq6'])) {
                                                      echo '<p class="msg" style="	border: 2px solid #ffa908;
                                                        border-radius: 3px; text-align:center; font-weight:bold; color:black;"> ' . $_SESSION['messageqq6'] . ' </p>';
                                                  }
                                                  unset($_SESSION['messageqq6']);
                                                   ?>
                                          </form>
                                        </div>
                                        </div>
                                             </div>
                                             </div>
                                             </div>
                                             </div>

                                             <div id="popup7" class="popup">
                                                 <a href="task-text.php"class="popup_area"></a>
                                             <div  class="popup_body">
                                             <div  class="popup_content">
                                             <div id="fixed-container">
                                             <div id="fixed-container">
                                             <div id="form">
                                             <h3>Operation "Factor"</h3>
                                             <a href="task-text.php"class="popup_close">X</a>
                                             <form method="post" action="proverka.php" >
                                             <p>ОТ: Лейтенант П. Х. Тема: Работа по специальности.Понаучат детей криптографии блин. Слышал, что в нашем лицее крипте учат? Так вот, на выставке у одного из школьников это новомодное изобретение было - передача данных со сквозным, блин, шифрованием.И что ты думаешь? Они каким-то образом умудряются проносить при помощи этого шпоры на уроки информатики. И их учительница все рассказала нашему Майору! Он сразу взорвался, начал кричать "Чтобы ключи шифрования были у меня на столе до обеда!". Видно что-то смыслит в этой вашей криптографии.Короче, все материалы дела приложу к сообщению в архивчике.
                                              <br>  <a href="doc/files .rar" download="">архив</a>
                                                   </p>
                                              <input type="hidden" name="id" value="7">
                                             <input class="normal-input" name="text" type="text" required size="40" placeholder="Flag:{...}">
                                              <input type="hidden" name="name" value=" <?= $_SESSION['user']['Full_name'] ?>">
                                            <button type="submit" class="reg-complete">Отправить флаг</button>
                                             </form>
                                             <form method="post" action="podskazka.php" >
                                                 <input type="hidden" name="id" value="7">
                                                 <input type="hidden" name="name" value=" <?= $_SESSION['user']['Full_name'] ?>">
                                             <button type="submit" class="reg-complete" > Посмотреть подсказку</button>
                                             <?php
                                                       if (isset($_SESSION['messageqq7'])) {
                                                           echo '<p class="msg" style="	border: 2px solid #ffa908;
                                                             border-radius: 3px; text-align:center; font-weight:bold; color:black;"> ' . $_SESSION['messageqq7'] . ' </p>';
                                                       }
                                                       unset($_SESSION['messageqq7']);
                                                        ?>
                                              </form>
                                             </div>
                                             </div>
                                                  </div>
                                                  </div>
                                                  </div>
                                                  </div>

                                                  <div id="popup8" class="popup">
                                                      <a href="task-text.php"class="popup_area"></a>
                                                  <div  class="popup_body">
                                                  <div  class="popup_content">
                                                  <div id="fixed-container">
                                                  <div id="fixed-container">
                                                  <div id="form">
                                                  <h3>Utechka</h3>
                                                  <a href="task-text.php"class="popup_close">X</a>
                                                  <form method="post" action="proverka.php" >
                                                  <p>Наши данные утелки, но как это вышло мы не знаем.Посмотри трафик, может у тебя получится разобраться.
                                                   <br>  <a href="doc/traffic.7z" download="">трафик</a>
                                                        </p>
                                                   <input type="hidden" name="id" value="8">
                                                  <input class="normal-input" name="text" type="text" required size="40" placeholder="Flag:{...}">
                                                   <input type="hidden" name="name" value=" <?= $_SESSION['user']['Full_name'] ?>">
                                                 <button type="submit" class="reg-complete">Отправить флаг</button>
                                                  </form>
                                                  <form method="post" action="podskazka.php" >
                                                      <input type="hidden" name="id" value="8">
                                                      <input type="hidden" name="name" value=" <?= $_SESSION['user']['Full_name'] ?>">
                                                  <button type="submit" class="reg-complete" > Посмотреть подсказку</button>
                                                  <?php
                                                            if (isset($_SESSION['messageqq8'])) {
                                                                echo '<p class="msg" style="	border: 2px solid #ffa908;
                                                                  border-radius: 3px; text-align:center; font-weight:bold; color:black;"> ' . $_SESSION['messageqq8'] . ' </p>';
                                                            }
                                                            unset($_SESSION['messageqq8']);
                                                             ?>
                                                    </form>
                                                  </div>
                                                  </div>
                                                       </div>
                                                       </div>
                                                       </div>
                                                       </div>


                                                       <div id="popup9" class="popup">
                                                           <a href="task-text.php"class="popup_area"></a>
                                                       <div  class="popup_body">
                                                       <div  class="popup_content">
                                                       <div id="fixed-container">
                                                       <div id="fixed-container">
                                                       <div id="form">
                                                       <h3>Risky Business</h3>
                                                       <a href="task-text.php"class="popup_close">X</a>
                                                       <form method="post" action="proverka.php" >
                                                       <p>Поговаривают, что заниматься анализом таким приложений опасно для жизни.Наш агент тоже боится подходить к изучение этого файла.Может у вас что выйдет?
                                                        <br>  <a href="doc/traffic.7z" download="">файл</a>
                                                             </p>
                                                        <input type="hidden" name="id" value="9">
                                                       <input class="normal-input" name="text" type="text" required size="40" placeholder="Flag:{...}">
                                                        <input type="hidden" name="name" value=" <?= $_SESSION['user']['Full_name'] ?>">
                                                      <button type="submit" class="reg-complete">Отправить флаг</button>
                                                       </form>
                                                       <form method="post" action="podskazka.php" >
                                                           <input type="hidden" name="id" value="9">
                                                           <input type="hidden" name="name" value=" <?= $_SESSION['user']['Full_name'] ?>">
                                                       <button type="submit" class="reg-complete" > Посмотреть подсказку</button>
                                                       <?php
                                                                 if (isset($_SESSION['messageqq9'])) {
                                                                     echo '<p class="msg" style="	border: 2px solid #ffa908;
                                                                       border-radius: 3px; text-align:center; font-weight:bold; color:black;"> ' . $_SESSION['messageqq9'] . ' </p>';
                                                                 }
                                                                 unset($_SESSION['messageqq9']);
                                                                  ?>
                                                        </form>
                                                       </div>
                                                       </div>
                                                            </div>
                                                            </div>
                                                            </div>
                                                            </div>

                                                            <div id="popup10" class="popup">
                                                                <a href="task-text.php"class="popup_area"></a>
                                                            <div  class="popup_body">
                                                            <div  class="popup_content">
                                                            <div id="fixed-container">
                                                            <div id="fixed-container">
                                                            <div id="form">
                                                            <h3>x ^= y; y ^= x; x ^= y</h3>
                                                            <a href="task-text.php"class="popup_close">X</a>
                                                            <form method="post" action="proverka.php" >
                                                            <p>В нашем замечательном лицее преподают довольно прогрессивные предметы. Например, основы криптографии!И для выставки наши ученики сделали пару тасков, вот один из них, совсем не сложный.
                                                             <br>  <a href="doc/flag.txt" download="">файл №1</a>
                                                              <br>  <a href="doc/keys.txt" download="">файл №2</a>
                                                                  </p>
                                                             <input type="hidden" name="id" value="10">
                                                            <input class="normal-input" name="text" type="text" required size="40" placeholder="Flag:{...}">
                                                             <input type="hidden" name="name" value=" <?= $_SESSION['user']['Full_name'] ?>">
                                                           <button type="submit" class="reg-complete">Отправить флаг</button>
                                                            </form>
                                                            <form method="post" action="podskazka.php" >
                                                                <input type="hidden" name="id" value="10">
                                                                <input type="hidden" name="name" value=" <?= $_SESSION['user']['Full_name'] ?>">
                                                            <button type="submit" class="reg-complete" > Посмотреть подсказку</button>
                                                            <?php
                                                                      if (isset($_SESSION['messageqq10'])) {
                                                                          echo '<p class="msg" style="	border: 2px solid #ffa908;
                                                                            border-radius: 3px; text-align:center; font-weight:bold; color:black;"> ' . $_SESSION['messageqq10'] . ' </p>';
                                                                      }
                                                                      unset($_SESSION['messageqq10']);
                                                                       ?>
                                                              </form>
                                                            </div>
                                                            </div>
                                                                 </div>
                                                                 </div>
                                                                 </div>
                                                                 </div>


                                                                 <div id="popup11" class="popup">
                                                                     <a href="task-text.php"class="popup_area"></a>
                                                                 <div  class="popup_body">
                                                                 <div  class="popup_content">
                                                                 <div id="fixed-container">
                                                                 <div id="fixed-container">
                                                                 <div id="form">
                                                                 <h3>Super Secure Linux</h3>
                                                                 <a href="task-text.php"class="popup_close">X</a>
                                                                 <form method="post" action="proverka.php" >
                                                                 <p>Наши агенты используют только сверх-защищённые операционные системы.Но, кажется, мы подверглись атаке на поставщика и нам внедрили бэкдоры.У нас есть базовый образ, который мы ставим на все компьютеры, посмотрим может что-то найдёшь.Мы уже заметили пропажу некоторых наших файлов. К счастью, мы нашли их, но они были зашифрованы.Помогите нам достать пароль для этого архива!
                                                                    <br>  <a href="doc/files.7z" download="">файл №1</a>

                                                                   <br>  <a href="doc/image.7z" download="">файл №2</a>
                                                                       </p>
                                                                  <input type="hidden" name="id" value="11">
                                                                 <input class="normal-input" name="text" type="text" required size="40" placeholder="Flag:{...}">
                                                                  <input type="hidden" name="name" value=" <?= $_SESSION['user']['Full_name'] ?>">
                                                                <button type="submit" class="reg-complete">Отправить флаг</button>
                                                                 </form>
                                                                 <form method="post" action="podskazka.php" >
                                                                     <input type="hidden" name="id" value="11">
                                                                     <input type="hidden" name="name" value=" <?= $_SESSION['user']['Full_name'] ?>">
                                                                 <button type="submit" class="reg-complete" > Посмотреть подсказку</button>
                                                                 <?php
                                                                           if (isset($_SESSION['messageqq11'])) {
                                                                               echo '<p class="msg" style="	border: 2px solid #ffa908;
                                                                                 border-radius: 3px; text-align:center; font-weight:bold; color:black;"> ' . $_SESSION['messageqq11'] . ' </p>';
                                                                           }
                                                                           unset($_SESSION['messageqq11']);
                                                                            ?>
                                                                  </form>
                                                                 </div>
                                                                 </div>
                                                                      </div>
                                                                      </div>
                                                                      </div>
                                                                      </div>


                                        <?php
                                                  if (isset($_SESSION['message'])) {
                                                      echo '<p class="msg" style="	border: 2px solid #ffa908;
                                                        border-radius: 3px; text-align:center; font-weight:bold; color:black;"> ' . $_SESSION['message'] . ' </p>';
                                                  }
                                                  unset($_SESSION['message']);
                                                   ?>


</body>
</html>

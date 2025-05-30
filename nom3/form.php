<!DOCTYPE html>
  <html lang="ru">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="libs/bootstrap-4.0.0-dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="style8.css">
      <script src="libs/jquery-3.4.1.min.js"></script>
      <title>Задание 3</title>
  </head>
  <body>
  <div class="pform">
    <form action="" method="post"> <!-- связывает форму с сервером, так как отправляет данные в index.php -->
        <h3>Форма</h3>
        <div>
 <!--Поля name="fio", name="phone" name="email" name="birthday" name="gender" 
 будут отправлены в $_POST['fio'],  $_POST['phone'],  $_POST['email'], $_POST['birthday'], $_POST['gender'] на сервер -->
            <input class="w100" type="text" name="fio" placeholder="ФИО">
        </div>
        <div>
            <input class="w100" type="tel" name="phone" placeholder="Телефон">
        </div>
        <div>
            <input class="w100" type="email" name="email" placeholder="email">
        </div>
        <div>
            <input class="w100" type="date" name="birthday">
        </div>
        <div class="ent">
            <div>Пол:</div>
            <label>
                <input type="radio" name="gender" value="male">
                Мужской
            </label>
            <br>
            <label>
                <input type="radio" name="gender" value="female">
                Женский
            </label>
        </div>
        <div class="ent">
            <!-- Тк можно выбрать несколько языков программирования, то name="like_lang[]" попадет в $_POST['like_lang'] на сервер в качестве массива  -->
            <select class="w100" name="like_lang[]" id="like_lang" multiple="multiple">
                <option disabled selected>Любимый язык программирования</option>
                <option value="Pascal">Pascal</option>
                <option value="C">C</option>
                <option value="C++">C++</option>
                <option value="JavaScript">JavaScript</option>
                <option value="PHP">PHP</option>
                <option value="Python">Python</option>
                <option value="Java">Java</option>
                <option value="Haskel">Haskel</option>
                <option value="Clojure">Clojure</option>
                <option value="Prolog">Prolog</option>
                <option value="Scala">Scala</option>
            </select>
        </div>
        <!-- name="biography" и name="oznakomlen" =>  $_POST['biography'] и $_POST['oznakomlen']-->
        <div>
            <textarea name="biography" placeholder="Биография"></textarea>
        </div>
        <div>
            <input type="checkbox" name="oznakomlen" id="oznakomlen">
            <label for="oznakomlen">С контрактом ознакомлен (а)</label>
        </div>
        <!-- кнопка отправки, которая запускает POST-запрос в index.php оправляет все данные в index.php -->
        <button type="submit">Отправить</button>
    </form>
  </div>
</body>
</html>

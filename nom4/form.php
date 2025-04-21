<!DOCTYPE html>
  <html lang="ru">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="libs/bootstrap-4.0.0-dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="style8.css">
      <script src="libs/jquery-3.4.1.min.js"></script>
      <title>Задание 4</title>
  </head>
  <body>
  <div class="pform">
    <form action="" method="post"> <!-- связывает форму с сервером, так как отправляет данные в index.php -->
        <h3>Форма</h3>
 <!--Поля name="fio", name="phone" name="email" name="birthday" name="gender" 
 будут отправлены в $_POST['fio'],  $_POST['phone'],  $_POST['email'], $_POST['birthday'], $_POST['gender'] на сервер -->
            <div class="message"><?php if(isset($messages['success'])) echo $messages['success']; ?></div>
        <div>
            <input class="w100 <?php echo ($errors['fio'] != NULL) ? 'borred' : ''; ?>" value="<?php echo $values['fio']; ?>" type="text" name="fio" placeholder="ФИО">
            <div class="errpodinp"><?php echo $messages['fio']?></div>
        </div>
        <div>
            <input class="w100 <?php echo ($errors['phone'] != NULL) ? 'borred' : ''; ?>" value="<?php echo $values['phone']; ?>" type="tel" name="phone" placeholder="Телефон">
            <div class="errpodinp"><?php echo $messages['phone']?></div>
        </div>
        <div>
            <input class="w100 <?php echo ($errors['email'] != NULL) ? 'borred' : ''; ?>" value="<?php echo $values['email']; ?>" type="email" name="email" placeholder="email">
            <div class="errpodinp"><?php echo $messages['email']?></div>
        </div>
        <div>
            <input class="w100 <?php echo ($errors['birthday'] != NULL) ? 'borred' : ''; ?>" value="<?php if($values['birthday'] > 100000) echo $values['birthday']; ?>" type="date" name="birthday">
            <div class="errpodinp"><?php echo $messages['birthday']?></div>
        </div>
        <div class="ent">
            <div>Пол:</div>
            <label>
                <input type="radio" name="gender" value="male" <?php if($values['gender'] == 'male') echo 'checked'; ?>>
                <span class="<?php echo ($errors['gender'] != NULL) ? 'colred' : ''; ?>">Мужской</span>
            </label>
            <br>
            <label>
                <input type="radio" name="gender" value="female" <?php if($values['gender'] == 'female') echo 'checked'; ?>>
                <span class="<?php echo ($errors['gender'] != NULL) ? 'colred' : ''; ?>">Женский</span>
            </label>
            <div class="errpodinp"><?php echo $messages['gender']?></div>
        </div>
        <div class="ent">
            <!-- Тк можно выбрать несколько языков программирования, то name="like_lang[]" попадет в $_POST['like_lang'] на сервер в качестве массива  -->
            <select class="w100 <?php echo ($errors['like_lang'] != NULL) ? 'borred' : ''; ?>" name="like_lang[]" id="like_lang" multiple="multiple">
                <option disabled selected>Любимый язык программирования</option>
                <option value="Pascal" <?php echo (in_array('Pascal', $like_langsa)) ? 'selected' : ''; ?>>Pascal</option>
                <option value="C" <?php echo (in_array('C', $like_langsa)) ? 'selected' : ''; ?>>C</option>
                <option value="C++" <?php echo (in_array('C++', $like_langsa)) ? 'selected' : ''; ?>>C++</option>
                <option value="JavaScript" <?php echo (in_array('JavaScript', $like_langsa)) ? 'selected' : ''; ?>>JavaScript</option>
                <option value="PHP" <?php echo (in_array('PHP', $like_langsa)) ? 'selected' : ''; ?>>PHP</option>
                <option value="Python" <?php echo (in_array('Python', $like_langsa)) ? 'selected' : ''; ?>>Python</option>
                <option value="Java" <?php echo (in_array('Java', $like_langsa)) ? 'selected' : ''; ?>>Java</option>
                <option value="Haskel" <?php echo (in_array('Haskel', $like_langsa)) ? 'selected' : ''; ?>>Haskel</option>
                <option value="Clojure" <?php echo (in_array('Clojure', $like_langsa)) ? 'selected' : ''; ?>>Clojure</option>
                <option value="Prolog" <?php echo (in_array('Prolog', $like_langsa)) ? 'selected' : ''; ?>>Prolog</option>
                <option value="Scala" <?php echo (in_array('Scala', $like_langsa)) ? 'selected' : ''; ?>>Scala</option>
            </select>
            <div class="errpodinp"><?php echo $messages['like_lang']?></div>
        </div>
        <!-- name="biography" и name="oznakomlen" =>  $_POST['biography'] и $_POST['oznakomlen']-->
        <div>
            <textarea name="biography" placeholder="Биография" class="<?php echo ($errors['biography'] != NULL) ? 'borred' : ''; ?>"><?php echo $values['biography']; ?></textarea>
            <div class="errpodinp"><?php echo $messages['biography']?></div>
        </div>
        <div>
            <input type="checkbox" name="oznakomlen" id="oznakomlen" <?php echo ($values['oznakomlen'] != NULL) ? 'checked' : ''; ?>>
            <label for="oznakomlen" class="<?php echo ($errors['oznakomlen'] != NULL) ? 'colred' : ''; ?>">С контрактом ознакомлен (а)</label>
            <div class="errpodinp"><?php echo $messages['oznakomlen']?></div>
        </div>
        <!-- кнопка отправки, которая запускает POST-запрос в index.php оправляет все данные в index.php -->
        <button type="submit">Отправить</button>
    </form>
  </div>
</body>
</html>

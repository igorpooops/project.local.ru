<!doctype html>
<html lang=ru>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Test PHP my</title>
</head>
<body>
    <div class="myfrom">
        <form action="#" method="post">
            <div class="form-register">
           <div class="name">
               <label for="name_people">Имя пользователя</label>
               <input type="text" id="name_people" name="name" required placeholder="Ваше имя">
           </div>

            <div class="surname">
                <label for="surname_people">Фамилия пользователя</label>
                <input type="text" id="surname_people" name="surname" required placeholder="Ваша фамилия">
            </div>

            <div class="phone">
                <label for="phone_people">Телефон пользователя</label>
                <input type="select" id="phone_people" name="phone"  placeholder="+7 (900) 123-45-67" pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}" required>
            </div>
                <div class="male">
                <label for="male_people_M">M</label>
                    <input type="radio" name="male" id="male_people_M" value="Male">
                    <label for="male_people_F">Ж</label>
                    <input type="radio" name="male" id="male_people_F" value="Female">
                </div>
                <div class="login">
                    <label for="login_people">Логин пользователя</label>
                    <input type="text" id="login_people" name="login" required>
                </div>
                <div class="password">
                    <label for="password_people">Пароль пользователя</label>
                    <input type="password" id="password_people" name="password" required>
                </div>
                <button type="submit">Отправить форму регистрации</button>

            </div>


        </form>



</body>
</html>




<?php

$host = 'localhost';
$db = 'vhod';
$user = 'postgres';
$password = '12345';

$conn = pg_connect("host=$host port = 5432 dbname=$db user=$user password=$password");

?>



//<form id="registerForm" class="form-container" method="POST" action="register.php" onsubmit="return validateForm(this);">
    <h2 class="form-title">Регистрация</h2>
    <input type="text" name="surname" class="form-input placeholder-black" placeholder="Фамилия" required>
    <input type="text" name="name" class="form-input placeholder-black" placeholder="Имя" required>
    <input type="text" name="patronymic" class="form-input placeholder-black" placeholder="Отчество" required>
    <input type="text" name="login" class="form-input placeholder-black" placeholder="Логин" required>
    <input type="password" name="password" class="form-input placeholder-black" placeholder="Пароль" required>
    <input type="text" name="phone" class="form-input placeholder-black" placeholder="Телефон" required>
    <button class="but form-button" type="submit">Зарегистрироваться</button>
</form>//
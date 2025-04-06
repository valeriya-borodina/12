<?php

require_once('db.php');
//получение данных из формы
$fio = trim($_POST['fio']);
$email = trim($_POST['email']);
$pass = $_POST['password'];

//опредеяем sql запрос
$query = "INSERT INTO registr (fio, email, password) VALUES ($1, $2, $3)";
//выполняем запрос
$result = pg_query_params($conn, $query, array($fio, $email, $pass));
//проверить запрос успешно или нет
if ($result) {
    echo "Данные успешно добавлены.";
} else {
    echo "Ошибка: " . pg_last_error($conn);
}
//перенаправление пользователя на другую страницу
header('Location: reg.php');
pg_close($conn);
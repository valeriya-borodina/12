<?php
session_start();
require_once('db.php');

$login = trim($_POST['email']);
$password = $_POST['password'];
$personalCode = $_POST['personalCode'];

$query = "SELECT * FROM registr WHERE email = $1";
$result = pg_query_params($conn, $query, array($login));

if ($result && pg_num_rows($result) > 0) {
    $registr = pg_fetch_assoc($result);

    if (password_verify($password, $registr['password'])) {
        $_SESSION['registr'] = [
            "id" => $registr['id'],
            "fio" => $registr['fio'],
            "email" => $registr['email'],
            "password" => $registr['password'],
        ];
        if ($registr['id'] === '1') {
            header('Location: index.php');
        } else if ($registr['id'] == '2'){
            header('Location: uslygi.php');
        }
        exit();
    } else {
        $_SESSION['message'] = "Неверный логин (почта) или пароль.";
        header('Location: kontakti.php');
        exit();
    }
} else {
    $_SESSION['message'] = "Неверный логин (почта) или пароль.";
    header('Location: kontakti.php');
    exit();
}
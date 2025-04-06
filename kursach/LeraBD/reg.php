<?php
session_start();
require_once('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="../LERABD/assets/img/logo/Снимок экрана 2024-12-02 162227.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../LERABD/assets/css/menu.css">
    <link rel="stylesheet" href="../LERABD/assets/css/avtoriz.css">
    <link rel="stylesheet" href="../LERABD/assets/css/main.css">
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>
   

    <title>МедЭкперт</title>

</head>
<body>
<header class="shadow p-3 mb-5 bg-body-tertiary rounded">
        <nav class="navbar navbar-expand-lg">
          <div class="container">
          <span class="logo"><a href="../LERABD/index.php" style="text-decoration: none; color:white;">МЕДЭКСПЕРТ®</a></span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Переключатель навигации">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mx-auto mb-2 mb-lg-0">  
                <li class="nav-item"><a class="nav-link" href="../LERABD/feedback.php">Отзывы</a></li>
                <li class="nav-item"><a class="nav-link" href="../LERABD/uslygi.php">Услуги</a></li>
                <li class="nav-item"><a class="nav-link" href="../LERABD/news.php">Новости</a></li>
                <li class="nav-item"><a class="nav-link" href="../LERABD/kontakti.php">Контакты</a></li>
              </ul>
              <form class="d-flex">
              <button class="btn btn" type="submit" style="background-color: #532AAE;"><a href="../LERABD/reg.php" style="text-decoration: none; color: inherit; color: white;">Войти</a></button>
              </form>
            </div>
          </div>
        </nav>
      </header>


    <main style="margin-bottom: 104px;">
      
      <div class="registration-form-container">
        <div class="container-fluid mb-5" id="usl">
          <div class="container d-flex flex-column">
            <h1>Регистрация</h1>
            <div class="mt-3">  
              <span>Уже есть аккаунт?</span> <a href="../LERABD/log.php" style="font-size: 24px;">Вход</a>
            </div>
          </div>
        </div>
        <form action="regcon.php" method="post" id="registrationForm" class="container needs-validation">
          <div class="col">
            <input type="text" class="form-control" id="fio" placeholder="ФИО*" name="fio" required>
            <div class="invalid-feedback">ФИО должно содержать только русские или английские буквы.</div>
          </div>
          <div class="col">
            <input type="email" class="form-control" id="email" placeholder="Почта*" name="email" required>
            <div class="invalid-feedback">Пожалуйста, введите корректный email адрес (только английские буквы).</div>
          </div>
          <div class="col">
            <input type="password" class="form-control" id="password" placeholder="Пароль*" name="password" required>
            <div class="invalid-feedback">Пароль должен содержать минимум 8 символов (английские буквы и цифры, хотя бы один специальный символ).</div>
          </div>
          <div class="col">
            <input type="password" class="form-control" id="confirmPassword" placeholder="Повторите пароль*" required>
            <div class="invalid-feedback">Пароли не совпадают.</div>
          </div>
          <div class="col-12">
            <button class="btn btn" style="background-color: #532AAE; color: white; max-width: 541px; height: 64px; width: 440px; border-radius: 20px;" type="submit">Войти в систему</button>
          </div>
        </form>
      </div>
    </main>


    <footer>
      <div class="horizontal-line"></div>
      <div class="container mb-5">
        <div class="row">
          <div class="col align-self-start">
            <span class="logo">МЕДЭКСПЕРТ®</span>
            <h3 style="color: #718096; font-size: 14px; font-family: Inter; font-weight: 400;">Медицинская организация «МедЭксперт» по городу Санкт-Петербург и Ленинградской области</h3>
          </div>
          <div class="col align-self-start">
            <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link disabled" href="#" style="font-size: 18px; color: #000;">Навигация</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../LERABD/news.php" style="color: #718096; font-size: 14px; font-family: Inter; font-weight: 400;">О нас</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../LERABD/uslygi.php" style="color: #718096; font-size: 14px; font-family: Inter; font-weight: 400;">Услуги</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../LERABD/uslygi.php" style="color: #718096; font-size: 14px; font-family: Inter; font-weight: 400;">Специалисты</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../LERABD/kontakti.php" style="color: #718096; font-size: 14px; font-family: Inter; font-weight: 400;">Контакты</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../LERABD/404.php" style="color: #718096; font-size: 14px; font-family: Inter; font-weight: 400;">Цены</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../LERABD/404.php" style="color: #718096; font-size: 14px; font-family: Inter; font-weight: 400;">Как записаться?</a>
              </li>
            </ul>
          </div>
          <div class="col align-self-start">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link disabled" href="#" style="font-size: 18px; color: #000;">Свяжитесь с нами</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" style="color: #718096; font-size: 14px; font-family: Inter; font-weight: 400;">Просто напишите нашему менеджеру по этой ссылке  vk.cc/bXE4gb</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" style="color: #718096; font-size: 14px; font-family: Inter; font-weight: 400;">Звоните 8(950)2268682Или приходите в офис г. Санкт-Петербург, ул. Торфяная , д.2а </a>
              </li>
            </ul>
          </div>
          <div class="col text-end">
            <div class="card1" style="width: 18rem;">
              <a href=""><img src="../LERABD/assets/img/uslugi/94c2315f80127cef186f8551bbc4f6a9.png"  alt="" style="max-width: 77px; margin-bottom: 200px;"></a>
              <div class="card-body" style="display: flex; justify-content: end;">
                <div class="container-fluid" style="padding: 0; margin: 0; max-width: 50px;">
                  <div class="toggle">
                    <input type="checkbox">
                    <span class="button"></span>
                    <span class="label"><img src="../LERABD/assets/img/uslugi/whats.png" alt="" style="max-width: 27px;"></span>
                  </div>
                </div>
                <div class="container-fluid" style="padding-right: 10px ; margin: 0; max-width: 50px;">
                  <div class="toggle">
                    <input type="checkbox">
                    <span class="button"></span>
                    <span class="label"><img src="../LERABD/assets/img/uslugi/vk.png" alt="" style="max-width: 27px;"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="horizontal-line1"></div>
      <div class="container" style="display: flex; justify-content: center; margin-top: 44px; margin-bottom: 51px;">
        <span style="font-size: 20px;">© 2024 МедЭксперт. Все права защищены</span>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</script>
    <script src="/assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

</body>
</html>

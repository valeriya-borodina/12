<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="../LERABD/assets/img/logo/Снимок экрана 2024-12-02 162227.png">
    <link rel="stylesheet" href="../LERABD/assets/css/usl.css">
    <link rel="stylesheet" href="../LERABD/assets/css/menu.css">
    <link rel="stylesheet" href="../LERABD/assets/css/main.css">
    
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


    <main>
          <div class="container" style="margin-bottom: 114px; display: flex; justify-content: center;">
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Направление</th>
                    <th scope="col">ФИО</th>
                    <th scope="col">ПН</th>
                    <th scope="col">Вт</th>
                    <th scope="col">Ср</th>
                    <th scope="col">Чт</th>
                    <th scope="col">Пт</th>
                    <th scope="col">Сб</th>
                    <th scope="col">Вс</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Главный врач</th>
                    <td>Прокофьев В.Ю.</td>
                    <td>9.15-11;12.30-15 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>ПРИЕМА НЕТ <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>9.15-11;12.30-15 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>9.15-11;12.30-15 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>9.15-10;12.30-15 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>-</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <th scope="row">Терапевт</th>
                    <td>Черничук М.М.</td>
                    <td>8-13;13.30-15 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>8-13;13.30-15 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>8-13;13.30-15 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>8-13 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>8-13:13.30-15 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>-</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <th scope="row">Профпатолог (заключение ком.)</th>
                    <td >Мусабекова И.Н.</td>
                    <td>12-15 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>8-11 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>13-15 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>8-11 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>13-15 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>-</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <th scope="row">Физиотерапия</th>
                    <td >Коробкина И.В.</td>
                    <td>9-12.30 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>9-12.30 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>9-12.30 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>9-12.30 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>9-12.30 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>-</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <th scope="row">Хирург</th>
                    <td >-</td>
                    <td>16-17.30 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>15-17 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>8-9.30 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>16-17.30 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>15-17 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>-</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <th scope="row">Отоларинголог (ЛОР)+вест. апп.</th>
                    <td >-</td>
                    <td>16-17.30 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>15-17 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>8-9.30 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>16-17.30 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>15-17 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>-</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <th scope="row">Аудиометрия</th>
                    <td >Трофимова Е.Ю.</td>
                    <td>10.30-12 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>10.30-12 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>10.30-12 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>10.30-12 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>10.30-12 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>-</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <th scope="row">Стоматолог</th>
                    <td >Топешкина С.А.</td>
                    <td>8-11 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>14-17 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>8-11 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>14-17 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>8-11 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>-</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <th scope="row">Стоматолог</th>
                    <td >Мынта Ю.В.</td>
                    <td>ПРИЕМА НЕТ <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>ПРИЕМА НЕТ <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>ПРИЕМА НЕТ <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>ПРИЕМА НЕТ <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>ПРИЕМА НЕТ <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>Приём по номеркам <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <th scope="row">Офтальмолог</th>
                    <td >Гусалова З.Б.</td>
                    <td>8-11 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>8-11 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>8-11 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>8-10 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>8-11 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>-</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <th scope="row">Психиатр и нарколог</th>
                    <td >Булатная Н.С.</td>
                    <td>8-11.30 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>ПРИЕМА НЕТ <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>12-15.30 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>ПРИЕМА НЕТ <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>10-13 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>-</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <th scope="row">Невролог (профосмотр)</th>
                    <td >Лохвицкая С.В.</td>
                    <td>8-11.30 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>12-15.30 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>10-13 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>12-15.30 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>8-11.30 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>-</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <th scope="row">Гинеколог (по записи)</th>
                    <td >-</td>
                    <td>15.30-17 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>16-17.30 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>ПРИЕМА НЕТ <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>15.30-17 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>ПРИЕМА НЕТ <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>-</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <th scope="row">Гинеколог (по записи)</th>
                    <td >-</td>
                    <td>12.30-15.30 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>ПРИЕМА НЕТ <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>12.30-15.30 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>ПРИЕМА НЕТ <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>12.30-15.30 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>-</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <th scope="row">Массаж</th>
                    <td >Гиносян А.С.</td>
                    <td>ПРИЕМА НЕТ <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>ПРИЕМА НЕТ <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>ПРИЕМА НЕТ <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>ПРИЕМА НЕТ <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>ПРИЕМА НЕТ <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">записаться</button></td>
                    <td>-</td>
                    <td>-</td>
                  </tr>
                </tbody>
              </table>
          </div>
          <script src="http://code.jquery.com/jquery-2.0.2.min.js"></script>
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <p class="modal-title fs-5" id="exampleModalLabel">Поздравляем! Ваша запись на приём к врачу-специалисту успешно зарегистрирована. <br>С вами в ближайшее время свяжется администратор клиники для подтверждения времени и уточнения всех деталей. Если у вас возникнут вопросы, не стесняйтесь обращаться к нам.</p> 
        
      </div>
      <div class="modal-body">
      <p>Спасибо, что выбрали нашу клинику!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
        <button type="button" class="btn btn-primary">Сохранить изменения</button>
      </div>
    </div>
  </div>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <script src="../LERABD/assets/js/main.js"></script>
</body>
</html>
<?php

require_once "db.php";

$stmt = $pdo->query("select * from works");
$works = $stmt->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Мое портфолио</title>
</head>
<body>
    <section class="first-screen section-bg">
  <div class="container">
    <div>
      <h1>Веб-разработчик <br> к вашим услугам</h1>
    </div>
    <div>
      <a class="btn btn-bg" href="#">Узнать больше</a>
      <a class="btn btn-outline" href="#">Нанять меня</a>
    </div>
  </div>
</section>
<a class="chevron" href="#container">
   <img src="img/siuuuu.png" alt="scroll">
</a>
<section>
  <div id="container"class="container">
    <h2>Обо мне</h2>
  </div>
  <p>
    Студент 3 курса колледжа начинающий веб дизайнер и разработчик сайтов подключенных к БД
  </p>
  <p>
  Детально подхожу к каждой работе и очень тщательно изучаю документацию
  </p>
  </section>
  <section>
    <div class="container">
      <h2>Портфолио</h2>
    </div>
<div id="lightgallery" class="gallery">
    <?php foreach($works as $work): ?>
    <a class="img-wrapper"
 data-sub-html="<?= $work['name'] ?>"
 href="<?= $work['file_path'] ?>">
        <img src="<?= $work['file_path'] ?>" />
    </a>
    <?php endforeach; ?>
</div>
</section>
<section class="section-bg">
  <div class="container">
  <div class="d-flex">
      <div class="w-60 pr-4">
          <h2>Давайте работать вместе</h2>
          <p>
             Практический опыт показывает, что новая модель организационной деятельности способствует повышению актуальности системы масштабного изменения ряда параметров!
          </p>
      </div>
      <div class="w-40">
        <script src="https://yastatic.net/s3/frontend/forms/_/embed.js"></script><iframe src="https://forms.yandex.ru/u/6297299e487d68aeb36afc7c/?iframe=1" frameborder="0" name="ya-form-6297299e487d68aeb36afc7c" width="650"></iframe>
      </div>
  </div>
</div>
</section>
<png xmlns="pisa" width="56" height="100">
  <rect width="56" height="100" fill="#403F4C"></rect>
  <path d="M28 66L0 50L0 16L28 0L56 16L56 50L28 66L28 100" fill="none" stroke="#706f7d" stroke-width="2"></path>
  <path class=”animation” d="M28 0L28 34L0 50L0 84L28 100L56 84L56 50L28 34" fill="none" stroke="#595867" stroke-width="2">
    <style>
      .animation {
          animation: blinking 2s infinite;
      }
      @keyframes blinking {
          0%, 100% {
              stroke: #706f7d;
          }
          50% {
              stroke: #82828c;
          }
      }
  </style>
</png>
<footer>
  <div class="container">
      Mensort Copyright &copy; 2022. Все права защищены.
  </div>
</footer>
</body>
</html>

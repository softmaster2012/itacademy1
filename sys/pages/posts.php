<?php
  $title = "Публикации";
  function createContent() {
?>

<div id="thumbs">
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="app/files/01.png">
                <h3>Открытие Информационного Веб-Портала</h3>
                <p class="post">
                    Quick Response Code доступа к нашему интернет-ресурсу: Информационному веб-порталу
                    Малой Компьютерной Академии при Киевском филиале Международной Копьютерной Академии
                    "Шаг".
                </p>
                <p>
                    <a href="app/files/Инфоормационный Портал МКА.pdf" class="btn btn-primary" role="button">
                        Перейти
                    </a>
                </p>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="app/files/02.png">
                <h3>Расписание на 2 смену ЗКЛ-2017</h3>
                <p class="post">
                    Расписание занятий 2 смены Зимнего Компьютерного Лагеря сезона 2016-2017. Время
                    проведения: 03.01 - 06.01 2017 года. Место проведения - Киевский филиал Международной
                    Компьютерной Академии "Шаг".
                </p>
                <p>
                    <a href="app/files/Расписание 2 смены Зимнего Компьютерного Лагеря 2017.pdf"
                       class="btn btn-primary" role="button">
                        Перейти
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>

<style type="text/css">
    #thumbs {
        text-align: center;
        border: 1px solid silver;
        margin-left: 10%;
        margin-right: 10%;
        margin-top: 15px;
        border-radius: 15px;
        box-shadow: 0 0 silver, 10px 20px 80px gray;
        padding: 15px;
    }
    #thumbs h3 {
        color: darkcyan;
        font: 15pt "Comic Sans MS";
    }
    #thumbs p {
        font: 13pt "Comic Sans MS";
    }
    .post {
        font: 13pt "Comic Sans MS";
        text-align: justify;
        text-indent: 30px;
        margin-left: 20px;
        margin-right: 20px;
    }
</style>

<?php
  }
?>
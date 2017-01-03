<?php
  $title = "Новости";
  function createContent() {
?>

<div id="news">
    <div class="jumbotron">
        <h2>Открытие Информационного Веб-Портала Малой Компьютерной Академии</h2>
        <hr />
        <p id="content">
            26.12.2016 состоялось открытие нашего интернет-ресурса - Информационного Веб-Портала
            Киевского филиала Малой Компьютерной Академии при Международной Компьютерной Академии
            "Шаг". Компьютерная Академия "Шаг" - высшее учебное заведение, специализирующиеся на
            профессиональной подготовке специалистов в различных областях современных IT-технологий:
            разработке программного обеспечения, компьютерной графике и дизайне, компьютерной инженерии,
            системном администрировании, сетевых технологиях и кибер-безопасности. Академия имеет 36
            дейтсвующих филиалов в 16 странах мира, обучает более 20000 студентов и за 13-летнюю историю
            выпустила более 80000 успешных выпускников. Малая Компьютерная Академия выполняет функции
            базового компьютерного образования для школьников 10-14 летнего возраста с перспективой
            продолжения обучения на основных факультетах (с 15 лет). Информационный Портал предназначен
            для оперативного информрования студентов и их родителей о наиболее важных мероприятиях,
            презентациях, конкурсах, семинарах, встречах и конференциях, а также - для размещения
            различных сопутствующих медиа-материалов. Добро пожаловать на наш ресурс!
        </p>
        <hr />
        <p><a class="btn btn-primary btn-lg" href="http://itstep.org" role="button">Learn more</a></p>
    </div>

</div>
<div id="news">
    <div class="jumbotron">
        <h2>Продолжается набор участников 2 смены Зимнего Компьютерного Лагеря</h2>
        <hr />
        <p id="content">
            До начала 2 смены Зимнего Компьютерного Лагеря 2017 осталось:
            <div id="timer">00 дней 00 часов 00 минут 00 секунд</div>
            <script type="text/javascript">
                function tick() {
                    var now = new Date();
                    var future = new Date(2017, 0, 3, 9, 0, 0, 0);
                    var diff = new Date(future.getTime() - now.getTime());
                    var d = diff.getDate();
                    var h = diff.getHours();
                    var m = diff.getMinutes();
                    var s = diff.getSeconds();
                    var time = "";
                    time += (d < 10) ? "0" + d + " дней " : d + " дней ";
                    time += (h < 10) ? "0" + h + " часов " : h + " часов ";
                    time += (m < 10) ? "0" + m + " минут " : m + " минут ";
                    time += (s < 10) ? "0" + s + " секунд" : s + " секунд";
                    document.getElementById("timer").innerHTML = time;
                }
                setInterval(tick, 1000);
            </script>
        </p>
        <hr />
        <p>
            <a class="btn btn-primary btn-lg"
               href="http://kiev.itstep.org/zimni-kompyuternyj-lager/"
               role="button">
                Learn more
            </a>
        </p>
    </div>
</div>

<style type="text/css">
    #news {
        text-align: justify;
        border: 1px solid silver;
        margin-left: 10%;
        margin-right: 10%;
        margin-top: 15px;
        border-radius: 15px;
        box-shadow: 0 0 silver, 10px 20px 40px lightgray;
        padding: 15px;
    }
    #news h2 {
        color: darkcyan;
        font: 16pt "Comic Sans MS";
        font-weight: bold;
    }
    #content {
        font: 14pt "Comic Sans MS";
        text-indent: 50px;
    }
    #news .jumbotron {
        padding: 20px 50px;
    }
    #timer {
        margin-left: 50px;
    }
</style>

<?php
  }
?>
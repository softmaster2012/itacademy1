<?php
  $title = "Главная";
  function createContent() {
?>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox" style="width: 80%; margin: 0 auto">
    <div class="item active"><img src="res/images/p1.jpg" width="100%"/></div>
    <div class="item"><img src="res/images/p2.jpg" width="100%"></div>
    <div class="item"><img src="res/images/p7.jpg" width="100%"></div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div id="thumbs">
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="res/images3/16.jpg">
                <h3>Первые впечатления</h3>
                <p>Начало 1 смены Зимнего Компьютерного Лагеря сезона 2016-2017</p>
                <p><a href="index.php?id=g1" class="btn btn-primary" role="button">Перейти</a></p>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="res/images/p14.jpg">
                <h3>Исторический архив</h3>
                <p>Подборка архивных материалов Летнего Компьютерного Лагеря сезона Лето-2016</p>
                <p><a href="index.php?id=g3" class="btn btn-primary" role="button">Перейти</a></p>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="res/images4/DSC_0143.JPG">
                <h3>Погружение в компьютерные науки</h3>
                <p>Увлекательные будни 1 смены Зимнего Компьютерного Лагеря сезона 2016-2017</p>
                <p><a href="index.php?id=g2" class="btn btn-primary" role="button">Перейти</a></p>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="res/images5/DSC_0201.JPG">
                <h3>Выпускной 1 смены ЗКЛ-2017</h3>
                <p>Репортаж с церемонии закрытия 1 смены Зимнего Компьютерного Лагеря сезона 2016-2017</p>
                <p><a href="index.php?id=g4" class="btn btn-primary" role="button">Перейти</a></p>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="res/images6/DSC_0216.JPG">
                <h3>Начало занятий 2 смены ЗКЛ-2917</h3>
                <p>Первые занятия 2 смены Зимнего Компьютерного Лагеря сезона 2016-2017</p>
                <p><a href="index.php?id=g5" class="btn btn-primary" role="button">Перейти</a></p>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/9HBnceEF-iY" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        <!--
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/MPUj6cRfuH4" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        -->
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/yyFNxJfuGUk" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/or2MXfOo0i8" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/4skqnyH6Crw" frameborder="0" allowfullscreen></iframe>
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
</style>

<?php
  }
?>	
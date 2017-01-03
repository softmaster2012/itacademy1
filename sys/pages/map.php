<?php
  $title = "Контакты";
  function createContent() {
?>

<div id="map">
    <script type="text/javascript" charset="utf-8"
        async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=naRMY10qFOv_N3Sq4fz0iFV9orQ6-WHM&amp;width=100%;height=720&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true">
    </script>
</div>

<style type="text/css">
    #map {
        text-align: center;
        border: 1px solid silver;
        margin-left: 10%;
        margin-right: 10%;
        margin-top: 15px;
        border-radius: 15px;
        box-shadow: 0 0 silver, 10px 20px 80px gray;
        padding: 25px;
    }
    #map h3 {
        color: darkcyan;
        font: 15pt "Comic Sans MS";
    }
    #map p {
        font: 13pt "Comic Sans MS";
    }
</style>

<?php
  }
?>
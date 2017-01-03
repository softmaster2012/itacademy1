<?php
  $title = "Галерея 1";
  function createContent() {
?>

<div id="gbox1">
    <script type="text/javascript">
        var code = '';
        for (var i = 1; i < 10; i++) {
            code += '<a href="res/images3/0' + i + '.jpg">';
            code += '<img src="res/images3/0' + i + '.jpg" class="g1"/>';
            code += '</a>';
        }
        for (var i = 11; i < 26; i++) {
            code += '<a href="res/images3/' + i + '.jpg">';
            code += '<img src="res/images3/' + i + '.jpg" class="g1"/>';
            code += '</a>';
        }
        document.write(code);
    </script>
</div>

<style type="text/css">
    #gbox1 {
        text-align: center;
        border: 1px solid silver;
        margin-left: 10%;
        margin-right: 10%;
        margin-top: 15px;
        border-radius: 15px;
        box-shadow: 0 0 silver, 10px 20px 80px gray;
        padding: 15px;
    }
    .g1 {
        width: 350px;
        height: 250px;
        border: 1px solid silver;
        padding: 5px;
        margin: 5px;
    }
</style>

<?php
  }
?>
<?php
  $title = "Галерея 3";
  function createContent() {
?>

<div id="gbox3">
    <script type="text/javascript">
        var code = '';
        for (var i = 5; i < 21; i++) {
            code += '<a href="res/images/p' + i + '.jpg">';
            code += '<img src="res/images/p' + i + '.jpg" class="g3"/>';
            code += '</a>';
        }
        document.write(code);
    </script>
</div>

<style type="text/css">
    #gbox3 {
        text-align: center;
        border: 1px solid silver;
        margin-left: 10%;
        margin-right: 10%;
        margin-top: 15px;
        border-radius: 15px;
        box-shadow: 0 0 silver, 10px 20px 80px gray;
        padding: 15px;
    }
    .g3 {
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
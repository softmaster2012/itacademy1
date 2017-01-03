<?php
  $title = "Галерея 2";
  function createContent() {
?>

<div id="gbox2">
    <script type="text/javascript">
        var code = '';
        for (var i = 43; i < 80; i++) {
            if (i != 68) {
                code += '<a href="res/images4/DSC_01' + i + '.JPG">';
                code += '<img src="res/images4/DSC_01' + i + '.JPG" class="g2"/>';
                code += '</a>';
            }
        }
        document.write(code);
    </script>
</div>

<style type="text/css">
    #gbox2 {
        text-align: center;
        border: 1px solid silver;
        margin-left: 10%;
        margin-right: 10%;
        margin-top: 15px;
        border-radius: 15px;
        box-shadow: 0 0 silver, 10px 20px 80px gray;
        padding: 15px;
    }
    .g2 {
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
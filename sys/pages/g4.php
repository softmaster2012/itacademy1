<?php
  $title = "Галерея 4";
  function createContent() {
?>

<div id="gbox4">
    <script type="text/javascript">
        var code = '';
        for (var i = 180; i < 203; i++) {
            if (i != 195) {
                code += '<a href="res/images5/DSC_0' + i + '.JPG">';
                code += '<img src="res/images5/DSC_0' + i + '.JPG" class="g4"/>';
                code += '</a>';
            }
        }
        document.write(code);
    </script>
</div>

<style type="text/css">
    #gbox4 {
        text-align: center;
        border: 1px solid silver;
        margin-left: 10%;
        margin-right: 10%;
        margin-top: 15px;
        border-radius: 15px;
        box-shadow: 0 0 silver, 10px 20px 80px gray;
        padding: 15px;
    }
    .g4 {
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
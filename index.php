<?php
  session_start();

  if (empty($_SESSION["user"])) {
    $user = "Гость";
  } else {
    $user = $_SESSION["user"];
  }

  if (empty($_GET["id"])) {
    $id = "main";
  } else {
    $id = $_GET["id"];
  }

  include("sys/pages/$id.php");
  include("tpl/base/base.php");
?>

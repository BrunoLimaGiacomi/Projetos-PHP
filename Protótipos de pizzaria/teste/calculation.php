<?php
  if (isset($_POST['calculation'])) {
    $calculation = $_POST['calculation'];
    $resultt = eval("return $calculation;");
    echo $resultt;
  }
?>

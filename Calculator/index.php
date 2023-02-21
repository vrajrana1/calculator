<?php
  include_once "Model/Calculator.php";
  include_once "form.html";

  if (isset($_POST["val1"]) && isset($_POST["val2"]) && isset($_POST["operation"])) {
    $val1 = $_POST["val1"];
    $val2 = $_POST["val2"];
    $operation = $_POST["operation"];

    $calculator = new Calculator($val1, $val2);
    switch ($operation) {
      case "add":
        $result = $calculator->add();
        break;
      case "subtract":
        $result = $calculator->subtract();
        break;
      case "multiply":
        $result = $calculator->multiply();
        break;
      case "divide":
        $result = $calculator->divide();
        break;
    }

    echo $result;
  }
?>
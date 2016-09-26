<!DOCTYPE html>
<html>
<head>
  <title>Menu App</title>
</head>
<body>
<form method="post">
  <input type="text" name="first" placeholder="first number"/>
  <select name="menu">
    <option value="default">Select Operation</option>
    <option value="add">Addition</option>
    <option value="subtract">Subtraction</option>
    <option value="multiply">Multiplication</option>
    <option value="divide">Division</option>
  </select>
  <input type="text" name="second" placeholder="second number" />
  <input type="submit" name="submit" value="submit">
</form>
<?php
  if ( isset($_POST['first']) || isset($_POST['second']) ) {
    switch ($_POST['menu']) {
      case 'add':
        $answer = $_POST['first'] + $_POST['second'];
        break;

      case 'subtract':
        $answer = $_POST['first'] - $_POST['second'];
        break;

      case 'multiply':
        $answer = $_POST['first'] * $_POST['second'];
        break;

      case 'divide':
        $answer = $_POST['first'] / $_POST['second'];
        break;

      default:
        $answer = 'Please choose an option';
        break;
    }
    echo "Answer: " . $answer;
    $answer = $_POST['first'] = $_POST['second'] = 0;
  } else {
    echo "Please insert values to calculate";
  }

?>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <title>String Manipulate</title>
</head>
<body>
<form method="post" action>
  <input type="text" name="string" placeholder="Input your text...">
  <input type="submit" name="submit" value="length">
  <input type="submit" name="submit" value="reverse">
  <input type="submit" name="submit" value="uppercase">
  <input type="submit" name="submit" value="lowercase">
  <input type="submit" name="submit" value="replace">
</form>
<?php
  if($_POST['submit']) {
    $text = $_POST['string'];
    switch ($_POST['submit']) {
      case 'length':
        echo "\"$text\" has " . strlen($text) . " characters.";
        break;

      case 'reverse':
        echo "The reverse of \"$text\" is " . strrev($text);
        break;

      case 'uppercase':
        echo "\"$text\" to uppercase is " . strtoupper($text);
        break;

      case 'lowercase':
        echo "\"$text\" to lowercase is " . strtolower($text);
        break;

      case 'replace':
        echo "Replacing all vowels in \"$text\" with numbers gives: " . str_replace(["a","e","i","o","u"], [1,2,3,4,5], strtolower($text));
        break;
      
      default:
        # code...
        break;
    }

  } else {
  
  }
?>
</body>
</html>
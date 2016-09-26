<!DOCTYPE html>
<html>
<head>
  <title>Home Affairs Compnay</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <header>
    <h2>Home Affairs Company</h2>
  </header>
  <section>
    <p>
    <?php 
      if($_POST['submit']) {
        $fullname = $_POST['fullname'];
        $city = $_POST['city'];
        $area = $_POST['length'] * $_POST['width'];
        $cost = $area * 2500;

      echo "<p>My Full Name is $fullname</p>";
      echo "<p>The City is $city</p>";
      echo "<p>The total area of land is $area sq. unit</p>";
      echo "<p>The total cost of Land is N$cost</p>";
    } else {
      echo "You have not supplied any information.";
    }
    ?>
    </p>
  </section>
  <footer>
    
  </footer>
</body>
</html>
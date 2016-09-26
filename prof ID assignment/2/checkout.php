<?php 
  switch ($_GET['f']) {
    case 'jfc':
      $food = "Jollof Rice and Chicken";
      break;

    case 'wrb':
      $food = "White Rice and Beef";
      break;

    case 'pea':
      $food = "Pounded Yam with egusi and assorted meat";
      break;
    
    default:
      # code...
      break;
  }
  $price = $_GET['p'];
?>
<!DOCTYPE html>
<html>
<head>
  <title>BeeFoods</title>
  <link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
  <div class="main-container">
    <header>
      <div>
        <h1>BeeFoods Menu</h1>
      </div>
      <nav>
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="menu.html">Menu</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </nav>
    </header>
    <section>
      <section class>
      <?php 
        if($_POST['checkout']) {
          $food     = $_POST['food'];
          $price    = $_POST['price'];
          $qty      = $_POST['qty'];
          $address  = $_POST['address'];
      ?>
        <h2>Thanks for your order</h2>
        <p>Receipt</p>
        <?php echo "<p>Food ordered:<span>$food</span> </p>"; ?>
        <?php echo "<p>No of plates:<span> $qty</span> at N$price per plate</p>"; ?>
        <?php echo "<p>Total: N". $qty*$price ." (to be paid on delivery)</p>"; ?>
        <?php echo "<p>To be delivered to: <span>$address</span> </p>"; ?>

      <?php
        } else {
      ?>
        <h2>Error: No order found!!!</h2>
        <p>We can't find the order you requested for. Please make a fresh order <a href="menu.html">here</a></p>
      <?php
        }
      ?>
      </section>
    </section>
    <footer>
      Copyright &copy; 2015 - BeeFoods Ltd - All rights reserved!
    </footer>
  </div>
</body>
</html>
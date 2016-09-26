<?php 
  switch ($_GET['f']) {
    case 'jrc':
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
      <section class="order">
        <h2><?php echo "Order for $food" ?></h2>
        <p>
           <form action="checkout.php" method="post">
             <div>
               <input name="food" type="hidden" value="<?php echo $food; ?>" />
               <input name="price" type="hidden" value="<?php echo $price; ?>" />
             </div>
             <div>
               <label>No of plates:</label>
               <input name="qty" type="number" value="1" />
             </div>
             <div>
               <label>Delivery address:</label>
               <input name="address" type="text" value="" />
             </div>
             <button type="submit" value="checkout" name="checkout" >Checkout</button>
           </form>
        </p>
      </section>
    </section>
    <footer>
      Copyright &copy; 2015 - BeeFoods Ltd - All rights reserved!
    </footer>
</div>
</body>
</html>
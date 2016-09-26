<!DOCTYPE html>
<html>
<head>
  <title>BeeFoods</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <div class="main-container">
    <header>
      <div>
        <h1>BeeFoods Restaurant App</h1>
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
      <section>
        <h2>Admin login</h2>
        <p>
           <form action="process.php" method="post">
             <div>
               <label>Username:</label>
               <input name="username" type="text" value="" placeholder="username" />
             </div>
             <div>
               <label>Password</label>
               <input name="password" type="password" value="" />
             </div>
             <input name="type" type="text" value="login" />
             <button type="submit" value="submit" name="submit" >Login</button>
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